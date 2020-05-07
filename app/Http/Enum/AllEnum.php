<?php

namespace App\Http\Enum;

class AllEnum
{
    //------------------------------------------------STATUS ENUM-------------------------------------------------------
    const STATUS_PENDING = 1;
    const STATUS_ACTIVE = 2;
    const STATUS_INACTIVE = 3;

    //------------------------------------------ADDVERTISEMENT POSITION ENUM--------------------------------------------
    const ADD_POSITION_FONTPAGE = 1;
    const ADD_POSITION_BACKPAGE = 2;
    const ADD_POSITION_TOPPAGE = 3;
    const ADD_POSITION_SIDEBAR = 4;

    //-----------------------------------------------PRIORITY ENUM------------------------------------------------------
    const PRIORITY_HIGH = 1;
    const PRIORITY_MEDIUM = 2;
    const PRIORITY_LOW = 3;

    //----------------------------------------------NEWS STATUS ENUM----------------------------------------------------
    const NEWS_STATUS_PENDING = 1;
    const NEWS_STATUS_DRAFT = 2;
    const NEWS_STATUS_PUBLISHED = 3;

    //-----------------------------------------------NEWS TYPE ENUM ----------------------------------------------------
    const NEWS_TYPE_RSS_FEED = 1;
    const NEWS_TYPE_LOCAL_STAFF = 2;

}