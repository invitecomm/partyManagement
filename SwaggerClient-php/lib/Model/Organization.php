<?php
/**
 * Organization
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * API PartyManagement
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.1
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
 * Organization Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Organization implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Organization';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'href' => 'string',
        'is_legal_entity' => 'string',
        'type' => 'string',
        'exists_during' => '\Swagger\Client\Model\ExistsDuring',
        'trading_name' => 'string',
        'name_type' => 'string',
        'status' => 'string',
        'other_name' => '\Swagger\Client\Model\OtherName',
        'characteristic' => '\Swagger\Client\Model\Characteristic',
        'organization_identification' => '\Swagger\Client\Model\OrganizationIdentification',
        'external_reference' => '\Swagger\Client\Model\ExternalReference[]',
        'related_party' => '\Swagger\Client\Model\RelatedParty',
        'organization_parent_relationship' => '\Swagger\Client\Model\OrganizationParentRelationship',
        'organization_child_relationship' => '\Swagger\Client\Model\OrganizationChildRelationship',
        'contact_medium' => '\Swagger\Client\Model\ContactMedium[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'href' => null,
        'is_legal_entity' => null,
        'type' => null,
        'exists_during' => null,
        'trading_name' => null,
        'name_type' => null,
        'status' => null,
        'other_name' => null,
        'characteristic' => null,
        'organization_identification' => null,
        'external_reference' => null,
        'related_party' => null,
        'organization_parent_relationship' => null,
        'organization_child_relationship' => null,
        'contact_medium' => null
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
        'id' => 'id',
        'href' => 'href',
        'is_legal_entity' => 'isLegalEntity',
        'type' => 'type',
        'exists_during' => 'existsDuring',
        'trading_name' => 'tradingName',
        'name_type' => 'nameType',
        'status' => 'status',
        'other_name' => 'otherName',
        'characteristic' => 'characteristic',
        'organization_identification' => 'organizationIdentification',
        'external_reference' => 'externalReference',
        'related_party' => 'relatedParty',
        'organization_parent_relationship' => 'organizationParentRelationship',
        'organization_child_relationship' => 'organizationChildRelationship',
        'contact_medium' => 'contactMedium'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'href' => 'setHref',
        'is_legal_entity' => 'setIsLegalEntity',
        'type' => 'setType',
        'exists_during' => 'setExistsDuring',
        'trading_name' => 'setTradingName',
        'name_type' => 'setNameType',
        'status' => 'setStatus',
        'other_name' => 'setOtherName',
        'characteristic' => 'setCharacteristic',
        'organization_identification' => 'setOrganizationIdentification',
        'external_reference' => 'setExternalReference',
        'related_party' => 'setRelatedParty',
        'organization_parent_relationship' => 'setOrganizationParentRelationship',
        'organization_child_relationship' => 'setOrganizationChildRelationship',
        'contact_medium' => 'setContactMedium'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'href' => 'getHref',
        'is_legal_entity' => 'getIsLegalEntity',
        'type' => 'getType',
        'exists_during' => 'getExistsDuring',
        'trading_name' => 'getTradingName',
        'name_type' => 'getNameType',
        'status' => 'getStatus',
        'other_name' => 'getOtherName',
        'characteristic' => 'getCharacteristic',
        'organization_identification' => 'getOrganizationIdentification',
        'external_reference' => 'getExternalReference',
        'related_party' => 'getRelatedParty',
        'organization_parent_relationship' => 'getOrganizationParentRelationship',
        'organization_child_relationship' => 'getOrganizationChildRelationship',
        'contact_medium' => 'getContactMedium'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['href'] = isset($data['href']) ? $data['href'] : null;
        $this->container['is_legal_entity'] = isset($data['is_legal_entity']) ? $data['is_legal_entity'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['exists_during'] = isset($data['exists_during']) ? $data['exists_during'] : null;
        $this->container['trading_name'] = isset($data['trading_name']) ? $data['trading_name'] : null;
        $this->container['name_type'] = isset($data['name_type']) ? $data['name_type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['other_name'] = isset($data['other_name']) ? $data['other_name'] : null;
        $this->container['characteristic'] = isset($data['characteristic']) ? $data['characteristic'] : null;
        $this->container['organization_identification'] = isset($data['organization_identification']) ? $data['organization_identification'] : null;
        $this->container['external_reference'] = isset($data['external_reference']) ? $data['external_reference'] : null;
        $this->container['related_party'] = isset($data['related_party']) ? $data['related_party'] : null;
        $this->container['organization_parent_relationship'] = isset($data['organization_parent_relationship']) ? $data['organization_parent_relationship'] : null;
        $this->container['organization_child_relationship'] = isset($data['organization_child_relationship']) ? $data['organization_child_relationship'] : null;
        $this->container['contact_medium'] = isset($data['contact_medium']) ? $data['contact_medium'] : null;
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
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets href
     *
     * @return string
     */
    public function getHref()
    {
        return $this->container['href'];
    }

    /**
     * Sets href
     *
     * @param string $href href
     *
     * @return $this
     */
    public function setHref($href)
    {
        $this->container['href'] = $href;

        return $this;
    }

    /**
     * Gets is_legal_entity
     *
     * @return string
     */
    public function getIsLegalEntity()
    {
        return $this->container['is_legal_entity'];
    }

    /**
     * Sets is_legal_entity
     *
     * @param string $is_legal_entity is_legal_entity
     *
     * @return $this
     */
    public function setIsLegalEntity($is_legal_entity)
    {
        $this->container['is_legal_entity'] = $is_legal_entity;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets exists_during
     *
     * @return \Swagger\Client\Model\ExistsDuring
     */
    public function getExistsDuring()
    {
        return $this->container['exists_during'];
    }

    /**
     * Sets exists_during
     *
     * @param \Swagger\Client\Model\ExistsDuring $exists_during exists_during
     *
     * @return $this
     */
    public function setExistsDuring($exists_during)
    {
        $this->container['exists_during'] = $exists_during;

        return $this;
    }

    /**
     * Gets trading_name
     *
     * @return string
     */
    public function getTradingName()
    {
        return $this->container['trading_name'];
    }

    /**
     * Sets trading_name
     *
     * @param string $trading_name trading_name
     *
     * @return $this
     */
    public function setTradingName($trading_name)
    {
        $this->container['trading_name'] = $trading_name;

        return $this;
    }

    /**
     * Gets name_type
     *
     * @return string
     */
    public function getNameType()
    {
        return $this->container['name_type'];
    }

    /**
     * Sets name_type
     *
     * @param string $name_type name_type
     *
     * @return $this
     */
    public function setNameType($name_type)
    {
        $this->container['name_type'] = $name_type;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets other_name
     *
     * @return \Swagger\Client\Model\OtherName
     */
    public function getOtherName()
    {
        return $this->container['other_name'];
    }

    /**
     * Sets other_name
     *
     * @param \Swagger\Client\Model\OtherName $other_name other_name
     *
     * @return $this
     */
    public function setOtherName($other_name)
    {
        $this->container['other_name'] = $other_name;

        return $this;
    }

    /**
     * Gets characteristic
     *
     * @return \Swagger\Client\Model\Characteristic
     */
    public function getCharacteristic()
    {
        return $this->container['characteristic'];
    }

    /**
     * Sets characteristic
     *
     * @param \Swagger\Client\Model\Characteristic $characteristic characteristic
     *
     * @return $this
     */
    public function setCharacteristic($characteristic)
    {
        $this->container['characteristic'] = $characteristic;

        return $this;
    }

    /**
     * Gets organization_identification
     *
     * @return \Swagger\Client\Model\OrganizationIdentification
     */
    public function getOrganizationIdentification()
    {
        return $this->container['organization_identification'];
    }

    /**
     * Sets organization_identification
     *
     * @param \Swagger\Client\Model\OrganizationIdentification $organization_identification organization_identification
     *
     * @return $this
     */
    public function setOrganizationIdentification($organization_identification)
    {
        $this->container['organization_identification'] = $organization_identification;

        return $this;
    }

    /**
     * Gets external_reference
     *
     * @return \Swagger\Client\Model\ExternalReference[]
     */
    public function getExternalReference()
    {
        return $this->container['external_reference'];
    }

    /**
     * Sets external_reference
     *
     * @param \Swagger\Client\Model\ExternalReference[] $external_reference external_reference
     *
     * @return $this
     */
    public function setExternalReference($external_reference)
    {
        $this->container['external_reference'] = $external_reference;

        return $this;
    }

    /**
     * Gets related_party
     *
     * @return \Swagger\Client\Model\RelatedParty
     */
    public function getRelatedParty()
    {
        return $this->container['related_party'];
    }

    /**
     * Sets related_party
     *
     * @param \Swagger\Client\Model\RelatedParty $related_party related_party
     *
     * @return $this
     */
    public function setRelatedParty($related_party)
    {
        $this->container['related_party'] = $related_party;

        return $this;
    }

    /**
     * Gets organization_parent_relationship
     *
     * @return \Swagger\Client\Model\OrganizationParentRelationship
     */
    public function getOrganizationParentRelationship()
    {
        return $this->container['organization_parent_relationship'];
    }

    /**
     * Sets organization_parent_relationship
     *
     * @param \Swagger\Client\Model\OrganizationParentRelationship $organization_parent_relationship organization_parent_relationship
     *
     * @return $this
     */
    public function setOrganizationParentRelationship($organization_parent_relationship)
    {
        $this->container['organization_parent_relationship'] = $organization_parent_relationship;

        return $this;
    }

    /**
     * Gets organization_child_relationship
     *
     * @return \Swagger\Client\Model\OrganizationChildRelationship
     */
    public function getOrganizationChildRelationship()
    {
        return $this->container['organization_child_relationship'];
    }

    /**
     * Sets organization_child_relationship
     *
     * @param \Swagger\Client\Model\OrganizationChildRelationship $organization_child_relationship organization_child_relationship
     *
     * @return $this
     */
    public function setOrganizationChildRelationship($organization_child_relationship)
    {
        $this->container['organization_child_relationship'] = $organization_child_relationship;

        return $this;
    }

    /**
     * Gets contact_medium
     *
     * @return \Swagger\Client\Model\ContactMedium[]
     */
    public function getContactMedium()
    {
        return $this->container['contact_medium'];
    }

    /**
     * Sets contact_medium
     *
     * @param \Swagger\Client\Model\ContactMedium[] $contact_medium contact_medium
     *
     * @return $this
     */
    public function setContactMedium($contact_medium)
    {
        $this->container['contact_medium'] = $contact_medium;

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


