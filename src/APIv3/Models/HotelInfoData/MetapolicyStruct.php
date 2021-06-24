<?php

namespace PAPI\APIv3\Models\HotelInfoData;

class MetapolicyStruct
{
    /**
     * @var \PAPI\APIv3\Models\HotelInfoData\MetapolicyStruct\Internet[]
     */
    public $internet;

    /**
     * @var \PAPI\APIv3\Models\HotelInfoData\MetapolicyStruct\AddFee[]
     */
    public $add_fee;

    /**
     * @var \PAPI\APIv3\Models\HotelInfoData\MetapolicyStruct\CheckinCheckout[]|null
     */
    public $check_in_check_out;

    /**
     * @var \PAPI\APIv3\Models\HotelInfoData\MetapolicyStruct\Children[]
     */
    public $children;

    /**
     * @var \PAPI\APIv3\Models\HotelInfoData\MetapolicyStruct\ChildrenMeal[]
     */
    public $children_meal;

    /**
     * @var \PAPI\APIv3\Models\HotelInfoData\MetapolicyStruct\Cradle[]|null
     */
    public $cradle;

    /**
     * @var \PAPI\APIv3\Models\HotelInfoData\MetapolicyStruct\Deposit[]
     */
    public $deposit;

    /**
     * @var \PAPI\APIv3\Models\HotelInfoData\MetapolicyStruct\ExtraBed[]
     */
    public $extra_bed;

    /**
     * @var \PAPI\APIv3\Models\HotelInfoData\MetapolicyStruct\Meal[]
     */
    public $meal;

    /**
     * @var \PAPI\APIv3\Models\HotelInfoData\MetapolicyStruct\NoShow[]
     */
    public $no_show;

    /**
     * @var \PAPI\APIv3\Models\HotelInfoData\MetapolicyStruct\Parking[]
     */
    public $parking;

    /**
     * @var \PAPI\APIv3\Models\HotelInfoData\MetapolicyStruct\Pets[]
     */
    public $pets;

    /**
     * @var \PAPI\APIv3\Models\HotelInfoData\MetapolicyStruct\Shuttle[]
     */
    public $shuttle;

    /**
     * @var \PAPI\APIv3\Models\HotelInfoData\MetapolicyStruct\Visa[]
     */
    public $visa;
}
