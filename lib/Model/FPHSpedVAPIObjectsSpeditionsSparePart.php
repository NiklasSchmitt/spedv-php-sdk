<?php
/**
 * FPHSpedVAPIObjectsSpeditionsSparePart
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
 * FPHSpedVAPIObjectsSpeditionsSparePart Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class FPHSpedVAPIObjectsSpeditionsSparePart implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FPH.SpedV.API.Objects.Speditions.SparePart';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'locale_name' => 'string',
        'needed_for_maintenance_kind' => '\OpenAPI\Client\Model\FPHSpedVAPIEnumsMaintenanceKind',
        'parts_per_ton' => 'int',
        'price_per_part_normal' => 'int',
        'price_per_part_real_eco' => 'int'
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
        'locale_name' => null,
        'needed_for_maintenance_kind' => null,
        'parts_per_ton' => 'int32',
        'price_per_part_normal' => 'int32',
        'price_per_part_real_eco' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'locale_name' => true,
        'needed_for_maintenance_kind' => false,
        'parts_per_ton' => false,
        'price_per_part_normal' => false,
        'price_per_part_real_eco' => false
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
        'locale_name' => 'localeName',
        'needed_for_maintenance_kind' => 'neededForMaintenanceKind',
        'parts_per_ton' => 'partsPerTon',
        'price_per_part_normal' => 'pricePerPartNormal',
        'price_per_part_real_eco' => 'pricePerPartRealEco'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'locale_name' => 'setLocaleName',
        'needed_for_maintenance_kind' => 'setNeededForMaintenanceKind',
        'parts_per_ton' => 'setPartsPerTon',
        'price_per_part_normal' => 'setPricePerPartNormal',
        'price_per_part_real_eco' => 'setPricePerPartRealEco'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'locale_name' => 'getLocaleName',
        'needed_for_maintenance_kind' => 'getNeededForMaintenanceKind',
        'parts_per_ton' => 'getPartsPerTon',
        'price_per_part_normal' => 'getPricePerPartNormal',
        'price_per_part_real_eco' => 'getPricePerPartRealEco'
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
        $this->setIfExists('locale_name', $data ?? [], null);
        $this->setIfExists('needed_for_maintenance_kind', $data ?? [], null);
        $this->setIfExists('parts_per_ton', $data ?? [], null);
        $this->setIfExists('price_per_part_normal', $data ?? [], null);
        $this->setIfExists('price_per_part_real_eco', $data ?? [], null);
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
        if ($this->container['locale_name'] === null) {
            $invalidProperties[] = "'locale_name' can't be null";
        }
        if ($this->container['needed_for_maintenance_kind'] === null) {
            $invalidProperties[] = "'needed_for_maintenance_kind' can't be null";
        }
        if ($this->container['parts_per_ton'] === null) {
            $invalidProperties[] = "'parts_per_ton' can't be null";
        }
        if ($this->container['price_per_part_normal'] === null) {
            $invalidProperties[] = "'price_per_part_normal' can't be null";
        }
        if ($this->container['price_per_part_real_eco'] === null) {
            $invalidProperties[] = "'price_per_part_real_eco' can't be null";
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
     * Gets locale_name
     *
     * @return string
     */
    public function getLocaleName()
    {
        return $this->container['locale_name'];
    }

    /**
     * Sets locale_name
     *
     * @param string $locale_name locale_name
     *
     * @return self
     */
    public function setLocaleName($locale_name)
    {
        if (is_null($locale_name)) {
            array_push($this->openAPINullablesSetToNull, 'locale_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('locale_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['locale_name'] = $locale_name;

        return $this;
    }

    /**
     * Gets needed_for_maintenance_kind
     *
     * @return \OpenAPI\Client\Model\FPHSpedVAPIEnumsMaintenanceKind
     */
    public function getNeededForMaintenanceKind()
    {
        return $this->container['needed_for_maintenance_kind'];
    }

    /**
     * Sets needed_for_maintenance_kind
     *
     * @param \OpenAPI\Client\Model\FPHSpedVAPIEnumsMaintenanceKind $needed_for_maintenance_kind 0 = Engine  1 = OszilationDamper  2 = Stabilizer  3 = StoneChip  4 = Transmission  5 = Wishbone  6 = BrakePads  7 = BrakeDiscs  8 = EngineMaintenance  9 = TireChange  10 = MainCheck  11 = SafetyCheck  12 = SaddlePlate  13 = AirPressureUnit  14 = Alternator  15 = BrakeVentil  -1 = NotSet
     *
     * @return self
     */
    public function setNeededForMaintenanceKind($needed_for_maintenance_kind)
    {
        if (is_null($needed_for_maintenance_kind)) {
            throw new \InvalidArgumentException('non-nullable needed_for_maintenance_kind cannot be null');
        }
        $this->container['needed_for_maintenance_kind'] = $needed_for_maintenance_kind;

        return $this;
    }

    /**
     * Gets parts_per_ton
     *
     * @return int
     */
    public function getPartsPerTon()
    {
        return $this->container['parts_per_ton'];
    }

    /**
     * Sets parts_per_ton
     *
     * @param int $parts_per_ton parts_per_ton
     *
     * @return self
     */
    public function setPartsPerTon($parts_per_ton)
    {
        if (is_null($parts_per_ton)) {
            throw new \InvalidArgumentException('non-nullable parts_per_ton cannot be null');
        }
        $this->container['parts_per_ton'] = $parts_per_ton;

        return $this;
    }

    /**
     * Gets price_per_part_normal
     *
     * @return int
     */
    public function getPricePerPartNormal()
    {
        return $this->container['price_per_part_normal'];
    }

    /**
     * Sets price_per_part_normal
     *
     * @param int $price_per_part_normal price_per_part_normal
     *
     * @return self
     */
    public function setPricePerPartNormal($price_per_part_normal)
    {
        if (is_null($price_per_part_normal)) {
            throw new \InvalidArgumentException('non-nullable price_per_part_normal cannot be null');
        }
        $this->container['price_per_part_normal'] = $price_per_part_normal;

        return $this;
    }

    /**
     * Gets price_per_part_real_eco
     *
     * @return int
     */
    public function getPricePerPartRealEco()
    {
        return $this->container['price_per_part_real_eco'];
    }

    /**
     * Sets price_per_part_real_eco
     *
     * @param int $price_per_part_real_eco price_per_part_real_eco
     *
     * @return self
     */
    public function setPricePerPartRealEco($price_per_part_real_eco)
    {
        if (is_null($price_per_part_real_eco)) {
            throw new \InvalidArgumentException('non-nullable price_per_part_real_eco cannot be null');
        }
        $this->container['price_per_part_real_eco'] = $price_per_part_real_eco;

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


