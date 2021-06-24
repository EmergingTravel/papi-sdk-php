<?php

namespace PAPI\APIv3\Exceptions;

class InvalidAuthData extends BaseError {
    /**
     * @var string
     */
    public $key;

    /**
     * InvalidAuthData constructor.
     * @param string $key
     */
    public function __construct($key)
    {
        $this->key = $key;
        $message = "Invalid key format {$key}, must be key_id:key";
        parent::__construct($message);
    }
}
