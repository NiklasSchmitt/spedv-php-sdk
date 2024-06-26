<?php
/**
 * FPHSpedVAPIObjectsSpeditionsSpedTarget
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
 * FPHSpedVAPIObjectsSpeditionsSpedTarget Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class FPHSpedVAPIObjectsSpeditionsSpedTarget implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FPH.SpedV.API.Objects.Speditions.SpedTarget';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'comment' => 'string',
        'moneyamount' => 'int',
        'amount' => 'float',
        'start_date' => '\DateTime',
        'done_date' => '\DateTime',
        'bonus' => 'int',
        'bonus_sum' => 'float',
        'users' => '\OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsSpedTargetUser[]',
        'ignored_users' => '\OpenAPI\Client\Model\FPHSpedVAPIObjectsUsersUser[]',
        'type' => '\OpenAPI\Client\Model\FPHSpedVAPIEnumsSpedTargetType',
        'kontor_handling' => '\OpenAPI\Client\Model\FPHSpedVAPIEnumsSpedTargetKontorHandling',
        'omsi_handling' => '\OpenAPI\Client\Model\FPHSpedVAPIEnumsSpedTargetOMSIHandling',
        'alrreached' => 'int',
        'amount_reached_sum' => 'float',
        'reached' => 'bool',
        'is_reached' => 'bool',
        'is_active' => 'bool'
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
        'comment' => null,
        'moneyamount' => 'int32',
        'amount' => 'double',
        'start_date' => 'date-time',
        'done_date' => 'date-time',
        'bonus' => 'int32',
        'bonus_sum' => 'double',
        'users' => null,
        'ignored_users' => null,
        'type' => null,
        'kontor_handling' => null,
        'omsi_handling' => null,
        'alrreached' => 'int32',
        'amount_reached_sum' => 'double',
        'reached' => null,
        'is_reached' => null,
        'is_active' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'comment' => true,
        'moneyamount' => false,
        'amount' => false,
        'start_date' => false,
        'done_date' => false,
        'bonus' => false,
        'bonus_sum' => false,
        'users' => true,
        'ignored_users' => true,
        'type' => false,
        'kontor_handling' => false,
        'omsi_handling' => false,
        'alrreached' => false,
        'amount_reached_sum' => false,
        'reached' => false,
        'is_reached' => false,
        'is_active' => false
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
        'comment' => 'comment',
        'moneyamount' => 'moneyamount',
        'amount' => 'amount',
        'start_date' => 'startDate',
        'done_date' => 'doneDate',
        'bonus' => 'bonus',
        'bonus_sum' => 'bonusSum',
        'users' => 'users',
        'ignored_users' => 'ignoredUsers',
        'type' => 'type',
        'kontor_handling' => 'kontorHandling',
        'omsi_handling' => 'omsiHandling',
        'alrreached' => 'alrreached',
        'amount_reached_sum' => 'amountReachedSum',
        'reached' => 'reached',
        'is_reached' => 'isReached',
        'is_active' => 'isActive'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'comment' => 'setComment',
        'moneyamount' => 'setMoneyamount',
        'amount' => 'setAmount',
        'start_date' => 'setStartDate',
        'done_date' => 'setDoneDate',
        'bonus' => 'setBonus',
        'bonus_sum' => 'setBonusSum',
        'users' => 'setUsers',
        'ignored_users' => 'setIgnoredUsers',
        'type' => 'setType',
        'kontor_handling' => 'setKontorHandling',
        'omsi_handling' => 'setOmsiHandling',
        'alrreached' => 'setAlrreached',
        'amount_reached_sum' => 'setAmountReachedSum',
        'reached' => 'setReached',
        'is_reached' => 'setIsReached',
        'is_active' => 'setIsActive'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'comment' => 'getComment',
        'moneyamount' => 'getMoneyamount',
        'amount' => 'getAmount',
        'start_date' => 'getStartDate',
        'done_date' => 'getDoneDate',
        'bonus' => 'getBonus',
        'bonus_sum' => 'getBonusSum',
        'users' => 'getUsers',
        'ignored_users' => 'getIgnoredUsers',
        'type' => 'getType',
        'kontor_handling' => 'getKontorHandling',
        'omsi_handling' => 'getOmsiHandling',
        'alrreached' => 'getAlrreached',
        'amount_reached_sum' => 'getAmountReachedSum',
        'reached' => 'getReached',
        'is_reached' => 'getIsReached',
        'is_active' => 'getIsActive'
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
        $this->setIfExists('comment', $data ?? [], null);
        $this->setIfExists('moneyamount', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('start_date', $data ?? [], null);
        $this->setIfExists('done_date', $data ?? [], null);
        $this->setIfExists('bonus', $data ?? [], null);
        $this->setIfExists('bonus_sum', $data ?? [], null);
        $this->setIfExists('users', $data ?? [], null);
        $this->setIfExists('ignored_users', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('kontor_handling', $data ?? [], null);
        $this->setIfExists('omsi_handling', $data ?? [], null);
        $this->setIfExists('alrreached', $data ?? [], null);
        $this->setIfExists('amount_reached_sum', $data ?? [], null);
        $this->setIfExists('reached', $data ?? [], null);
        $this->setIfExists('is_reached', $data ?? [], null);
        $this->setIfExists('is_active', $data ?? [], null);
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
        if ($this->container['comment'] === null) {
            $invalidProperties[] = "'comment' can't be null";
        }
        if ($this->container['moneyamount'] === null) {
            $invalidProperties[] = "'moneyamount' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['start_date'] === null) {
            $invalidProperties[] = "'start_date' can't be null";
        }
        if ($this->container['done_date'] === null) {
            $invalidProperties[] = "'done_date' can't be null";
        }
        if ($this->container['bonus'] === null) {
            $invalidProperties[] = "'bonus' can't be null";
        }
        if ($this->container['bonus_sum'] === null) {
            $invalidProperties[] = "'bonus_sum' can't be null";
        }
        if ($this->container['users'] === null) {
            $invalidProperties[] = "'users' can't be null";
        }
        if ($this->container['ignored_users'] === null) {
            $invalidProperties[] = "'ignored_users' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['kontor_handling'] === null) {
            $invalidProperties[] = "'kontor_handling' can't be null";
        }
        if ($this->container['omsi_handling'] === null) {
            $invalidProperties[] = "'omsi_handling' can't be null";
        }
        if ($this->container['alrreached'] === null) {
            $invalidProperties[] = "'alrreached' can't be null";
        }
        if ($this->container['amount_reached_sum'] === null) {
            $invalidProperties[] = "'amount_reached_sum' can't be null";
        }
        if ($this->container['reached'] === null) {
            $invalidProperties[] = "'reached' can't be null";
        }
        if ($this->container['is_reached'] === null) {
            $invalidProperties[] = "'is_reached' can't be null";
        }
        if ($this->container['is_active'] === null) {
            $invalidProperties[] = "'is_active' can't be null";
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
     * Gets moneyamount
     *
     * @return int
     * @deprecated
     */
    public function getMoneyamount()
    {
        return $this->container['moneyamount'];
    }

    /**
     * Sets moneyamount
     *
     * @param int $moneyamount moneyamount
     *
     * @return self
     * @deprecated
     */
    public function setMoneyamount($moneyamount)
    {
        if (is_null($moneyamount)) {
            throw new \InvalidArgumentException('non-nullable moneyamount cannot be null');
        }
        $this->container['moneyamount'] = $moneyamount;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float $amount amount
     *
     * @return self
     */
    public function setAmount($amount)
    {
        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }
        $this->container['amount'] = $amount;

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
            throw new \InvalidArgumentException('non-nullable start_date cannot be null');
        }
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets done_date
     *
     * @return \DateTime
     */
    public function getDoneDate()
    {
        return $this->container['done_date'];
    }

    /**
     * Sets done_date
     *
     * @param \DateTime $done_date done_date
     *
     * @return self
     */
    public function setDoneDate($done_date)
    {
        if (is_null($done_date)) {
            throw new \InvalidArgumentException('non-nullable done_date cannot be null');
        }
        $this->container['done_date'] = $done_date;

        return $this;
    }

    /**
     * Gets bonus
     *
     * @return int
     * @deprecated
     */
    public function getBonus()
    {
        return $this->container['bonus'];
    }

    /**
     * Sets bonus
     *
     * @param int $bonus bonus
     *
     * @return self
     * @deprecated
     */
    public function setBonus($bonus)
    {
        if (is_null($bonus)) {
            throw new \InvalidArgumentException('non-nullable bonus cannot be null');
        }
        $this->container['bonus'] = $bonus;

        return $this;
    }

    /**
     * Gets bonus_sum
     *
     * @return float
     */
    public function getBonusSum()
    {
        return $this->container['bonus_sum'];
    }

    /**
     * Sets bonus_sum
     *
     * @param float $bonus_sum bonus_sum
     *
     * @return self
     */
    public function setBonusSum($bonus_sum)
    {
        if (is_null($bonus_sum)) {
            throw new \InvalidArgumentException('non-nullable bonus_sum cannot be null');
        }
        $this->container['bonus_sum'] = $bonus_sum;

        return $this;
    }

    /**
     * Gets users
     *
     * @return \OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsSpedTargetUser[]
     */
    public function getUsers()
    {
        return $this->container['users'];
    }

    /**
     * Sets users
     *
     * @param \OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsSpedTargetUser[] $users users
     *
     * @return self
     */
    public function setUsers($users)
    {
        if (is_null($users)) {
            array_push($this->openAPINullablesSetToNull, 'users');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('users', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['users'] = $users;

        return $this;
    }

    /**
     * Gets ignored_users
     *
     * @return \OpenAPI\Client\Model\FPHSpedVAPIObjectsUsersUser[]
     */
    public function getIgnoredUsers()
    {
        return $this->container['ignored_users'];
    }

    /**
     * Sets ignored_users
     *
     * @param \OpenAPI\Client\Model\FPHSpedVAPIObjectsUsersUser[] $ignored_users ignored_users
     *
     * @return self
     */
    public function setIgnoredUsers($ignored_users)
    {
        if (is_null($ignored_users)) {
            array_push($this->openAPINullablesSetToNull, 'ignored_users');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ignored_users', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ignored_users'] = $ignored_users;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \OpenAPI\Client\Model\FPHSpedVAPIEnumsSpedTargetType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \OpenAPI\Client\Model\FPHSpedVAPIEnumsSpedTargetType $type 0 = Value  1 = Distance  2 = WeightDistance
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets kontor_handling
     *
     * @return \OpenAPI\Client\Model\FPHSpedVAPIEnumsSpedTargetKontorHandling
     */
    public function getKontorHandling()
    {
        return $this->container['kontor_handling'];
    }

    /**
     * Sets kontor_handling
     *
     * @param \OpenAPI\Client\Model\FPHSpedVAPIEnumsSpedTargetKontorHandling $kontor_handling 0 = AllTasks  1 = OnlyKontorTasks  2 = NoKontorTasks
     *
     * @return self
     */
    public function setKontorHandling($kontor_handling)
    {
        if (is_null($kontor_handling)) {
            throw new \InvalidArgumentException('non-nullable kontor_handling cannot be null');
        }
        $this->container['kontor_handling'] = $kontor_handling;

        return $this;
    }

    /**
     * Gets omsi_handling
     *
     * @return \OpenAPI\Client\Model\FPHSpedVAPIEnumsSpedTargetOMSIHandling
     */
    public function getOmsiHandling()
    {
        return $this->container['omsi_handling'];
    }

    /**
     * Sets omsi_handling
     *
     * @param \OpenAPI\Client\Model\FPHSpedVAPIEnumsSpedTargetOMSIHandling $omsi_handling 0 = AllTasks  1 = OnlyOMSITasks  2 = NoOMSITasks
     *
     * @return self
     */
    public function setOmsiHandling($omsi_handling)
    {
        if (is_null($omsi_handling)) {
            throw new \InvalidArgumentException('non-nullable omsi_handling cannot be null');
        }
        $this->container['omsi_handling'] = $omsi_handling;

        return $this;
    }

    /**
     * Gets alrreached
     *
     * @return int
     * @deprecated
     */
    public function getAlrreached()
    {
        return $this->container['alrreached'];
    }

    /**
     * Sets alrreached
     *
     * @param int $alrreached alrreached
     *
     * @return self
     * @deprecated
     */
    public function setAlrreached($alrreached)
    {
        if (is_null($alrreached)) {
            throw new \InvalidArgumentException('non-nullable alrreached cannot be null');
        }
        $this->container['alrreached'] = $alrreached;

        return $this;
    }

    /**
     * Gets amount_reached_sum
     *
     * @return float
     */
    public function getAmountReachedSum()
    {
        return $this->container['amount_reached_sum'];
    }

    /**
     * Sets amount_reached_sum
     *
     * @param float $amount_reached_sum amount_reached_sum
     *
     * @return self
     */
    public function setAmountReachedSum($amount_reached_sum)
    {
        if (is_null($amount_reached_sum)) {
            throw new \InvalidArgumentException('non-nullable amount_reached_sum cannot be null');
        }
        $this->container['amount_reached_sum'] = $amount_reached_sum;

        return $this;
    }

    /**
     * Gets reached
     *
     * @return bool
     * @deprecated
     */
    public function getReached()
    {
        return $this->container['reached'];
    }

    /**
     * Sets reached
     *
     * @param bool $reached reached
     *
     * @return self
     * @deprecated
     */
    public function setReached($reached)
    {
        if (is_null($reached)) {
            throw new \InvalidArgumentException('non-nullable reached cannot be null');
        }
        $this->container['reached'] = $reached;

        return $this;
    }

    /**
     * Gets is_reached
     *
     * @return bool
     */
    public function getIsReached()
    {
        return $this->container['is_reached'];
    }

    /**
     * Sets is_reached
     *
     * @param bool $is_reached is_reached
     *
     * @return self
     */
    public function setIsReached($is_reached)
    {
        if (is_null($is_reached)) {
            throw new \InvalidArgumentException('non-nullable is_reached cannot be null');
        }
        $this->container['is_reached'] = $is_reached;

        return $this;
    }

    /**
     * Gets is_active
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     *
     * @param bool $is_active is_active
     *
     * @return self
     */
    public function setIsActive($is_active)
    {
        if (is_null($is_active)) {
            throw new \InvalidArgumentException('non-nullable is_active cannot be null');
        }
        $this->container['is_active'] = $is_active;

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


