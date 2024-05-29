<?php
/**
 * FPHSpedVAPIObjectsOMSIDrivenTripBusStop
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
 * FPHSpedVAPIObjectsOMSIDrivenTripBusStop Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class FPHSpedVAPIObjectsOMSIDrivenTripBusStop implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FPH.SpedV.API.Objects.OMSI.DrivenTripBusStop';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'bus_stop' => '\OpenAPI\Client\Model\FPHSpedVAPIObjectsOMSIBusStop',
        'odometer' => 'float',
        'delay_arival' => 'float',
        'delay_departure' => 'float',
        'passengers' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'bus_stop' => null,
        'odometer' => 'double',
        'delay_arival' => 'double',
        'delay_departure' => 'double',
        'passengers' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'bus_stop' => true,
        'odometer' => false,
        'delay_arival' => false,
        'delay_departure' => false,
        'passengers' => false
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
        'bus_stop' => 'busStop',
        'odometer' => 'odometer',
        'delay_arival' => 'delayArival',
        'delay_departure' => 'delayDeparture',
        'passengers' => 'passengers'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'bus_stop' => 'setBusStop',
        'odometer' => 'setOdometer',
        'delay_arival' => 'setDelayArival',
        'delay_departure' => 'setDelayDeparture',
        'passengers' => 'setPassengers'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'bus_stop' => 'getBusStop',
        'odometer' => 'getOdometer',
        'delay_arival' => 'getDelayArival',
        'delay_departure' => 'getDelayDeparture',
        'passengers' => 'getPassengers'
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
        $this->setIfExists('bus_stop', $data ?? [], null);
        $this->setIfExists('odometer', $data ?? [], null);
        $this->setIfExists('delay_arival', $data ?? [], null);
        $this->setIfExists('delay_departure', $data ?? [], null);
        $this->setIfExists('passengers', $data ?? [], null);
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
        if ($this->container['bus_stop'] === null) {
            $invalidProperties[] = "'bus_stop' can't be null";
        }
        if ($this->container['odometer'] === null) {
            $invalidProperties[] = "'odometer' can't be null";
        }
        if ($this->container['delay_arival'] === null) {
            $invalidProperties[] = "'delay_arival' can't be null";
        }
        if ($this->container['delay_departure'] === null) {
            $invalidProperties[] = "'delay_departure' can't be null";
        }
        if ($this->container['passengers'] === null) {
            $invalidProperties[] = "'passengers' can't be null";
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
     * Gets bus_stop
     *
     * @return \OpenAPI\Client\Model\FPHSpedVAPIObjectsOMSIBusStop
     */
    public function getBusStop()
    {
        return $this->container['bus_stop'];
    }

    /**
     * Sets bus_stop
     *
     * @param \OpenAPI\Client\Model\FPHSpedVAPIObjectsOMSIBusStop $bus_stop bus_stop
     *
     * @return self
     */
    public function setBusStop($bus_stop)
    {
        if (is_null($bus_stop)) {
            array_push($this->openAPINullablesSetToNull, 'bus_stop');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('bus_stop', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['bus_stop'] = $bus_stop;

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
            throw new \InvalidArgumentException('non-nullable odometer cannot be null');
        }
        $this->container['odometer'] = $odometer;

        return $this;
    }

    /**
     * Gets delay_arival
     *
     * @return float
     */
    public function getDelayArival()
    {
        return $this->container['delay_arival'];
    }

    /**
     * Sets delay_arival
     *
     * @param float $delay_arival delay_arival
     *
     * @return self
     */
    public function setDelayArival($delay_arival)
    {
        if (is_null($delay_arival)) {
            throw new \InvalidArgumentException('non-nullable delay_arival cannot be null');
        }
        $this->container['delay_arival'] = $delay_arival;

        return $this;
    }

    /**
     * Gets delay_departure
     *
     * @return float
     */
    public function getDelayDeparture()
    {
        return $this->container['delay_departure'];
    }

    /**
     * Sets delay_departure
     *
     * @param float $delay_departure delay_departure
     *
     * @return self
     */
    public function setDelayDeparture($delay_departure)
    {
        if (is_null($delay_departure)) {
            throw new \InvalidArgumentException('non-nullable delay_departure cannot be null');
        }
        $this->container['delay_departure'] = $delay_departure;

        return $this;
    }

    /**
     * Gets passengers
     *
     * @return int
     */
    public function getPassengers()
    {
        return $this->container['passengers'];
    }

    /**
     * Sets passengers
     *
     * @param int $passengers passengers
     *
     * @return self
     */
    public function setPassengers($passengers)
    {
        if (is_null($passengers)) {
            throw new \InvalidArgumentException('non-nullable passengers cannot be null');
        }
        $this->container['passengers'] = $passengers;

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


