<?php
/**
 * FPHSpedVAPIObjectsSpeditionsTaskPosition
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
 * FPHSpedVAPIObjectsSpeditionsTaskPosition Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class FPHSpedVAPIObjectsSpeditionsTaskPosition implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FPH.SpedV.API.Objects.Speditions.TaskPosition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'timestamp' => '\DateTime',
        'change_type' => '\OpenAPI\Client\Model\FPHSpedVAPITaskPositionType',
        'changed_by' => '\OpenAPI\Client\Model\FPHSpedVAPIObjectsUsersUser',
        'refused_truck' => '\OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsTruck',
        'state_changed_from' => '\OpenAPI\Client\Model\FPHSpedVAPIEnumsETSTaskState',
        'state_change_to' => '\OpenAPI\Client\Model\FPHSpedVAPIEnumsETSTaskState',
        'refueled_liter' => 'float',
        'refueled_sum' => 'float',
        'used_gas_station' => '\OpenAPI\Client\Model\FPHSpedVAPIObjectsMapsGasStation',
        'used_ferry' => '\OpenAPI\Client\Model\FPHSpedVAPIObjectsMapsFerry',
        'coordinates' => '\OpenAPI\Client\Model\FPHSpedVAPIObjectsTelemetryETSVektor',
        'comment' => 'string'
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
        'timestamp' => 'date-time',
        'change_type' => null,
        'changed_by' => null,
        'refused_truck' => null,
        'state_changed_from' => null,
        'state_change_to' => null,
        'refueled_liter' => 'double',
        'refueled_sum' => 'double',
        'used_gas_station' => null,
        'used_ferry' => null,
        'coordinates' => null,
        'comment' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'timestamp' => false,
        'change_type' => false,
        'changed_by' => true,
        'refused_truck' => true,
        'state_changed_from' => true,
        'state_change_to' => true,
        'refueled_liter' => true,
        'refueled_sum' => true,
        'used_gas_station' => true,
        'used_ferry' => true,
        'coordinates' => true,
        'comment' => true
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
        'change_type' => 'changeType',
        'changed_by' => 'changedBy',
        'refused_truck' => 'refusedTruck',
        'state_changed_from' => 'stateChangedFrom',
        'state_change_to' => 'stateChangeTo',
        'refueled_liter' => 'refueledLiter',
        'refueled_sum' => 'refueledSum',
        'used_gas_station' => 'usedGasStation',
        'used_ferry' => 'usedFerry',
        'coordinates' => 'coordinates',
        'comment' => 'comment'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'timestamp' => 'setTimestamp',
        'change_type' => 'setChangeType',
        'changed_by' => 'setChangedBy',
        'refused_truck' => 'setRefusedTruck',
        'state_changed_from' => 'setStateChangedFrom',
        'state_change_to' => 'setStateChangeTo',
        'refueled_liter' => 'setRefueledLiter',
        'refueled_sum' => 'setRefueledSum',
        'used_gas_station' => 'setUsedGasStation',
        'used_ferry' => 'setUsedFerry',
        'coordinates' => 'setCoordinates',
        'comment' => 'setComment'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'timestamp' => 'getTimestamp',
        'change_type' => 'getChangeType',
        'changed_by' => 'getChangedBy',
        'refused_truck' => 'getRefusedTruck',
        'state_changed_from' => 'getStateChangedFrom',
        'state_change_to' => 'getStateChangeTo',
        'refueled_liter' => 'getRefueledLiter',
        'refueled_sum' => 'getRefueledSum',
        'used_gas_station' => 'getUsedGasStation',
        'used_ferry' => 'getUsedFerry',
        'coordinates' => 'getCoordinates',
        'comment' => 'getComment'
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
        $this->setIfExists('change_type', $data ?? [], null);
        $this->setIfExists('changed_by', $data ?? [], null);
        $this->setIfExists('refused_truck', $data ?? [], null);
        $this->setIfExists('state_changed_from', $data ?? [], null);
        $this->setIfExists('state_change_to', $data ?? [], null);
        $this->setIfExists('refueled_liter', $data ?? [], null);
        $this->setIfExists('refueled_sum', $data ?? [], null);
        $this->setIfExists('used_gas_station', $data ?? [], null);
        $this->setIfExists('used_ferry', $data ?? [], null);
        $this->setIfExists('coordinates', $data ?? [], null);
        $this->setIfExists('comment', $data ?? [], null);
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
        if ($this->container['change_type'] === null) {
            $invalidProperties[] = "'change_type' can't be null";
        }
        if ($this->container['changed_by'] === null) {
            $invalidProperties[] = "'changed_by' can't be null";
        }
        if ($this->container['refused_truck'] === null) {
            $invalidProperties[] = "'refused_truck' can't be null";
        }
        if ($this->container['state_changed_from'] === null) {
            $invalidProperties[] = "'state_changed_from' can't be null";
        }
        if ($this->container['state_change_to'] === null) {
            $invalidProperties[] = "'state_change_to' can't be null";
        }
        if ($this->container['refueled_liter'] === null) {
            $invalidProperties[] = "'refueled_liter' can't be null";
        }
        if ($this->container['refueled_sum'] === null) {
            $invalidProperties[] = "'refueled_sum' can't be null";
        }
        if ($this->container['used_gas_station'] === null) {
            $invalidProperties[] = "'used_gas_station' can't be null";
        }
        if ($this->container['used_ferry'] === null) {
            $invalidProperties[] = "'used_ferry' can't be null";
        }
        if ($this->container['coordinates'] === null) {
            $invalidProperties[] = "'coordinates' can't be null";
        }
        if ($this->container['comment'] === null) {
            $invalidProperties[] = "'comment' can't be null";
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
     * Gets change_type
     *
     * @return \OpenAPI\Client\Model\FPHSpedVAPITaskPositionType
     */
    public function getChangeType()
    {
        return $this->container['change_type'];
    }

    /**
     * Sets change_type
     *
     * @param \OpenAPI\Client\Model\FPHSpedVAPITaskPositionType $change_type 0 = StateChange  1 = RefusedTruckInfo  2 = Refueled  3 = FerryUsed  -1 = NotSet
     *
     * @return self
     */
    public function setChangeType($change_type)
    {
        if (is_null($change_type)) {
            throw new \InvalidArgumentException('non-nullable change_type cannot be null');
        }
        $this->container['change_type'] = $change_type;

        return $this;
    }

    /**
     * Gets changed_by
     *
     * @return \OpenAPI\Client\Model\FPHSpedVAPIObjectsUsersUser
     */
    public function getChangedBy()
    {
        return $this->container['changed_by'];
    }

    /**
     * Sets changed_by
     *
     * @param \OpenAPI\Client\Model\FPHSpedVAPIObjectsUsersUser $changed_by changed_by
     *
     * @return self
     */
    public function setChangedBy($changed_by)
    {
        if (is_null($changed_by)) {
            array_push($this->openAPINullablesSetToNull, 'changed_by');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('changed_by', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['changed_by'] = $changed_by;

        return $this;
    }

    /**
     * Gets refused_truck
     *
     * @return \OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsTruck
     */
    public function getRefusedTruck()
    {
        return $this->container['refused_truck'];
    }

    /**
     * Sets refused_truck
     *
     * @param \OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsTruck $refused_truck refused_truck
     *
     * @return self
     */
    public function setRefusedTruck($refused_truck)
    {
        if (is_null($refused_truck)) {
            array_push($this->openAPINullablesSetToNull, 'refused_truck');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('refused_truck', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['refused_truck'] = $refused_truck;

        return $this;
    }

    /**
     * Gets state_changed_from
     *
     * @return \OpenAPI\Client\Model\FPHSpedVAPIEnumsETSTaskState
     */
    public function getStateChangedFrom()
    {
        return $this->container['state_changed_from'];
    }

    /**
     * Sets state_changed_from
     *
     * @param \OpenAPI\Client\Model\FPHSpedVAPIEnumsETSTaskState $state_changed_from 0 = InDrive  1 = Done  2 = Settled  3 = Fail  4 = AdminCheck  5 = Paused  6 = Cancelled  7 = Invalid  -1 = NotAvaliable
     *
     * @return self
     */
    public function setStateChangedFrom($state_changed_from)
    {
        if (is_null($state_changed_from)) {
            array_push($this->openAPINullablesSetToNull, 'state_changed_from');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('state_changed_from', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['state_changed_from'] = $state_changed_from;

        return $this;
    }

    /**
     * Gets state_change_to
     *
     * @return \OpenAPI\Client\Model\FPHSpedVAPIEnumsETSTaskState
     */
    public function getStateChangeTo()
    {
        return $this->container['state_change_to'];
    }

    /**
     * Sets state_change_to
     *
     * @param \OpenAPI\Client\Model\FPHSpedVAPIEnumsETSTaskState $state_change_to 0 = InDrive  1 = Done  2 = Settled  3 = Fail  4 = AdminCheck  5 = Paused  6 = Cancelled  7 = Invalid  -1 = NotAvaliable
     *
     * @return self
     */
    public function setStateChangeTo($state_change_to)
    {
        if (is_null($state_change_to)) {
            array_push($this->openAPINullablesSetToNull, 'state_change_to');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('state_change_to', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['state_change_to'] = $state_change_to;

        return $this;
    }

    /**
     * Gets refueled_liter
     *
     * @return float
     */
    public function getRefueledLiter()
    {
        return $this->container['refueled_liter'];
    }

    /**
     * Sets refueled_liter
     *
     * @param float $refueled_liter refueled_liter
     *
     * @return self
     */
    public function setRefueledLiter($refueled_liter)
    {
        if (is_null($refueled_liter)) {
            array_push($this->openAPINullablesSetToNull, 'refueled_liter');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('refueled_liter', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['refueled_liter'] = $refueled_liter;

        return $this;
    }

    /**
     * Gets refueled_sum
     *
     * @return float
     */
    public function getRefueledSum()
    {
        return $this->container['refueled_sum'];
    }

    /**
     * Sets refueled_sum
     *
     * @param float $refueled_sum refueled_sum
     *
     * @return self
     */
    public function setRefueledSum($refueled_sum)
    {
        if (is_null($refueled_sum)) {
            array_push($this->openAPINullablesSetToNull, 'refueled_sum');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('refueled_sum', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['refueled_sum'] = $refueled_sum;

        return $this;
    }

    /**
     * Gets used_gas_station
     *
     * @return \OpenAPI\Client\Model\FPHSpedVAPIObjectsMapsGasStation
     */
    public function getUsedGasStation()
    {
        return $this->container['used_gas_station'];
    }

    /**
     * Sets used_gas_station
     *
     * @param \OpenAPI\Client\Model\FPHSpedVAPIObjectsMapsGasStation $used_gas_station used_gas_station
     *
     * @return self
     */
    public function setUsedGasStation($used_gas_station)
    {
        if (is_null($used_gas_station)) {
            array_push($this->openAPINullablesSetToNull, 'used_gas_station');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('used_gas_station', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['used_gas_station'] = $used_gas_station;

        return $this;
    }

    /**
     * Gets used_ferry
     *
     * @return \OpenAPI\Client\Model\FPHSpedVAPIObjectsMapsFerry
     */
    public function getUsedFerry()
    {
        return $this->container['used_ferry'];
    }

    /**
     * Sets used_ferry
     *
     * @param \OpenAPI\Client\Model\FPHSpedVAPIObjectsMapsFerry $used_ferry used_ferry
     *
     * @return self
     */
    public function setUsedFerry($used_ferry)
    {
        if (is_null($used_ferry)) {
            array_push($this->openAPINullablesSetToNull, 'used_ferry');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('used_ferry', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['used_ferry'] = $used_ferry;

        return $this;
    }

    /**
     * Gets coordinates
     *
     * @return \OpenAPI\Client\Model\FPHSpedVAPIObjectsTelemetryETSVektor
     */
    public function getCoordinates()
    {
        return $this->container['coordinates'];
    }

    /**
     * Sets coordinates
     *
     * @param \OpenAPI\Client\Model\FPHSpedVAPIObjectsTelemetryETSVektor $coordinates coordinates
     *
     * @return self
     */
    public function setCoordinates($coordinates)
    {
        if (is_null($coordinates)) {
            array_push($this->openAPINullablesSetToNull, 'coordinates');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('coordinates', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['coordinates'] = $coordinates;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string $comment comment
     *
     * @return self
     */
    public function setComment($comment)
    {
        if (is_null($comment)) {
            array_push($this->openAPINullablesSetToNull, 'comment');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('comment', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['comment'] = $comment;

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

