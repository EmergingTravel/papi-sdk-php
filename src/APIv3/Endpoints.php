<?php

namespace PAPI\APIv3;

abstract class Endpoints
{
    private const BASE_PATH = 'https://api.worldota.net/';
    private const BASE_PAY_PATH = 'https://api.payota.net/';

    const OVERVIEW = Endpoints::BASE_PATH . "api/b2b/v3/overview/";
    const HOTEL_INFO = Endpoints::BASE_PATH . "api/b2b/v3/hotel/info/";
    const HOTEL_INFO_DUMP = Endpoints::BASE_PATH . "api/b2b/v3/hotel/info/dump/";
    const ORDER_BOOKING_FORM = Endpoints::BASE_PATH . "api/b2b/v3/hotel/order/booking/form/";
    const ORDER_BOOKING_FINISH = Endpoints::BASE_PATH . "api/b2b/v3/hotel/order/booking/finish/";
    const ORDER_BOOKING_FINISH_STATUS = Endpoints::BASE_PATH . "api/b2b/v3/hotel/order/booking/finish/status/";
    const ORDER_INFO = Endpoints::BASE_PATH . "api/b2b/v3/hotel/order/info/";
    const SEARCH_HOTEL_PAGE = Endpoints::BASE_PATH . "api/b2b/v3/search/hp/";
    const SEARCH_HOTELS = Endpoints::BASE_PATH . "api/b2b/v3/search/serp/hotels/";
    const SEARCH_REGION = Endpoints::BASE_PATH . "api/b2b/v3/search/serp/region/";
    const INIT_PAYMENT = Endpoints::BASE_PAY_PATH . "api/public/v1/manage/init_partners/";
}
