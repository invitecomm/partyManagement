<?php
/**
 * Individual
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
 * Individual Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Individual implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Individual';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'href' => 'string',
        'gender' => 'string',
        'place_of_birth' => 'string',
        'country_of_birth' => 'string',
        'nationality' => 'string',
        'marital_status' => 'string',
        'birth_date' => '\DateTime',
        'title' => 'string',
        'given_name' => 'string',
        'family_name' => 'string',
        'middle_name' => 'string',
        'full_name' => 'string',
        'formatted_name' => 'string',
        'location' => 'string',
        'status' => 'string',
        'disability' => '\Swagger\Client\Model\Disability[]',
        'characteristic' => '\Swagger\Client\Model\Characteristic[]',
        'other_name' => '\Swagger\Client\Model\OtherName[]',
        'individual_identification' => '\Swagger\Client\Model\IndividualIdentification[]',
        'external_reference' => '\Swagger\Client\Model\ExternalReference[]',
        'related_party' => '\Swagger\Client\Model\RelatedParty[]',
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
        'gender' => null,
        'place_of_birth' => null,
        'country_of_birth' => null,
        'nationality' => null,
        'marital_status' => null,
        'birth_date' => 'date-time',
        'title' => null,
        'given_name' => null,
        'family_name' => null,
        'middle_name' => null,
        'full_name' => null,
        'formatted_name' => null,
        'location' => null,
        'status' => null,
        'disability' => null,
        'characteristic' => null,
        'other_name' => null,
        'individual_identification' => null,
        'external_reference' => null,
        'related_party' => null,
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
        'gender' => 'gender',
        'place_of_birth' => 'placeOfBirth',
        'country_of_birth' => 'countryOfBirth',
        'nationality' => 'nationality',
        'marital_status' => 'maritalStatus',
        'birth_date' => 'birthDate',
        'title' => 'title',
        'given_name' => 'givenName',
        'family_name' => 'familyName',
        'middle_name' => 'middleName',
        'full_name' => 'fullName',
        'formatted_name' => 'formattedName',
        'location' => 'location',
        'status' => 'status',
        'disability' => 'disability',
        'characteristic' => 'characteristic',
        'other_name' => 'otherName',
        'individual_identification' => 'individualIdentification',
        'external_reference' => 'externalReference',
        'related_party' => 'relatedParty',
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
        'gender' => 'setGender',
        'place_of_birth' => 'setPlaceOfBirth',
        'country_of_birth' => 'setCountryOfBirth',
        'nationality' => 'setNationality',
        'marital_status' => 'setMaritalStatus',
        'birth_date' => 'setBirthDate',
        'title' => 'setTitle',
        'given_name' => 'setGivenName',
        'family_name' => 'setFamilyName',
        'middle_name' => 'setMiddleName',
        'full_name' => 'setFullName',
        'formatted_name' => 'setFormattedName',
        'location' => 'setLocation',
        'status' => 'setStatus',
        'disability' => 'setDisability',
        'characteristic' => 'setCharacteristic',
        'other_name' => 'setOtherName',
        'individual_identification' => 'setIndividualIdentification',
        'external_reference' => 'setExternalReference',
        'related_party' => 'setRelatedParty',
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
        'gender' => 'getGender',
        'place_of_birth' => 'getPlaceOfBirth',
        'country_of_birth' => 'getCountryOfBirth',
        'nationality' => 'getNationality',
        'marital_status' => 'getMaritalStatus',
        'birth_date' => 'getBirthDate',
        'title' => 'getTitle',
        'given_name' => 'getGivenName',
        'family_name' => 'getFamilyName',
        'middle_name' => 'getMiddleName',
        'full_name' => 'getFullName',
        'formatted_name' => 'getFormattedName',
        'location' => 'getLocation',
        'status' => 'getStatus',
        'disability' => 'getDisability',
        'characteristic' => 'getCharacteristic',
        'other_name' => 'getOtherName',
        'individual_identification' => 'getIndividualIdentification',
        'external_reference' => 'getExternalReference',
        'related_party' => 'getRelatedParty',
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
        $this->container['gender'] = isset($data['gender']) ? $data['gender'] : null;
        $this->container['place_of_birth'] = isset($data['place_of_birth']) ? $data['place_of_birth'] : null;
        $this->container['country_of_birth'] = isset($data['country_of_birth']) ? $data['country_of_birth'] : null;
        $this->container['nationality'] = isset($data['nationality']) ? $data['nationality'] : null;
        $this->container['marital_status'] = isset($data['marital_status']) ? $data['marital_status'] : null;
        $this->container['birth_date'] = isset($data['birth_date']) ? $data['birth_date'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['given_name'] = isset($data['given_name']) ? $data['given_name'] : null;
        $this->container['family_name'] = isset($data['family_name']) ? $data['family_name'] : null;
        $this->container['middle_name'] = isset($data['middle_name']) ? $data['middle_name'] : null;
        $this->container['full_name'] = isset($data['full_name']) ? $data['full_name'] : null;
        $this->container['formatted_name'] = isset($data['formatted_name']) ? $data['formatted_name'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['disability'] = isset($data['disability']) ? $data['disability'] : null;
        $this->container['characteristic'] = isset($data['characteristic']) ? $data['characteristic'] : null;
        $this->container['other_name'] = isset($data['other_name']) ? $data['other_name'] : null;
        $this->container['individual_identification'] = isset($data['individual_identification']) ? $data['individual_identification'] : null;
        $this->container['external_reference'] = isset($data['external_reference']) ? $data['external_reference'] : null;
        $this->container['related_party'] = isset($data['related_party']) ? $data['related_party'] : null;
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
     * Gets gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param string $gender gender
     *
     * @return $this
     */
    public function setGender($gender)
    {
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets place_of_birth
     *
     * @return string
     */
    public function getPlaceOfBirth()
    {
        return $this->container['place_of_birth'];
    }

    /**
     * Sets place_of_birth
     *
     * @param string $place_of_birth place_of_birth
     *
     * @return $this
     */
    public function setPlaceOfBirth($place_of_birth)
    {
        $this->container['place_of_birth'] = $place_of_birth;

        return $this;
    }

    /**
     * Gets country_of_birth
     *
     * @return string
     */
    public function getCountryOfBirth()
    {
        return $this->container['country_of_birth'];
    }

    /**
     * Sets country_of_birth
     *
     * @param string $country_of_birth country_of_birth
     *
     * @return $this
     */
    public function setCountryOfBirth($country_of_birth)
    {
        $this->container['country_of_birth'] = $country_of_birth;

        return $this;
    }

    /**
     * Gets nationality
     *
     * @return string
     */
    public function getNationality()
    {
        return $this->container['nationality'];
    }

    /**
     * Sets nationality
     *
     * @param string $nationality nationality
     *
     * @return $this
     */
    public function setNationality($nationality)
    {
        $this->container['nationality'] = $nationality;

        return $this;
    }

    /**
     * Gets marital_status
     *
     * @return string
     */
    public function getMaritalStatus()
    {
        return $this->container['marital_status'];
    }

    /**
     * Sets marital_status
     *
     * @param string $marital_status marital_status
     *
     * @return $this
     */
    public function setMaritalStatus($marital_status)
    {
        $this->container['marital_status'] = $marital_status;

        return $this;
    }

    /**
     * Gets birth_date
     *
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->container['birth_date'];
    }

    /**
     * Sets birth_date
     *
     * @param \DateTime $birth_date birth_date
     *
     * @return $this
     */
    public function setBirthDate($birth_date)
    {
        $this->container['birth_date'] = $birth_date;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets given_name
     *
     * @return string
     */
    public function getGivenName()
    {
        return $this->container['given_name'];
    }

    /**
     * Sets given_name
     *
     * @param string $given_name given_name
     *
     * @return $this
     */
    public function setGivenName($given_name)
    {
        $this->container['given_name'] = $given_name;

        return $this;
    }

    /**
     * Gets family_name
     *
     * @return string
     */
    public function getFamilyName()
    {
        return $this->container['family_name'];
    }

    /**
     * Sets family_name
     *
     * @param string $family_name family_name
     *
     * @return $this
     */
    public function setFamilyName($family_name)
    {
        $this->container['family_name'] = $family_name;

        return $this;
    }

    /**
     * Gets middle_name
     *
     * @return string
     */
    public function getMiddleName()
    {
        return $this->container['middle_name'];
    }

    /**
     * Sets middle_name
     *
     * @param string $middle_name middle_name
     *
     * @return $this
     */
    public function setMiddleName($middle_name)
    {
        $this->container['middle_name'] = $middle_name;

        return $this;
    }

    /**
     * Gets full_name
     *
     * @return string
     */
    public function getFullName()
    {
        return $this->container['full_name'];
    }

    /**
     * Sets full_name
     *
     * @param string $full_name full_name
     *
     * @return $this
     */
    public function setFullName($full_name)
    {
        $this->container['full_name'] = $full_name;

        return $this;
    }

    /**
     * Gets formatted_name
     *
     * @return string
     */
    public function getFormattedName()
    {
        return $this->container['formatted_name'];
    }

    /**
     * Sets formatted_name
     *
     * @param string $formatted_name formatted_name
     *
     * @return $this
     */
    public function setFormattedName($formatted_name)
    {
        $this->container['formatted_name'] = $formatted_name;

        return $this;
    }

    /**
     * Gets location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param string $location location
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

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
     * Gets disability
     *
     * @return \Swagger\Client\Model\Disability[]
     */
    public function getDisability()
    {
        return $this->container['disability'];
    }

    /**
     * Sets disability
     *
     * @param \Swagger\Client\Model\Disability[] $disability disability
     *
     * @return $this
     */
    public function setDisability($disability)
    {
        $this->container['disability'] = $disability;

        return $this;
    }

    /**
     * Gets characteristic
     *
     * @return \Swagger\Client\Model\Characteristic[]
     */
    public function getCharacteristic()
    {
        return $this->container['characteristic'];
    }

    /**
     * Sets characteristic
     *
     * @param \Swagger\Client\Model\Characteristic[] $characteristic characteristic
     *
     * @return $this
     */
    public function setCharacteristic($characteristic)
    {
        $this->container['characteristic'] = $characteristic;

        return $this;
    }

    /**
     * Gets other_name
     *
     * @return \Swagger\Client\Model\OtherName[]
     */
    public function getOtherName()
    {
        return $this->container['other_name'];
    }

    /**
     * Sets other_name
     *
     * @param \Swagger\Client\Model\OtherName[] $other_name other_name
     *
     * @return $this
     */
    public function setOtherName($other_name)
    {
        $this->container['other_name'] = $other_name;

        return $this;
    }

    /**
     * Gets individual_identification
     *
     * @return \Swagger\Client\Model\IndividualIdentification[]
     */
    public function getIndividualIdentification()
    {
        return $this->container['individual_identification'];
    }

    /**
     * Sets individual_identification
     *
     * @param \Swagger\Client\Model\IndividualIdentification[] $individual_identification individual_identification
     *
     * @return $this
     */
    public function setIndividualIdentification($individual_identification)
    {
        $this->container['individual_identification'] = $individual_identification;

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
     * @return \Swagger\Client\Model\RelatedParty[]
     */
    public function getRelatedParty()
    {
        return $this->container['related_party'];
    }

    /**
     * Sets related_party
     *
     * @param \Swagger\Client\Model\RelatedParty[] $related_party related_party
     *
     * @return $this
     */
    public function setRelatedParty($related_party)
    {
        $this->container['related_party'] = $related_party;

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


