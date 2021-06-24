<?php

namespace PAPI\APIv3\Models\HotelInfoData;

class RoomGroup
{
    /**
     * @var string[]
     */
    public $images;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $room_amenities;

    /**
     * @var int|null
     */
    public $room_group_id;

    /**
     * @var \PAPI\APIv3\Models\HotelInfoData\RoomGroup\RgExt
     */
    public $rg_ext;
}
