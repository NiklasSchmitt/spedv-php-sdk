<?php
/**
 * FPHSpedVAPIObjectsMapsCompanyCity
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
 * FPHSpedVAPIObjectsMapsCompanyCity Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class FPHSpedVAPIObjectsMapsCompanyCity implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FPH.SpedV.API.Objects.Maps.CompanyCity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'company' => '\OpenAPI\Client\Model\FPHSpedVAPIObjectsMapsCompany',
        'city' => '\OpenAPI\Client\Model\FPHSpedVAPIObjectsMapsCity',
        'map' => '\OpenAPI\Client\Model\FPHSpedVAPIObjectsMapsMap',
        'supports_double' => 'bool',
        'supports_triple' => 'bool',
        'is_deleted' => 'bool',
        'x_coord' => 'float',
        'z_coord' => 'float',
        'disabled_on_maps' => '\OpenAPI\Client\Model\FPHSpedVAPIObjectsMapsMap[]'
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
        'company' => null,
        'city' => null,
        'map' => null,
        'supports_double' => null,
        'supports_triple' => null,
        'is_deleted' => null,
        'x_coord' => 'double',
        'z_coord' => 'double',
        'disabled_on_maps' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'company' => true,
        'city' => true,
        'map' => true,
        'supports_double' => false,
        'supports_triple' => false,
        'is_deleted' => false,
        'x_coord' => true,
        'z_coord' => true,
        'disabled_on_maps' => true
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
        'company' => 'company',
        'city' => 'city',
        'map' => 'map',
        'supports_double' => 'supportsDouble',
        'supports_triple' => 'supportsTriple',
        'is_deleted' => 'isDeleted',
        'x_coord' => 'x_Coord',
        'z_coord' => 'z_Coord',
        'disabled_on_maps' => 'disabledOnMaps'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'company' => 'setCompany',
        'city' => 'setCity',
        'map' => 'setMap',
        'supports_double' => 'setSupportsDouble',
        'supports_triple' => 'setSupportsTriple',
        'is_deleted' => 'setIsDeleted',
        'x_coord' => 'setXCoord',
        'z_coord' => 'setZCoord',
        'disabled_on_maps' => 'setDisabledOnMaps'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'company' => 'getCompany',
        'city' => 'getCity',
        'map' => 'getMap',
        'supports_double' => 'getSupportsDouble',
        'supports_triple' => 'getSupportsTriple',
        'is_deleted' => 'getIsDeleted',
        'x_coord' => 'getXCoord',
        'z_coord' => 'getZCoord',
        'disabled_on_maps' => 'getDisabledOnMaps'
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
        $this->setIfExists('company', $data ?? [], null);
        $this->setIfExists('city', $data ?? [], null);
        $this->setIfExists('map', $data ?? [], null);
        $this->setIfExists('supports_double', $data ?? [], null);
        $this->setIfExists('supports_triple', $data ?? [], null);
        $this->setIfExists('is_deleted', $data ?? [], null);
        $this->setIfExists('x_coord', $data ?? [], null);
        $this->setIfExists('z_coord', $data ?? [], null);
        $this->setIfExists('disabled_on_maps', $data ?? [], null);
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
        if ($this->container['company'] === null) {
            $invalidProperties[] = "'company' can't be null";
        }
        if ($this->container['city'] === null) {
            $invalidProperties[] = "'city' can't be null";
        }
        if ($this->container['map'] === null) {
            $invalidProperties[] = "'map' can't be null";
        }
        if ($this->container['supports_double'] === null) {
            $invalidProperties[] = "'supports_double' can't be null";
        }
        if ($this->container['supports_triple'] === null) {
            $invalidProperties[] = "'supports_triple' can't be null";
        }
        if ($this->container['is_deleted'] === null) {
            $invalidProperties[] = "'is_deleted' can't be null";
        }
        if ($this->container['x_coord'] === null) {
            $invalidProperties[] = "'x_coord' can't be null";
        }
        if ($this->container['z_coord'] === null) {
            $invalidProperties[] = "'z_coord' can't be null";
        }
        if ($this->container['disabled_on_maps'] === null) {
            $invalidProperties[] = "'disabled_on_maps' can't be null";
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
     * Gets company
     *
     * @return \OpenAPI\Client\Model\FPHSpedVAPIObjectsMapsCompany
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     *
     * @param \OpenAPI\Client\Model\FPHSpedVAPIObjectsMapsCompany $company company
     *
     * @return self
     */
    public function setCompany($company)
    {
        if (is_null($company)) {
            array_push($this->openAPINullablesSetToNull, 'company');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('company', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets city
     *
     * @return \OpenAPI\Client\Model\FPHSpedVAPIObjectsMapsCity
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param \OpenAPI\Client\Model\FPHSpedVAPIObjectsMapsCity $city city
     *
     * @return self
     */
    public function setCity($city)
    {
        if (is_null($city)) {
            array_push($this->openAPINullablesSetToNull, 'city');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('city', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets map
     *
     * @return \OpenAPI\Client\Model\FPHSpedVAPIObjectsMapsMap
     */
    public function getMap()
    {
        return $this->container['map'];
    }

    /**
     * Sets map
     *
     * @param \OpenAPI\Client\Model\FPHSpedVAPIObjectsMapsMap $map map
     *
     * @return self
     */
    public function setMap($map)
    {
        if (is_null($map)) {
            array_push($this->openAPINullablesSetToNull, 'map');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('map', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['map'] = $map;

        return $this;
    }

    /**
     * Gets supports_double
     *
     * @return bool
     */
    public function getSupportsDouble()
    {
        return $this->container['supports_double'];
    }

    /**
     * Sets supports_double
     *
     * @param bool $supports_double supports_double
     *
     * @return self
     */
    public function setSupportsDouble($supports_double)
    {
        if (is_null($supports_double)) {
            throw new \InvalidArgumentException('non-nullable supports_double cannot be null');
        }
        $this->container['supports_double'] = $supports_double;

        return $this;
    }

    /**
     * Gets supports_triple
     *
     * @return bool
     */
    public function getSupportsTriple()
    {
        return $this->container['supports_triple'];
    }

    /**
     * Sets supports_triple
     *
     * @param bool $supports_triple supports_triple
     *
     * @return self
     */
    public function setSupportsTriple($supports_triple)
    {
        if (is_null($supports_triple)) {
            throw new \InvalidArgumentException('non-nullable supports_triple cannot be null');
        }
        $this->container['supports_triple'] = $supports_triple;

        return $this;
    }

    /**
     * Gets is_deleted
     *
     * @return bool
     */
    public function getIsDeleted()
    {
        return $this->container['is_deleted'];
    }

    /**
     * Sets is_deleted
     *
     * @param bool $is_deleted is_deleted
     *
     * @return self
     */
    public function setIsDeleted($is_deleted)
    {
        if (is_null($is_deleted)) {
            throw new \InvalidArgumentException('non-nullable is_deleted cannot be null');
        }
        $this->container['is_deleted'] = $is_deleted;

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
            array_push($this->openAPINullablesSetToNull, 'x_coord');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('x_coord', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
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
            array_push($this->openAPINullablesSetToNull, 'z_coord');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('z_coord', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['z_coord'] = $z_coord;

        return $this;
    }

    /**
     * Gets disabled_on_maps
     *
     * @return \OpenAPI\Client\Model\FPHSpedVAPIObjectsMapsMap[]
     */
    public function getDisabledOnMaps()
    {
        return $this->container['disabled_on_maps'];
    }

    /**
     * Sets disabled_on_maps
     *
     * @param \OpenAPI\Client\Model\FPHSpedVAPIObjectsMapsMap[] $disabled_on_maps disabled_on_maps
     *
     * @return self
     */
    public function setDisabledOnMaps($disabled_on_maps)
    {
        if (is_null($disabled_on_maps)) {
            array_push($this->openAPINullablesSetToNull, 'disabled_on_maps');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('disabled_on_maps', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['disabled_on_maps'] = $disabled_on_maps;

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


