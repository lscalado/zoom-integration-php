<?php
/**
 * AccountOptions
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Zoom API
 *
 * API Description
 *
 * OpenAPI spec version: 2.0.0
 * Contact: developer@zoom.us
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.8
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * AccountOptions Class Doc Comment
 *
 * @category Class
 * @description Account options object
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccountOptions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AccountOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'share_rc' => 'bool',
        'room_connectors' => 'string',
        'share_mc' => 'bool',
        'meeting_connectors' => 'string',
        'pay_mode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'share_rc' => null,
        'room_connectors' => null,
        'share_mc' => null,
        'meeting_connectors' => null,
        'pay_mode' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'share_rc' => 'share_rc',
        'room_connectors' => 'room_connectors',
        'share_mc' => 'share_mc',
        'meeting_connectors' => 'meeting_connectors',
        'pay_mode' => 'pay_mode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'share_rc' => 'setShareRc',
        'room_connectors' => 'setRoomConnectors',
        'share_mc' => 'setShareMc',
        'meeting_connectors' => 'setMeetingConnectors',
        'pay_mode' => 'setPayMode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'share_rc' => 'getShareRc',
        'room_connectors' => 'getRoomConnectors',
        'share_mc' => 'getShareMc',
        'meeting_connectors' => 'getMeetingConnectors',
        'pay_mode' => 'getPayMode'
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
        return self::$swaggerModelName;
    }

    const PAY_MODE_MASTER = 'master';
    const PAY_MODE_SUB = 'sub';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPayModeAllowableValues()
    {
        return [
            self::PAY_MODE_MASTER,
            self::PAY_MODE_SUB,
        ];
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
        $this->container['share_rc'] = isset($data['share_rc']) ? $data['share_rc'] : false;
        $this->container['room_connectors'] = isset($data['room_connectors']) ? $data['room_connectors'] : null;
        $this->container['share_mc'] = isset($data['share_mc']) ? $data['share_mc'] : false;
        $this->container['meeting_connectors'] = isset($data['meeting_connectors']) ? $data['meeting_connectors'] : null;
        $this->container['pay_mode'] = isset($data['pay_mode']) ? $data['pay_mode'] : 'master';
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getPayModeAllowableValues();
        if (!is_null($this->container['pay_mode']) && !in_array($this->container['pay_mode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'pay_mode', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets share_rc
     *
     * @return bool
     */
    public function getShareRc()
    {
        return $this->container['share_rc'];
    }

    /**
     * Sets share_rc
     *
     * @param bool $share_rc Enable Share Virtual Room Connector
     *
     * @return $this
     */
    public function setShareRc($share_rc)
    {
        $this->container['share_rc'] = $share_rc;

        return $this;
    }

    /**
     * Gets room_connectors
     *
     * @return string
     */
    public function getRoomConnectors()
    {
        return $this->container['room_connectors'];
    }

    /**
     * Sets room_connectors
     *
     * @param string $room_connectors Virtual Room Connector, multiple value separated by comma
     *
     * @return $this
     */
    public function setRoomConnectors($room_connectors)
    {
        $this->container['room_connectors'] = $room_connectors;

        return $this;
    }

    /**
     * Gets share_mc
     *
     * @return bool
     */
    public function getShareMc()
    {
        return $this->container['share_mc'];
    }

    /**
     * Sets share_mc
     *
     * @param bool $share_mc Enable Share Meeting Connector
     *
     * @return $this
     */
    public function setShareMc($share_mc)
    {
        $this->container['share_mc'] = $share_mc;

        return $this;
    }

    /**
     * Gets meeting_connectors
     *
     * @return string
     */
    public function getMeetingConnectors()
    {
        return $this->container['meeting_connectors'];
    }

    /**
     * Sets meeting_connectors
     *
     * @param string $meeting_connectors Meeting Connector, multiple values separated by comma
     *
     * @return $this
     */
    public function setMeetingConnectors($meeting_connectors)
    {
        $this->container['meeting_connectors'] = $meeting_connectors;

        return $this;
    }

    /**
     * Gets pay_mode
     *
     * @return string
     */
    public function getPayMode()
    {
        return $this->container['pay_mode'];
    }

    /**
     * Sets pay_mode
     *
     * @param string $pay_mode Payee
     *
     * @return $this
     */
    public function setPayMode($pay_mode)
    {
        $allowedValues = $this->getPayModeAllowableValues();
        if (!is_null($pay_mode) && !in_array($pay_mode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'pay_mode', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['pay_mode'] = $pay_mode;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


