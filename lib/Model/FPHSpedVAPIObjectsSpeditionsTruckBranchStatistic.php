<?php
/**
 * FPHSpedVAPIObjectsSpeditionsTruckBranchStatistic
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

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * FPHSpedVAPIObjectsSpeditionsTruckBranchStatistic Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class FPHSpedVAPIObjectsSpeditionsTruckBranchStatistic implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FPH.SpedV.API.Objects.Speditions.TruckBranchStatistic';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'maintenance_cost' => 'float',
        'fuel_usage' => 'int',
        'income' => 'int',
        'toll' => 'int',
        'distance_travelled' => 'int',
        'ferry_km' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'maintenance_cost' => 'double',
        'fuel_usage' => 'int32',
        'income' => 'int32',
        'toll' => 'int32',
        'distance_travelled' => 'int32',
        'ferry_km' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'maintenance_cost' => false,
        'fuel_usage' => false,
        'income' => false,
        'toll' => false,
        'distance_travelled' => false,
        'ferry_km' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'maintenance_cost' => 'maintenanceCost',
        'fuel_usage' => 'fuelUsage',
        'income' => 'income',
        'toll' => 'toll',
        'distance_travelled' => 'distanceTravelled',
        'ferry_km' => 'ferryKM'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'maintenance_cost' => 'setMaintenanceCost',
        'fuel_usage' => 'setFuelUsage',
        'income' => 'setIncome',
        'toll' => 'setToll',
        'distance_travelled' => 'setDistanceTravelled',
        'ferry_km' => 'setFerryKm'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'maintenance_cost' => 'getMaintenanceCost',
        'fuel_usage' => 'getFuelUsage',
        'income' => 'getIncome',
        'toll' => 'getToll',
        'distance_travelled' => 'getDistanceTravelled',
        'ferry_km' => 'getFerryKm'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('maintenance_cost', $data ?? [], null);
        $this->setIfExists('fuel_usage', $data ?? [], null);
        $this->setIfExists('income', $data ?? [], null);
        $this->setIfExists('toll', $data ?? [], null);
        $this->setIfExists('distance_travelled', $data ?? [], null);
        $this->setIfExists('ferry_km', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['maintenance_cost'] === null) {
            $invalidProperties[] = "'maintenance_cost' can't be null";
        }
        if ($this->container['fuel_usage'] === null) {
            $invalidProperties[] = "'fuel_usage' can't be null";
        }
        if ($this->container['income'] === null) {
            $invalidProperties[] = "'income' can't be null";
        }
        if ($this->container['toll'] === null) {
            $invalidProperties[] = "'toll' can't be null";
        }
        if ($this->container['distance_travelled'] === null) {
            $invalidProperties[] = "'distance_travelled' can't be null";
        }
        if ($this->container['ferry_km'] === null) {
            $invalidProperties[] = "'ferry_km' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets maintenance_cost
     *
     * @return float
     */
    public function getMaintenanceCost()
    {
        return $this->container['maintenance_cost'];
    }

    /**
     * Sets maintenance_cost
     *
     * @param float $maintenance_cost maintenance_cost
     *
     * @return self
     */
    public function setMaintenanceCost($maintenance_cost)
    {
        if (is_null($maintenance_cost)) {
            throw new \InvalidArgumentException('non-nullable maintenance_cost cannot be null');
        }
        $this->container['maintenance_cost'] = $maintenance_cost;

        return $this;
    }

    /**
     * Gets fuel_usage
     *
     * @return int
     */
    public function getFuelUsage()
    {
        return $this->container['fuel_usage'];
    }

    /**
     * Sets fuel_usage
     *
     * @param int $fuel_usage fuel_usage
     *
     * @return self
     */
    public function setFuelUsage($fuel_usage)
    {
        if (is_null($fuel_usage)) {
            throw new \InvalidArgumentException('non-nullable fuel_usage cannot be null');
        }
        $this->container['fuel_usage'] = $fuel_usage;

        return $this;
    }

    /**
     * Gets income
     *
     * @return int
     */
    public function getIncome()
    {
        return $this->container['income'];
    }

    /**
     * Sets income
     *
     * @param int $income income
     *
     * @return self
     */
    public function setIncome($income)
    {
        if (is_null($income)) {
            throw new \InvalidArgumentException('non-nullable income cannot be null');
        }
        $this->container['income'] = $income;

        return $this;
    }

    /**
     * Gets toll
     *
     * @return int
     */
    public function getToll()
    {
        return $this->container['toll'];
    }

    /**
     * Sets toll
     *
     * @param int $toll toll
     *
     * @return self
     */
    public function setToll($toll)
    {
        if (is_null($toll)) {
            throw new \InvalidArgumentException('non-nullable toll cannot be null');
        }
        $this->container['toll'] = $toll;

        return $this;
    }

    /**
     * Gets distance_travelled
     *
     * @return int
     */
    public function getDistanceTravelled()
    {
        return $this->container['distance_travelled'];
    }

    /**
     * Sets distance_travelled
     *
     * @param int $distance_travelled distance_travelled
     *
     * @return self
     */
    public function setDistanceTravelled($distance_travelled)
    {
        if (is_null($distance_travelled)) {
            throw new \InvalidArgumentException('non-nullable distance_travelled cannot be null');
        }
        $this->container['distance_travelled'] = $distance_travelled;

        return $this;
    }

    /**
     * Gets ferry_km
     *
     * @return int
     */
    public function getFerryKm()
    {
        return $this->container['ferry_km'];
    }

    /**
     * Sets ferry_km
     *
     * @param int $ferry_km ferry_km
     *
     * @return self
     */
    public function setFerryKm($ferry_km)
    {
        if (is_null($ferry_km)) {
            throw new \InvalidArgumentException('non-nullable ferry_km cannot be null');
        }
        $this->container['ferry_km'] = $ferry_km;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

