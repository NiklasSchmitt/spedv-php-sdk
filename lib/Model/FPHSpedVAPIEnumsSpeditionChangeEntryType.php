<?php
/**
 * FPHSpedVAPIEnumsSpeditionChangeEntryType
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * SpedV API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: v1
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;
use \OpenAPI\Client\ObjectSerializer;

/**
 * FPHSpedVAPIEnumsSpeditionChangeEntryType Class Doc Comment
 *
 * @category Class
 * @description 0 &#x3D; TaskDeducted  1 &#x3D; TaskRejected  2 &#x3D; RankChanged  3 &#x3D; RankDeleted  4 &#x3D; UserRankChanged  5 &#x3D; UserDismissed  6 &#x3D; SpeditionSettingChanged  7 &#x3D; ApplicationTextChanged  8 &#x3D; ApplicationAcknowledged  9 &#x3D; ApplicationRejected  10 &#x3D; BranchBought  11 &#x3D; BranchExpandedTruckParkplace  12 &#x3D; BranchShrinkedTruckParkplace  13 &#x3D; BranchDeleted  14 &#x3D; TruckBought  15 &#x3D; TruckSold  16 &#x3D; TruckLicensePlateChanged  17 &#x3D; BoniAdded  18 &#x3D; BoniDeleted  19 &#x3D; RankAddedPermission  20 &#x3D; RankDeletedPermission  21 &#x3D; BranchExpandedTrailerParkplace  22 &#x3D; BranchShrinkedTrailerParkplace  23 &#x3D; BranchExpandedMaintenancePlace  24 &#x3D; BranchShrinkedMaintenancePlace  25 &#x3D; TruckTransfered  26 &#x3D; TruckMaintenancePlanned  27 &#x3D; TruckMaintenanceAborted  -1 &#x3D; NotSet
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FPHSpedVAPIEnumsSpeditionChangeEntryType
{
    /**
     * Possible values of this enum
     */
    public const NUMBER_0 = 0;

    public const NUMBER_1 = 1;

    public const NUMBER_2 = 2;

    public const NUMBER_3 = 3;

    public const NUMBER_4 = 4;

    public const NUMBER_5 = 5;

    public const NUMBER_6 = 6;

    public const NUMBER_7 = 7;

    public const NUMBER_8 = 8;

    public const NUMBER_9 = 9;

    public const NUMBER_10 = 10;

    public const NUMBER_11 = 11;

    public const NUMBER_12 = 12;

    public const NUMBER_13 = 13;

    public const NUMBER_14 = 14;

    public const NUMBER_15 = 15;

    public const NUMBER_16 = 16;

    public const NUMBER_17 = 17;

    public const NUMBER_18 = 18;

    public const NUMBER_19 = 19;

    public const NUMBER_20 = 20;

    public const NUMBER_21 = 21;

    public const NUMBER_22 = 22;

    public const NUMBER_23 = 23;

    public const NUMBER_24 = 24;

    public const NUMBER_25 = 25;

    public const NUMBER_26 = 26;

    public const NUMBER_27 = 27;

    public const NUMBER_MINUS_1 = -1;

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NUMBER_0,
            self::NUMBER_1,
            self::NUMBER_2,
            self::NUMBER_3,
            self::NUMBER_4,
            self::NUMBER_5,
            self::NUMBER_6,
            self::NUMBER_7,
            self::NUMBER_8,
            self::NUMBER_9,
            self::NUMBER_10,
            self::NUMBER_11,
            self::NUMBER_12,
            self::NUMBER_13,
            self::NUMBER_14,
            self::NUMBER_15,
            self::NUMBER_16,
            self::NUMBER_17,
            self::NUMBER_18,
            self::NUMBER_19,
            self::NUMBER_20,
            self::NUMBER_21,
            self::NUMBER_22,
            self::NUMBER_23,
            self::NUMBER_24,
            self::NUMBER_25,
            self::NUMBER_26,
            self::NUMBER_27,
            self::NUMBER_MINUS_1
        ];
    }
}


