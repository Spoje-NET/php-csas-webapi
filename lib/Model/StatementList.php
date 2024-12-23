<?php

declare(strict_types=1);

/**
 * This file is part of the CsasWebApi package
 *
 * https://github.com/Spoje-NET/php-csas-webapi
 *
 * (c) SpojeNetIT <http://spoje.net/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Production Accounts API V3.
 *
 * API for managing production accounts.
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: vitezslav.dvorak@spojenet.cz
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.10.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SpojeNET\Csas\Model;

use SpojeNET\Csas\ObjectSerializer;

/**
 * StatementList Class Doc Comment.
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 *
 * @implements \ArrayAccess<string, mixed>
 */
class StatementList implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'StatementList';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'pageNumber' => 'float',
        'pageCount' => 'float',
        'pageSize' => 'float',
        'nextPage' => 'float',
        'accountStatements' => '\SpojeNET\Csas\Model\StatementListAccountStatementsInner[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     *
     * @phpstan-var array<string, string|null>
     *
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'pageNumber' => null,
        'pageCount' => null,
        'pageSize' => null,
        'nextPage' => null,
        'accountStatements' => null,
    ];

    /**
     * Array of nullable properties. Used for (de)serialization.
     *
     * @var bool[]
     */
    protected static array $openAPINullables = [
        'pageNumber' => false,
        'pageCount' => false,
        'pageSize' => false,
        'nextPage' => false,
        'accountStatements' => false,
    ];

    /**
     * If a nullable field gets set to null, insert it here.
     *
     * @var bool[]
     */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'pageNumber' => 'pageNumber',
        'pageCount' => 'pageCount',
        'pageSize' => 'pageSize',
        'nextPage' => 'nextPage',
        'accountStatements' => 'accountStatements',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'pageNumber' => 'setPageNumber',
        'pageCount' => 'setPageCount',
        'pageSize' => 'setPageSize',
        'nextPage' => 'setNextPage',
        'accountStatements' => 'setAccountStatements',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'pageNumber' => 'getPageNumber',
        'pageCount' => 'getPageCount',
        'pageSize' => 'getPageSize',
        'nextPage' => 'getNextPage',
        'accountStatements' => 'getAccountStatements',
    ];

    /**
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    protected array $container = [];

    /**
     * Constructor.
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('pageNumber', $data ?? [], null);
        $this->setIfExists('pageCount', $data ?? [], null);
        $this->setIfExists('pageSize', $data ?? [], null);
        $this->setIfExists('nextPage', $data ?? [], null);
        $this->setIfExists('accountStatements', $data ?? [], null);
    }

    /**
     * Gets the string presentation of the object.
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            \JSON_PRETTY_PRINT,
        );
    }

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Checks if a property is nullable.
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     */
    public function isNullableSetToNull(string $property): bool
    {
        return \in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
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
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        return [];
    }

    /**
     * Validate all the properties in the model
     * return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return \count($this->listInvalidProperties()) === 0;
    }

    /**
     * Gets pageNumber.
     *
     * @return null|float
     */
    public function getPageNumber()
    {
        return $this->container['pageNumber'];
    }

    /**
     * Sets pageNumber.
     *
     * @param null|float $pageNumber Page number
     *
     * @return self
     */
    public function setPageNumber($pageNumber)
    {
        if (null === $pageNumber) {
            throw new \InvalidArgumentException('non-nullable pageNumber cannot be null');
        }

        $this->container['pageNumber'] = $pageNumber;

        return $this;
    }

    /**
     * Gets pageCount.
     *
     * @return null|float
     */
    public function getPageCount()
    {
        return $this->container['pageCount'];
    }

    /**
     * Sets pageCount.
     *
     * @param null|float $pageCount Total number of pages
     *
     * @return self
     */
    public function setPageCount($pageCount)
    {
        if (null === $pageCount) {
            throw new \InvalidArgumentException('non-nullable pageCount cannot be null');
        }

        $this->container['pageCount'] = $pageCount;

        return $this;
    }

    /**
     * Gets pageSize.
     *
     * @return null|float
     */
    public function getPageSize()
    {
        return $this->container['pageSize'];
    }

    /**
     * Sets pageSize.
     *
     * @param null|float $pageSize Number of entries per page
     *
     * @return self
     */
    public function setPageSize($pageSize)
    {
        if (null === $pageSize) {
            throw new \InvalidArgumentException('non-nullable pageSize cannot be null');
        }

        $this->container['pageSize'] = $pageSize;

        return $this;
    }

    /**
     * Gets nextPage.
     *
     * @return null|float
     */
    public function getNextPage()
    {
        return $this->container['nextPage'];
    }

    /**
     * Sets nextPage.
     *
     * @param null|float $nextPage Next page number
     *
     * @return self
     */
    public function setNextPage($nextPage)
    {
        if (null === $nextPage) {
            throw new \InvalidArgumentException('non-nullable nextPage cannot be null');
        }

        $this->container['nextPage'] = $nextPage;

        return $this;
    }

    /**
     * Gets accountStatements.
     *
     * @return null|\SpojeNET\Csas\Model\StatementListAccountStatementsInner[]
     */
    public function getAccountStatements()
    {
        return $this->container['accountStatements'];
    }

    /**
     * Sets accountStatements.
     *
     * @param null|\SpojeNET\Csas\Model\StatementListAccountStatementsInner[] $accountStatements accountStatements
     *
     * @return self
     */
    public function setAccountStatements($accountStatements)
    {
        if (null === $accountStatements) {
            throw new \InvalidArgumentException('non-nullable accountStatements cannot be null');
        }

        $this->container['accountStatements'] = $accountStatements;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
     *
     * @return null|mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param null|int $offset Offset
     * @param mixed    $value  Value to be set
     */
    public function offsetSet($offset, $value): void
    {
        if (null === $offset) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param int $offset Offset
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     *
     * @see https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed returns data which can be serialized by json_encode(), which is a value
     *               of any type other than a resource
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets a header-safe presentation of the object.
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }

    /**
     * Array of nullable properties.
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null.
     *
     * @return bool[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null.
     *
     * @param bool[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
     * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
     * $this->openAPINullablesSetToNull array.
     *
     * @param mixed $defaultValue
     */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && \array_key_exists($variableName, $fields) && null === $fields[$variableName]) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }
}
