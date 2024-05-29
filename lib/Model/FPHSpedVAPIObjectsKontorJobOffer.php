<?php
/**
 * FPHSpedVAPIObjectsKontorJobOffer
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
 * FPHSpedVAPIObjectsKontorJobOffer Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class FPHSpedVAPIObjectsKontorJobOffer implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FPH.SpedV.API.Objects.Kontor.JobOffer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'source' => '\OpenAPI\Client\Model\FPHSpedVAPIObjectsMapsCompanyCity',
        'destination' => '\OpenAPI\Client\Model\FPHSpedVAPIObjectsMapsCompanyCity',
        'weight' => 'int',
        'freight' => '\OpenAPI\Client\Model\FPHSpedVAPIObjectsKontorJobOfferFreight',
        'paying_spedition' => '\OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsSpedition',
        'spare_parts_for_branch_id' => 'int',
        'value' => 'int',
        'expiration_date' => '\DateTime',
        'distance' => 'int',
        'vis_distance' => 'string',
        'vis_weight' => 'string',
        'vis_value' => 'string',
        'is_real_eco' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'source' => null,
        'destination' => null,
        'weight' => 'int32',
        'freight' => null,
        'paying_spedition' => null,
        'spare_parts_for_branch_id' => 'int32',
        'value' => 'int32',
        'expiration_date' => 'date-time',
        'distance' => 'int32',
        'vis_distance' => null,
        'vis_weight' => null,
        'vis_value' => null,
        'is_real_eco' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => true,
        'source' => true,
        'destination' => true,
        'weight' => false,
        'freight' => true,
        'paying_spedition' => true,
        'spare_parts_for_branch_id' => false,
        'value' => false,
        'expiration_date' => false,
        'distance' => false,
        'vis_distance' => true,
        'vis_weight' => true,
        'vis_value' => true,
        'is_real_eco' => false
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
        'source' => 'source',
        'destination' => 'destination',
        'weight' => 'weight',
        'freight' => 'freight',
        'paying_spedition' => 'payingSpedition',
        'spare_parts_for_branch_id' => 'sparePartsForBranchID',
        'value' => 'value',
        'expiration_date' => 'expirationDate',
        'distance' => 'distance',
        'vis_distance' => 'visDistance',
        'vis_weight' => 'visWeight',
        'vis_value' => 'visValue',
        'is_real_eco' => 'isRealEco'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'source' => 'setSource',
        'destination' => 'setDestination',
        'weight' => 'setWeight',
        'freight' => 'setFreight',
        'paying_spedition' => 'setPayingSpedition',
        'spare_parts_for_branch_id' => 'setSparePartsForBranchId',
        'value' => 'setValue',
        'expiration_date' => 'setExpirationDate',
        'distance' => 'setDistance',
        'vis_distance' => 'setVisDistance',
        'vis_weight' => 'setVisWeight',
        'vis_value' => 'setVisValue',
        'is_real_eco' => 'setIsRealEco'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'source' => 'getSource',
        'destination' => 'getDestination',
        'weight' => 'getWeight',
        'freight' => 'getFreight',
        'paying_spedition' => 'getPayingSpedition',
        'spare_parts_for_branch_id' => 'getSparePartsForBranchId',
        'value' => 'getValue',
        'expiration_date' => 'getExpirationDate',
        'distance' => 'getDistance',
        'vis_distance' => 'getVisDistance',
        'vis_weight' => 'getVisWeight',
        'vis_value' => 'getVisValue',
        'is_real_eco' => 'getIsRealEco'
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
        $this->setIfExists('source', $data ?? [], null);
        $this->setIfExists('destination', $data ?? [], null);
        $this->setIfExists('weight', $data ?? [], null);
        $this->setIfExists('freight', $data ?? [], null);
        $this->setIfExists('paying_spedition', $data ?? [], null);
        $this->setIfExists('spare_parts_for_branch_id', $data ?? [], null);
        $this->setIfExists('value', $data ?? [], null);
        $this->setIfExists('expiration_date', $data ?? [], null);
        $this->setIfExists('distance', $data ?? [], null);
        $this->setIfExists('vis_distance', $data ?? [], null);
        $this->setIfExists('vis_weight', $data ?? [], null);
        $this->setIfExists('vis_value', $data ?? [], null);
        $this->setIfExists('is_real_eco', $data ?? [], null);
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
        if ($this->container['source'] === null) {
            $invalidProperties[] = "'source' can't be null";
        }
        if ($this->container['destination'] === null) {
            $invalidProperties[] = "'destination' can't be null";
        }
        if ($this->container['weight'] === null) {
            $invalidProperties[] = "'weight' can't be null";
        }
        if ($this->container['freight'] === null) {
            $invalidProperties[] = "'freight' can't be null";
        }
        if ($this->container['paying_spedition'] === null) {
            $invalidProperties[] = "'paying_spedition' can't be null";
        }
        if ($this->container['spare_parts_for_branch_id'] === null) {
            $invalidProperties[] = "'spare_parts_for_branch_id' can't be null";
        }
        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
        }
        if ($this->container['expiration_date'] === null) {
            $invalidProperties[] = "'expiration_date' can't be null";
        }
        if ($this->container['distance'] === null) {
            $invalidProperties[] = "'distance' can't be null";
        }
        if ($this->container['vis_distance'] === null) {
            $invalidProperties[] = "'vis_distance' can't be null";
        }
        if ($this->container['vis_weight'] === null) {
            $invalidProperties[] = "'vis_weight' can't be null";
        }
        if ($this->container['vis_value'] === null) {
            $invalidProperties[] = "'vis_value' can't be null";
        }
        if ($this->container['is_real_eco'] === null) {
            $invalidProperties[] = "'is_real_eco' can't be null";
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
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            array_push($this->openAPINullablesSetToNull, 'id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets source
     *
     * @return \OpenAPI\Client\Model\FPHSpedVAPIObjectsMapsCompanyCity
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param \OpenAPI\Client\Model\FPHSpedVAPIObjectsMapsCompanyCity $source source
     *
     * @return self
     */
    public function setSource($source)
    {
        if (is_null($source)) {
            array_push($this->openAPINullablesSetToNull, 'source');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('source', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets destination
     *
     * @return \OpenAPI\Client\Model\FPHSpedVAPIObjectsMapsCompanyCity
     */
    public function getDestination()
    {
        return $this->container['destination'];
    }

    /**
     * Sets destination
     *
     * @param \OpenAPI\Client\Model\FPHSpedVAPIObjectsMapsCompanyCity $destination destination
     *
     * @return self
     */
    public function setDestination($destination)
    {
        if (is_null($destination)) {
            array_push($this->openAPINullablesSetToNull, 'destination');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('destination', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['destination'] = $destination;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return int
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param int $weight weight
     *
     * @return self
     */
    public function setWeight($weight)
    {
        if (is_null($weight)) {
            throw new \InvalidArgumentException('non-nullable weight cannot be null');
        }
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets freight
     *
     * @return \OpenAPI\Client\Model\FPHSpedVAPIObjectsKontorJobOfferFreight
     */
    public function getFreight()
    {
        return $this->container['freight'];
    }

    /**
     * Sets freight
     *
     * @param \OpenAPI\Client\Model\FPHSpedVAPIObjectsKontorJobOfferFreight $freight freight
     *
     * @return self
     */
    public function setFreight($freight)
    {
        if (is_null($freight)) {
            array_push($this->openAPINullablesSetToNull, 'freight');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('freight', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['freight'] = $freight;

        return $this;
    }

    /**
     * Gets paying_spedition
     *
     * @return \OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsSpedition
     */
    public function getPayingSpedition()
    {
        return $this->container['paying_spedition'];
    }

    /**
     * Sets paying_spedition
     *
     * @param \OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsSpedition $paying_spedition paying_spedition
     *
     * @return self
     */
    public function setPayingSpedition($paying_spedition)
    {
        if (is_null($paying_spedition)) {
            array_push($this->openAPINullablesSetToNull, 'paying_spedition');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('paying_spedition', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['paying_spedition'] = $paying_spedition;

        return $this;
    }

    /**
     * Gets spare_parts_for_branch_id
     *
     * @return int
     */
    public function getSparePartsForBranchId()
    {
        return $this->container['spare_parts_for_branch_id'];
    }

    /**
     * Sets spare_parts_for_branch_id
     *
     * @param int $spare_parts_for_branch_id spare_parts_for_branch_id
     *
     * @return self
     */
    public function setSparePartsForBranchId($spare_parts_for_branch_id)
    {
        if (is_null($spare_parts_for_branch_id)) {
            throw new \InvalidArgumentException('non-nullable spare_parts_for_branch_id cannot be null');
        }
        $this->container['spare_parts_for_branch_id'] = $spare_parts_for_branch_id;

        return $this;
    }

    /**
     * Gets value
     *
     * @return int
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param int $value value
     *
     * @return self
     */
    public function setValue($value)
    {
        if (is_null($value)) {
            throw new \InvalidArgumentException('non-nullable value cannot be null');
        }
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets expiration_date
     *
     * @return \DateTime
     */
    public function getExpirationDate()
    {
        return $this->container['expiration_date'];
    }

    /**
     * Sets expiration_date
     *
     * @param \DateTime $expiration_date expiration_date
     *
     * @return self
     */
    public function setExpirationDate($expiration_date)
    {
        if (is_null($expiration_date)) {
            throw new \InvalidArgumentException('non-nullable expiration_date cannot be null');
        }
        $this->container['expiration_date'] = $expiration_date;

        return $this;
    }

    /**
     * Gets distance
     *
     * @return int
     */
    public function getDistance()
    {
        return $this->container['distance'];
    }

    /**
     * Sets distance
     *
     * @param int $distance distance
     *
     * @return self
     */
    public function setDistance($distance)
    {
        if (is_null($distance)) {
            throw new \InvalidArgumentException('non-nullable distance cannot be null');
        }
        $this->container['distance'] = $distance;

        return $this;
    }

    /**
     * Gets vis_distance
     *
     * @return string
     */
    public function getVisDistance()
    {
        return $this->container['vis_distance'];
    }

    /**
     * Sets vis_distance
     *
     * @param string $vis_distance vis_distance
     *
     * @return self
     */
    public function setVisDistance($vis_distance)
    {
        if (is_null($vis_distance)) {
            array_push($this->openAPINullablesSetToNull, 'vis_distance');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('vis_distance', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['vis_distance'] = $vis_distance;

        return $this;
    }

    /**
     * Gets vis_weight
     *
     * @return string
     */
    public function getVisWeight()
    {
        return $this->container['vis_weight'];
    }

    /**
     * Sets vis_weight
     *
     * @param string $vis_weight vis_weight
     *
     * @return self
     */
    public function setVisWeight($vis_weight)
    {
        if (is_null($vis_weight)) {
            array_push($this->openAPINullablesSetToNull, 'vis_weight');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('vis_weight', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['vis_weight'] = $vis_weight;

        return $this;
    }

    /**
     * Gets vis_value
     *
     * @return string
     */
    public function getVisValue()
    {
        return $this->container['vis_value'];
    }

    /**
     * Sets vis_value
     *
     * @param string $vis_value vis_value
     *
     * @return self
     */
    public function setVisValue($vis_value)
    {
        if (is_null($vis_value)) {
            array_push($this->openAPINullablesSetToNull, 'vis_value');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('vis_value', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['vis_value'] = $vis_value;

        return $this;
    }

    /**
     * Gets is_real_eco
     *
     * @return bool
     */
    public function getIsRealEco()
    {
        return $this->container['is_real_eco'];
    }

    /**
     * Sets is_real_eco
     *
     * @param bool $is_real_eco is_real_eco
     *
     * @return self
     */
    public function setIsRealEco($is_real_eco)
    {
        if (is_null($is_real_eco)) {
            throw new \InvalidArgumentException('non-nullable is_real_eco cannot be null');
        }
        $this->container['is_real_eco'] = $is_real_eco;

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


