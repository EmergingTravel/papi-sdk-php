<?php

namespace PAPI\APIv3;

use Exception;
use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;
use GuzzleHttp\Utils;
use JsonMapper;
use JsonMapper_Exception;
use PAPI\APIv3\Models\HotelInfoResponse;
use PAPI\APIv3\Models\OverviewResponse;
use PAPI\APIv3\Exceptions\InvalidAuthData;
use PAPI\Constants;

class Client
{
    /**
     * @var HttpClient
     */
    private $httpClient;

    /**
     * @var JsonMapper
     */
    private $mapper;

    /**
     * @param string $key
     * @param array $config Guzzle http client default request options
     * @throws InvalidAuthData
     *
     * @see \GuzzleHttp\RequestOptions for a list of available request options.
     */
    function __construct(string $key, array $config = [])
    {
        $config = Client::_add_auth($config, $key);
        $config = Client::_add_user_agent($config);
        $this->httpClient = new HttpClient($config);
        $this->mapper = new JsonMapper();
        $this->mapper->bEnforceMapType = false;
    }

    /**
     * @param array $config
     * @param string $key
     * @return array
     * @throws InvalidAuthData
     */
    private static function _add_auth(array $config, string $key): array
    {
        [$key_id, $key] = Client::_get_key_data($key);
        $config[RequestOptions::AUTH] = [$key_id, $key];
        return $config;
    }

    /**
     * @param string $key
     * @return array
     * @throws InvalidAuthData
     */
    private static function _get_key_data(string $key): array
    {
        try {
            [$key_id, $key] = explode(':', $key, 2);
            return [$key_id, $key];
        } catch (Exception $e) {
            throw new InvalidAuthData($key);
        }
    }

    /**
     * @param array $config
     * @return array
     */
    private static function _add_user_agent(array $config): array
    {
        $papiSdkVersion = Constants::NAME . '/' . Constants::VERSION;
        $httpClientVersion = Utils::defaultUserAgent();
        $phpVersion = 'php/' . PHP_VERSION;
        $headers = ['User-Agent' => $papiSdkVersion . ' ' . $httpClientVersion . ' (' . $phpVersion . ')'];

        if (!isset($config[RequestOptions::HEADERS])) {
            $config[RequestOptions::HEADERS] = $headers;
        } else {
            $config[RequestOptions::HEADERS] += $headers;
        }

        return $config;
    }

    /**
     * Endpoints Overview
     *
     * The list of all available for your contract endpoints and their settings.
     * @link https://docs.emergingtravel.com/?version=latest#1ac1095b-caec-43ce-b8f2-aea779024883
     *
     * @param array $options Request options to apply. See \GuzzleHttp\RequestOptions.
     * @return OverviewResponse
     * @throws GuzzleException
     * @throws JsonMapper_Exception
     */
    public function overview(array $options = []): OverviewResponse
    {
        $response = $this->httpClient->get(Endpoints::OVERVIEW);
        return $this->mapper->map(
            json_decode($response->getBody(), true),
            new OverviewResponse()
        );
    }

    /**
     * Hotel Data Search
     *
     * Hotel data search by hotel identifier.
     * It is supposed to be used only in case when available hotel is not included in
     * the downloaded hotel data dump file - it can happen to new hotels in Emerging Travel Group inventory.
     * This method can also be used for checking the content prior to reservation (with possible update).
     * @link https://docs.emergingtravel.com/?version=latest#cbbbb393-cb06-4bfe-a007-f5b07d1cf8a3
     *
     * @param array{id: string, language: string} $data See \PAPI\APIv3\Models\HotelInfoRequest
     * @param array $options Request options to apply. See \GuzzleHttp\RequestOptions
     * @return HotelInfoResponse
     * @throws GuzzleException
     * @throws JsonMapper_Exception
     * @see \PAPI\APIv3\Models\HotelInfoRequest
     */
    public function getHotelInfo(array $data, array $options = []): HotelInfoResponse
    {
        $options['body'] = json_encode($data);
        $response = $this->httpClient->post(Endpoints::HOTEL_INFO, $options);
        return $this->mapper->map(
            json_decode($response->getBody(), true),
            new HotelInfoResponse()
        );
    }
}
