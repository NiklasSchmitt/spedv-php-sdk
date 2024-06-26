<?php
/**
 * FPHSpedVAPIObjectsSpeditionsTruckMaintenance
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
 * FPHSpedVAPIObjectsSpeditionsTruckMaintenance Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class FPHSpedVAPIObjectsSpeditionsTruckMaintenance implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FPH.SpedV.API.Objects.Speditions.TruckMaintenance';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'truck' => '\OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsTruck',
        'owned_branch' => '\OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsOwnedBranch',
        'initiated_by_user' => '\OpenAPI\Client\Model\FPHSpedVAPIObjectsUsersUser',
        'maintenance_kind' => '\OpenAPI\Client\Model\FPHSpedVAPIEnumsMaintenanceKind',
        'spare_part_warning_sent' => 'bool',
        'queue_date' => '\DateTime',
        'start_date' => '\DateTime',
        'end_date' => '\DateTime',
        'state' => '\OpenAPI\Client\Model\FPHSpedVAPIEnumsMaintenanceState'
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
        'truck' => null,
        'owned_branch' => null,
        'initiated_by_user' => null,
        'maintenance_kind' => null,
        'spare_part_warning_sent' => null,
        'queue_date' => 'date-time',
        'start_date' => 'date-time',
        'end_date' => 'date-time',
        'state' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'truck' => true,
        'owned_branch' => true,
        'initiated_by_user' => true,
        'maintenance_kind' => false,
        'spare_part_warning_sent' => false,
        'queue_date' => false,
        'start_date' => true,
        'end_date' => true,
        'state' => false
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
        'truck' => 'truck',
        'owned_branch' => 'ownedBranch',
        'initiated_by_user' => 'initiatedByUser',
        'maintenance_kind' => 'maintenanceKind',
        'spare_part_warning_sent' => 'sparePartWarningSent',
        'queue_date' => 'queueDate',
        'start_date' => 'startDate',
        'end_date' => 'endDate',
        'state' => 'state'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'truck' => 'setTruck',
        'owned_branch' => 'setOwnedBranch',
        'initiated_by_user' => 'setInitiatedByUser',
        'maintenance_kind' => 'setMaintenanceKind',
        'spare_part_warning_sent' => 'setSparePartWarningSent',
        'queue_date' => 'setQueueDate',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'state' => 'setState'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'truck' => 'getTruck',
        'owned_branch' => 'getOwnedBranch',
        'initiated_by_user' => 'getInitiatedByUser',
        'maintenance_kind' => 'getMaintenanceKind',
        'spare_part_warning_sent' => 'getSparePartWarningSent',
        'queue_date' => 'getQueueDate',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'state' => 'getState'
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
        $this->setIfExists('truck', $data ?? [], null);
        $this->setIfExists('owned_branch', $data ?? [], null);
        $this->setIfExists('initiated_by_user', $data ?? [], null);
        $this->setIfExists('maintenance_kind', $data ?? [], null);
        $this->setIfExists('spare_part_warning_sent', $data ?? [], null);
        $this->setIfExists('queue_date', $data ?? [], null);
        $this->setIfExists('start_date', $data ?? [], null);
        $this->setIfExists('end_date', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
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
        if ($this->container['truck'] === null) {
            $invalidProperties[] = "'truck' can't be null";
        }
        if ($this->container['owned_branch'] === null) {
            $invalidProperties[] = "'owned_branch' can't be null";
        }
        if ($this->container['initiated_by_user'] === null) {
            $invalidProperties[] = "'initiated_by_user' can't be null";
        }
        if ($this->container['maintenance_kind'] === null) {
            $invalidProperties[] = "'maintenance_kind' can't be null";
        }
        if ($this->container['spare_part_warning_sent'] === null) {
            $invalidProperties[] = "'spare_part_warning_sent' can't be null";
        }
        if ($this->container['queue_date'] === null) {
            $invalidProperties[] = "'queue_date' can't be null";
        }
        if ($this->container['start_date'] === null) {
            $invalidProperties[] = "'start_date' can't be null";
        }
        if ($this->container['end_date'] === null) {
            $invalidProperties[] = "'end_date' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
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
     * Gets truck
     *
     * @return \OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsTruck
     */
    public function getTruck()
    {
        return $this->container['truck'];
    }

    /**
     * Sets truck
     *
     * @param \OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsTruck $truck truck
     *
     * @return self
     */
    public function setTruck($truck)
    {
        if (is_null($truck)) {
            array_push($this->openAPINullablesSetToNull, 'truck');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('truck', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['truck'] = $truck;

        return $this;
    }

    /**
     * Gets owned_branch
     *
     * @return \OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsOwnedBranch
     */
    public function getOwnedBranch()
    {
        return $this->container['owned_branch'];
    }

    /**
     * Sets owned_branch
     *
     * @param \OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsOwnedBranch $owned_branch owned_branch
     *
     * @return self
     */
    public function setOwnedBranch($owned_branch)
    {
        if (is_null($owned_branch)) {
            array_push($this->openAPINullablesSetToNull, 'owned_branch');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('owned_branch', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['owned_branch'] = $owned_branch;

        return $this;
    }

    /**
     * Gets initiated_by_user
     *
     * @return \OpenAPI\Client\Model\FPHSpedVAPIObjectsUsersUser
     */
    public function getInitiatedByUser()
    {
        return $this->container['initiated_by_user'];
    }

    /**
     * Sets initiated_by_user
     *
     * @param \OpenAPI\Client\Model\FPHSpedVAPIObjectsUsersUser $initiated_by_user initiated_by_user
     *
     * @return self
     */
    public function setInitiatedByUser($initiated_by_user)
    {
        if (is_null($initiated_by_user)) {
            array_push($this->openAPINullablesSetToNull, 'initiated_by_user');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('initiated_by_user', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['initiated_by_user'] = $initiated_by_user;

        return $this;
    }

    /**
     * Gets maintenance_kind
     *
     * @return \OpenAPI\Client\Model\FPHSpedVAPIEnumsMaintenanceKind
     */
    public function getMaintenanceKind()
    {
        return $this->container['maintenance_kind'];
    }

    /**
     * Sets maintenance_kind
     *
     * @param \OpenAPI\Client\Model\FPHSpedVAPIEnumsMaintenanceKind $maintenance_kind 0 = Engine  1 = OszilationDamper  2 = Stabilizer  3 = StoneChip  4 = Transmission  5 = Wishbone  6 = BrakePads  7 = BrakeDiscs  8 = EngineMaintenance  9 = TireChange  10 = MainCheck  11 = SafetyCheck  12 = SaddlePlate  13 = AirPressureUnit  14 = Alternator  15 = BrakeVentil  -1 = NotSet
     *
     * @return self
     */
    public function setMaintenanceKind($maintenance_kind)
    {
        if (is_null($maintenance_kind)) {
            throw new \InvalidArgumentException('non-nullable maintenance_kind cannot be null');
        }
        $this->container['maintenance_kind'] = $maintenance_kind;

        return $this;
    }

    /**
     * Gets spare_part_warning_sent
     *
     * @return bool
     */
    public function getSparePartWarningSent()
    {
        return $this->container['spare_part_warning_sent'];
    }

    /**
     * Sets spare_part_warning_sent
     *
     * @param bool $spare_part_warning_sent spare_part_warning_sent
     *
     * @return self
     */
    public function setSparePartWarningSent($spare_part_warning_sent)
    {
        if (is_null($spare_part_warning_sent)) {
            throw new \InvalidArgumentException('non-nullable spare_part_warning_sent cannot be null');
        }
        $this->container['spare_part_warning_sent'] = $spare_part_warning_sent;

        return $this;
    }

    /**
     * Gets queue_date
     *
     * @return \DateTime
     */
    public function getQueueDate()
    {
        return $this->container['queue_date'];
    }

    /**
     * Sets queue_date
     *
     * @param \DateTime $queue_date queue_date
     *
     * @return self
     */
    public function setQueueDate($queue_date)
    {
        if (is_null($queue_date)) {
            throw new \InvalidArgumentException('non-nullable queue_date cannot be null');
        }
        $this->container['queue_date'] = $queue_date;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime $start_date start_date
     *
     * @return self
     */
    public function setStartDate($start_date)
    {
        if (is_null($start_date)) {
            array_push($this->openAPINullablesSetToNull, 'start_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('start_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \DateTime $end_date end_date
     *
     * @return self
     */
    public function setEndDate($end_date)
    {
        if (is_null($end_date)) {
            array_push($this->openAPINullablesSetToNull, 'end_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('end_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets state
     *
     * @return \OpenAPI\Client\Model\FPHSpedVAPIEnumsMaintenanceState
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \OpenAPI\Client\Model\FPHSpedVAPIEnumsMaintenanceState $state 0 = Enqueued  11 = InDrive  12 = NotInOwnedBranch  13 = OtherMaintenanceActive  21 = MissingSpareParts  22 = NotEnoughMaintenancePlaces  91 = Processing  92 = ProcessingButDelayed  93 = Finished  -1 = NotSet
     *
     * @return self
     */
    public function setState($state)
    {
        if (is_null($state)) {
            throw new \InvalidArgumentException('non-nullable state cannot be null');
        }
        $this->container['state'] = $state;

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


