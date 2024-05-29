<?php
/**
 * FPHSpedVAPIObjectsMapsCity
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
 * FPHSpedVAPIObjectsMapsCity Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class FPHSpedVAPIObjectsMapsCity implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FPH.SpedV.API.Objects.Maps.City';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'name' => 'string',
        'visible_name' => 'string',
        'in_game_name_dictionary' => 'array<string,string>',
        'country' => '\OpenAPI\Client\Model\FPHSpedVAPIObjectsMapsCountry',
        'real_world_lati' => 'float',
        'real_world_long' => 'float',
        'in_game_names' => 'string[]'
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
        'name' => null,
        'visible_name' => null,
        'in_game_name_dictionary' => null,
        'country' => null,
        'real_world_lati' => 'double',
        'real_world_long' => 'double',
        'in_game_names' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'name' => true,
        'visible_name' => true,
        'in_game_name_dictionary' => true,
        'country' => true,
        'real_world_lati' => false,
        'real_world_long' => false,
        'in_game_names' => true
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
        'name' => 'name',
        'visible_name' => 'visibleName',
        'in_game_name_dictionary' => 'inGameNameDictionary',
        'country' => 'country',
        'real_world_lati' => 'realWorld_Lati',
        'real_world_long' => 'realWorld_Long',
        'in_game_names' => 'inGameNames'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'visible_name' => 'setVisibleName',
        'in_game_name_dictionary' => 'setInGameNameDictionary',
        'country' => 'setCountry',
        'real_world_lati' => 'setRealWorldLati',
        'real_world_long' => 'setRealWorldLong',
        'in_game_names' => 'setInGameNames'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'visible_name' => 'getVisibleName',
        'in_game_name_dictionary' => 'getInGameNameDictionary',
        'country' => 'getCountry',
        'real_world_lati' => 'getRealWorldLati',
        'real_world_long' => 'getRealWorldLong',
        'in_game_names' => 'getInGameNames'
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('visible_name', $data ?? [], null);
        $this->setIfExists('in_game_name_dictionary', $data ?? [], null);
        $this->setIfExists('country', $data ?? [], null);
        $this->setIfExists('real_world_lati', $data ?? [], null);
        $this->setIfExists('real_world_long', $data ?? [], null);
        $this->setIfExists('in_game_names', $data ?? [], null);
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
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['visible_name'] === null) {
            $invalidProperties[] = "'visible_name' can't be null";
        }
        if ($this->container['in_game_name_dictionary'] === null) {
            $invalidProperties[] = "'in_game_name_dictionary' can't be null";
        }
        if ($this->container['country'] === null) {
            $invalidProperties[] = "'country' can't be null";
        }
        if ($this->container['real_world_lati'] === null) {
            $invalidProperties[] = "'real_world_lati' can't be null";
        }
        if ($this->container['real_world_long'] === null) {
            $invalidProperties[] = "'real_world_long' can't be null";
        }
        if ($this->container['in_game_names'] === null) {
            $invalidProperties[] = "'in_game_names' can't be null";
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            array_push($this->openAPINullablesSetToNull, 'name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets visible_name
     *
     * @return string
     */
    public function getVisibleName()
    {
        return $this->container['visible_name'];
    }

    /**
     * Sets visible_name
     *
     * @param string $visible_name visible_name
     *
     * @return self
     */
    public function setVisibleName($visible_name)
    {
        if (is_null($visible_name)) {
            array_push($this->openAPINullablesSetToNull, 'visible_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('visible_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['visible_name'] = $visible_name;

        return $this;
    }

    /**
     * Gets in_game_name_dictionary
     *
     * @return array<string,string>
     */
    public function getInGameNameDictionary()
    {
        return $this->container['in_game_name_dictionary'];
    }

    /**
     * Sets in_game_name_dictionary
     *
     * @param array<string,string> $in_game_name_dictionary in_game_name_dictionary
     *
     * @return self
     */
    public function setInGameNameDictionary($in_game_name_dictionary)
    {
        if (is_null($in_game_name_dictionary)) {
            array_push($this->openAPINullablesSetToNull, 'in_game_name_dictionary');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('in_game_name_dictionary', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['in_game_name_dictionary'] = $in_game_name_dictionary;

        return $this;
    }

    /**
     * Gets country
     *
     * @return \OpenAPI\Client\Model\FPHSpedVAPIObjectsMapsCountry
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param \OpenAPI\Client\Model\FPHSpedVAPIObjectsMapsCountry $country country
     *
     * @return self
     */
    public function setCountry($country)
    {
        if (is_null($country)) {
            array_push($this->openAPINullablesSetToNull, 'country');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('country', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets real_world_lati
     *
     * @return float
     */
    public function getRealWorldLati()
    {
        return $this->container['real_world_lati'];
    }

    /**
     * Sets real_world_lati
     *
     * @param float $real_world_lati real_world_lati
     *
     * @return self
     */
    public function setRealWorldLati($real_world_lati)
    {
        if (is_null($real_world_lati)) {
            throw new \InvalidArgumentException('non-nullable real_world_lati cannot be null');
        }
        $this->container['real_world_lati'] = $real_world_lati;

        return $this;
    }

    /**
     * Gets real_world_long
     *
     * @return float
     */
    public function getRealWorldLong()
    {
        return $this->container['real_world_long'];
    }

    /**
     * Sets real_world_long
     *
     * @param float $real_world_long real_world_long
     *
     * @return self
     */
    public function setRealWorldLong($real_world_long)
    {
        if (is_null($real_world_long)) {
            throw new \InvalidArgumentException('non-nullable real_world_long cannot be null');
        }
        $this->container['real_world_long'] = $real_world_long;

        return $this;
    }

    /**
     * Gets in_game_names
     *
     * @return string[]
     */
    public function getInGameNames()
    {
        return $this->container['in_game_names'];
    }

    /**
     * Sets in_game_names
     *
     * @param string[] $in_game_names in_game_names
     *
     * @return self
     */
    public function setInGameNames($in_game_names)
    {
        if (is_null($in_game_names)) {
            array_push($this->openAPINullablesSetToNull, 'in_game_names');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('in_game_names', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['in_game_names'] = $in_game_names;

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


