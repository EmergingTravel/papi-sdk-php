<?php

namespace PAPI\APIv3\Models;

class OverviewData
{
    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var bool
     */
    public $is_active;

    /**
     * @var bool
     */
    public $is_debug_mode;

    /**
     * @var bool
     */
    public $is_limited;

    /**
     * @var int
     */
    public $requests_number;

    /**
     * @var int
     */
    public $seconds_number;
}
