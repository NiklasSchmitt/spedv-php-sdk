<?php
/**
 * FPHSpedVAPIObjectsSpeditionsTaskDriveData
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
 * FPHSpedVAPIObjectsSpeditionsTaskDriveData Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class FPHSpedVAPIObjectsSpeditionsTaskDriveData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FPH.SpedV.API.Objects.Speditions.TaskDriveData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'timestamp' => '\DateTime',
        'velocity' => 'int',
        'speed_limit' => 'int',
        'cruise_control' => 'int',
        'x_coord' => 'float',
        'z_coord' => 'float',
        'mp_server' => 'string',
        'odometer' => 'float',
        'freight_damage_percent' => 'float',
        'truck_damage_percent' => 'float',
        'truck_fuel' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'timestamp' => 'date-time',
        'velocity' => 'int32',
        'speed_limit' => 'int32',
        'cruise_control' => 'int32',
        'x_coord' => 'double',
        'z_coord' => 'double',
        'mp_server' => null,
        'odometer' => 'double',
        'freight_damage_percent' => 'double',
        'truck_damage_percent' => 'double',
        'truck_fuel' => 'double'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'timestamp' => false,
        'velocity' => false,
        'speed_limit' => false,
        'cruise_control' => false,
        'x_coord' => false,
        'z_coord' => false,
        'mp_server' => true,
        'odometer' => true,
        'freight_damage_percent' => true,
        'truck_damage_percent' => true,
        'truck_fuel' => true
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
        'id' => 'id',
        'timestamp' => 'timestamp',
        'velocity' => 'velocity',
        'speed_limit' => 'speedLimit',
        'cruise_control' => 'cruiseControl',
        'x_coord' => 'x_Coord',
        'z_coord' => 'z_Coord',
        'mp_server' => 'mpServer',
        'odometer' => 'odometer',
        'freight_damage_percent' => 'freightDamagePercent',
        'truck_damage_percent' => 'truckDamagePercent',
        'truck_fuel' => 'truckFuel'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'timestamp' => 'setTimestamp',
        'velocity' => 'setVelocity',
        'speed_limit' => 'setSpeedLimit',
        'cruise_control' => 'setCruiseControl',
        'x_coord' => 'setXCoord',
        'z_coord' => 'setZCoord',
        'mp_server' => 'setMpServer',
        'odometer' => 'setOdometer',
        'freight_damage_percent' => 'setFreightDamagePercent',
        'truck_damage_percent' => 'setTruckDamagePercent',
        'truck_fuel' => 'setTruckFuel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'timestamp' => 'getTimestamp',
        'velocity' => 'getVelocity',
        'speed_limit' => 'getSpeedLimit',
        'cruise_control' => 'getCruiseControl',
        'x_coord' => 'getXCoord',
        'z_coord' => 'getZCoord',
        'mp_server' => 'getMpServer',
        'odometer' => 'getOdometer',
        'freight_damage_percent' => 'getFreightDamagePercent',
        'truck_damage_percent' => 'getTruckDamagePercent',
        'truck_fuel' => 'getTruckFuel'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('timestamp', $data ?? [], null);
        $this->setIfExists('velocity', $data ?? [], null);
        $this->setIfExists('speed_limit', $data ?? [], null);
        $this->setIfExists('cruise_control', $data ?? [], null);
        $this->setIfExists('x_coord', $data ?? [], null);
        $this->setIfExists('z_coord', $data ?? [], null);
        $this->setIfExists('mp_server', $data ?? [], null);
        $this->setIfExists('odometer', $data ?? [], null);
        $this->setIfExists('freight_damage_percent', $data ?? [], null);
        $this->setIfExists('truck_damage_percent', $data ?? [], null);
        $this->setIfExists('truck_fuel', $data ?? [], null);
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['timestamp'] === null) {
            $invalidProperties[] = "'timestamp' can't be null";
        }
        if ($this->container['velocity'] === null) {
            $invalidProperties[] = "'velocity' can't be null";
        }
        if ($this->container['speed_limit'] === null) {
            $invalidProperties[] = "'speed_limit' can't be null";
        }
        if ($this->container['cruise_control'] === null) {
            $invalidProperties[] = "'cruise_control' can't be null";
        }
        if ($this->container['x_coord'] === null) {
            $invalidProperties[] = "'x_coord' can't be null";
        }
        if ($this->container['z_coord'] === null) {
            $invalidProperties[] = "'z_coord' can't be null";
        }
        if ($this->container['mp_server'] === null) {
            $invalidProperties[] = "'mp_server' can't be null";
        }
        if ($this->container['odometer'] === null) {
            $invalidProperties[] = "'odometer' can't be null";
        }
        if ($this->container['freight_damage_percent'] === null) {
            $invalidProperties[] = "'freight_damage_percent' can't be null";
        }
        if ($this->container['truck_damage_percent'] === null) {
            $invalidProperties[] = "'truck_damage_percent' can't be null";
        }
        if ($this->container['truck_fuel'] === null) {
            $invalidProperties[] = "'truck_fuel' can't be null";
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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return \DateTime
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param \DateTime $timestamp timestamp
     *
     * @return self
     */
    public function setTimestamp($timestamp)
    {
        if (is_null($timestamp)) {
            throw new \InvalidArgumentException('non-nullable timestamp cannot be null');
        }
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets velocity
     *
     * @return int
     */
    public function getVelocity()
    {
        return $this->container['velocity'];
    }

    /**
     * Sets velocity
     *
     * @param int $velocity velocity
     *
     * @return self
     */
    public function setVelocity($velocity)
    {
        if (is_null($velocity)) {
            throw new \InvalidArgumentException('non-nullable velocity cannot be null');
        }
        $this->container['velocity'] = $velocity;

        return $this;
    }

    /**
     * Gets speed_limit
     *
     * @return int
     */
    public function getSpeedLimit()
    {
        return $this->container['speed_limit'];
    }

    /**
     * Sets speed_limit
     *
     * @param int $speed_limit speed_limit
     *
     * @return self
     */
    public function setSpeedLimit($speed_limit)
    {
        if (is_null($speed_limit)) {
            throw new \InvalidArgumentException('non-nullable speed_limit cannot be null');
        }
        $this->container['speed_limit'] = $speed_limit;

        return $this;
    }

    /**
     * Gets cruise_control
     *
     * @return int
     */
    public function getCruiseControl()
    {
        return $this->container['cruise_control'];
    }

    /**
     * Sets cruise_control
     *
     * @param int $cruise_control cruise_control
     *
     * @return self
     */
    public function setCruiseControl($cruise_control)
    {
        if (is_null($cruise_control)) {
            throw new \InvalidArgumentException('non-nullable cruise_control cannot be null');
        }
        $this->container['cruise_control'] = $cruise_control;

        return $this;
    }

    /**
     * Gets x_coord
     *
     * @return float
     */
    public function getXCoord()
    {
        return $this->container['x_coord'];
    }

    /**
     * Sets x_coord
     *
     * @param float $x_coord x_coord
     *
     * @return self
     */
    public function setXCoord($x_coord)
    {
        if (is_null($x_coord)) {
            throw new \InvalidArgumentException('non-nullable x_coord cannot be null');
        }
        $this->container['x_coord'] = $x_coord;

        return $this;
    }

    /**
     * Gets z_coord
     *
     * @return float
     */
    public function getZCoord()
    {
        return $this->container['z_coord'];
    }

    /**
     * Sets z_coord
     *
     * @param float $z_coord z_coord
     *
     * @return self
     */
    public function setZCoord($z_coord)
    {
        if (is_null($z_coord)) {
            throw new \InvalidArgumentException('non-nullable z_coord cannot be null');
        }
        $this->container['z_coord'] = $z_coord;

        return $this;
    }

    /**
     * Gets mp_server
     *
     * @return string
     */
    public function getMpServer()
    {
        return $this->container['mp_server'];
    }

    /**
     * Sets mp_server
     *
     * @param string $mp_server mp_server
     *
     * @return self
     */
    public function setMpServer($mp_server)
    {
        if (is_null($mp_server)) {
            array_push($this->openAPINullablesSetToNull, 'mp_server');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('mp_server', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['mp_server'] = $mp_server;

        return $this;
    }

    /**
     * Gets odometer
     *
     * @return float
     */
    public function getOdometer()
    {
        return $this->container['odometer'];
    }

    /**
     * Sets odometer
     *
     * @param float $odometer odometer
     *
     * @return self
     */
    public function setOdometer($odometer)
    {
        if (is_null($odometer)) {
            array_push($this->openAPINullablesSetToNull, 'odometer');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('odometer', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['odometer'] = $odometer;

        return $this;
    }

    /**
     * Gets freight_damage_percent
     *
     * @return float
     */
    public function getFreightDamagePercent()
    {
        return $this->container['freight_damage_percent'];
    }

    /**
     * Sets freight_damage_percent
     *
     * @param float $freight_damage_percent freight_damage_percent
     *
     * @return self
     */
    public function setFreightDamagePercent($freight_damage_percent)
    {
        if (is_null($freight_damage_percent)) {
            array_push($this->openAPINullablesSetToNull, 'freight_damage_percent');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('freight_damage_percent', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['freight_damage_percent'] = $freight_damage_percent;

        return $this;
    }

    /**
     * Gets truck_damage_percent
     *
     * @return float
     */
    public function getTruckDamagePercent()
    {
        return $this->container['truck_damage_percent'];
    }

    /**
     * Sets truck_damage_percent
     *
     * @param float $truck_damage_percent truck_damage_percent
     *
     * @return self
     */
    public function setTruckDamagePercent($truck_damage_percent)
    {
        if (is_null($truck_damage_percent)) {
            array_push($this->openAPINullablesSetToNull, 'truck_damage_percent');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('truck_damage_percent', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['truck_damage_percent'] = $truck_damage_percent;

        return $this;
    }

    /**
     * Gets truck_fuel
     *
     * @return float
     */
    public function getTruckFuel()
    {
        return $this->container['truck_fuel'];
    }

    /**
     * Sets truck_fuel
     *
     * @param float $truck_fuel truck_fuel
     *
     * @return self
     */
    public function setTruckFuel($truck_fuel)
    {
        if (is_null($truck_fuel)) {
            array_push($this->openAPINullablesSetToNull, 'truck_fuel');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('truck_fuel', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['truck_fuel'] = $truck_fuel;

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


