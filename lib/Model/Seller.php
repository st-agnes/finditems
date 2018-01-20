<?php
/**
 * Seller
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * API to View & Search for Items
 *
 * The Browse API lets shoppers search for specific items by keyword, category, product, or item aspects and retrieve the details of an item.
 *
 * OpenAPI spec version: v1_beta.10.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
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
 * Seller Class Doc Comment
 *
 * @category Class
 * @description The type that defines the fields for basic and detailed information about the seller of the item returned by the &lt;b&gt; item&lt;/b&gt; resource.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Seller implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Seller';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'feedback_percentage' => 'string',
        'feedback_score' => 'int',
        'seller_account_type' => 'string',
        'seller_legal_info' => '\Swagger\Client\Model\SellerLegalInfo',
        'username' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'feedback_percentage' => null,
        'feedback_score' => null,
        'seller_account_type' => null,
        'seller_legal_info' => null,
        'username' => null
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
        'feedback_percentage' => 'feedbackPercentage',
        'feedback_score' => 'feedbackScore',
        'seller_account_type' => 'sellerAccountType',
        'seller_legal_info' => 'sellerLegalInfo',
        'username' => 'username'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'feedback_percentage' => 'setFeedbackPercentage',
        'feedback_score' => 'setFeedbackScore',
        'seller_account_type' => 'setSellerAccountType',
        'seller_legal_info' => 'setSellerLegalInfo',
        'username' => 'setUsername'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'feedback_percentage' => 'getFeedbackPercentage',
        'feedback_score' => 'getFeedbackScore',
        'seller_account_type' => 'getSellerAccountType',
        'seller_legal_info' => 'getSellerLegalInfo',
        'username' => 'getUsername'
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
        $this->container['feedback_percentage'] = isset($data['feedback_percentage']) ? $data['feedback_percentage'] : null;
        $this->container['feedback_score'] = isset($data['feedback_score']) ? $data['feedback_score'] : null;
        $this->container['seller_account_type'] = isset($data['seller_account_type']) ? $data['seller_account_type'] : null;
        $this->container['seller_legal_info'] = isset($data['seller_legal_info']) ? $data['seller_legal_info'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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

        return true;
    }


    /**
     * Gets feedback_percentage
     *
     * @return string
     */
    public function getFeedbackPercentage()
    {
        return $this->container['feedback_percentage'];
    }

    /**
     * Sets feedback_percentage
     *
     * @param string $feedback_percentage The percentage of the total positive feedback.
     *
     * @return $this
     */
    public function setFeedbackPercentage($feedback_percentage)
    {
        $this->container['feedback_percentage'] = $feedback_percentage;

        return $this;
    }

    /**
     * Gets feedback_score
     *
     * @return int
     */
    public function getFeedbackScore()
    {
        return $this->container['feedback_score'];
    }

    /**
     * Sets feedback_score
     *
     * @param int $feedback_score The feedback score of the seller. This value is based on the ratings from eBay members that bought items from this seller.
     *
     * @return $this
     */
    public function setFeedbackScore($feedback_score)
    {
        $this->container['feedback_score'] = $feedback_score;

        return $this;
    }

    /**
     * Gets seller_account_type
     *
     * @return string
     */
    public function getSellerAccountType()
    {
        return $this->container['seller_account_type'];
    }

    /**
     * Sets seller_account_type
     *
     * @param string $seller_account_type Indicates if the seller is a business or an individual. This is determined when the seller registers with eBay. If they register for a business account, this value will be BUSINESS. If they register for a private account, this value will be INDIVIDUAL. This designation is required by the tax laws in some countries. This field is returned only on the following sites. EBAY-AT &nbsp;&nbsp;&nbsp;EBAY-BE &nbsp;&nbsp;&nbsp;EBAY-CH &nbsp;&nbsp;&nbsp;EBAY-DE &nbsp;&nbsp;&nbsp;EBAY-ES &nbsp;&nbsp;&nbsp;EBAY-FR &nbsp;&nbsp;&nbsp;EBAY-GB &nbsp;&nbsp;&nbsp;EBAY-IE &nbsp;&nbsp;&nbsp; EBAY-IT &nbsp;&nbsp;&nbsp;EBAY-PL Valid values: BUSINESS INDIVIDUALCode so that your app gracefully handles any future changes to this list.
     *
     * @return $this
     */
    public function setSellerAccountType($seller_account_type)
    {
        $this->container['seller_account_type'] = $seller_account_type;

        return $this;
    }

    /**
     * Gets seller_legal_info
     *
     * @return \Swagger\Client\Model\SellerLegalInfo
     */
    public function getSellerLegalInfo()
    {
        return $this->container['seller_legal_info'];
    }

    /**
     * Sets seller_legal_info
     *
     * @param \Swagger\Client\Model\SellerLegalInfo $seller_legal_info seller_legal_info
     *
     * @return $this
     */
    public function setSellerLegalInfo($seller_legal_info)
    {
        $this->container['seller_legal_info'] = $seller_legal_info;

        return $this;
    }

    /**
     * Gets username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param string $username The user name created by the seller for use on eBay.
     *
     * @return $this
     */
    public function setUsername($username)
    {
        $this->container['username'] = $username;

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


