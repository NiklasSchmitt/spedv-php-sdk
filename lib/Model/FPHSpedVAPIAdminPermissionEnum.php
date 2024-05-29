<?php
/**
 * FPHSpedVAPIAdminPermissionEnum
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
 * FPHSpedVAPIAdminPermissionEnum Class Doc Comment
 *
 * @category Class
 * @description 0 &#x3D; None  1 &#x3D; SeeLiveData  2 &#x3D; HandleScreenshots  4 &#x3D; HandleTaskCheck  8 &#x3D; TicketSystem  16 &#x3D; ViewData  32 &#x3D; ChangeData  64 &#x3D; BanUser  128 &#x3D; MapImport  256 &#x3D; KontorManagement  512 &#x3D; IsManagement
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FPHSpedVAPIAdminPermissionEnum
{
    /**
     * Possible values of this enum
     */
    public const NUMBER_0 = 0;

    public const NUMBER_1 = 1;

    public const NUMBER_2 = 2;

    public const NUMBER_4 = 4;

    public const NUMBER_8 = 8;

    public const NUMBER_16 = 16;

    public const NUMBER_32 = 32;

    public const NUMBER_64 = 64;

    public const NUMBER_128 = 128;

    public const NUMBER_256 = 256;

    public const NUMBER_512 = 512;

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
            self::NUMBER_4,
            self::NUMBER_8,
            self::NUMBER_16,
            self::NUMBER_32,
            self::NUMBER_64,
            self::NUMBER_128,
            self::NUMBER_256,
            self::NUMBER_512
        ];
    }
}


