<?php

namespace PAPI\APIv3\Models;

class HotelInfoData {
    /**
     * @var string
     */
    public $address;

    /**
     * @var \PAPI\APIv3\Models\HotelInfoData\AmenityGroup[]
     */
    public $amenity_groups;

    /**
     * @var string
     */
    public $check_in_time;

    /**
     * @var string
     */
    public $check_out_time;

    /**
     * @var \PAPI\APIv3\Models\HotelInfoData\DescriptionItem[]
     */
    public $description_struct;

    /**
     * @var string|null
     */
    public $email;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string[]
     */
    public $images;

    /**
     * @var string
     */
    public $kind;

    /**
     * @var float
     */
    public $latitude;

    /**
     * @var float
     */
    public $longitude;

    /**
     * @var string
     */
    public $name;

    /**
     * @var \PAPI\APIv3\Models\HotelInfoData\MetapolicyStruct
     */
    public $metapolicy_struct;

    /**
     * @var string|null
     */
    public $phone;

    /**
     * @var \PAPI\APIv3\Models\HotelInfoData\PolicyItem[]
     */
    public $policy_struct;

    /**
     * @var string|null
     */
    public $postal_code;

    /**
     * @var \PAPI\APIv3\Models\HotelInfoData\Region
     */
    public $region;

    /**
     * @var \PAPI\APIv3\Models\HotelInfoData\RoomGroup[]
     */
    public $room_groups;

    /**
     * @var int
     */
    public $star_rating;

    /**
     * @var string[]
     */
    public $serp_filters;

    /**
     * @var bool
     */
    public $is_closed;
}
