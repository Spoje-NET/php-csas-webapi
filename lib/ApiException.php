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

namespace SpojeNET\Csas;

/**
 * ApiException Class Doc Comment.
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 */
class ApiException extends \Exception
{
    /**
     * The HTTP body of the server response either as Json or string.
     *
     * @var null|\stdClass|string
     */
    protected $responseBody;

    /**
     * The HTTP header of the server response.
     *
     * @var null|string[][]
     */
    protected ?array $responseHeaders = null;

    /**
     * The deserialized response object.
     *
     * @var null|\stdClass|string
     */
    protected $responseObject;

    /**
     * Constructor.
     *
     * @param string                $message         Error message
     * @param int                   $code            HTTP status code
     * @param null|string[][]       $responseHeaders HTTP response header
     * @param null|\stdClass|string $responseBody    HTTP decoded body of the server response either as \stdClass or string
     */
    public function __construct($message = '', $code = 0, $responseHeaders = [], $responseBody = null)
    {
        parent::__construct($message, $code);
        $this->responseHeaders = $responseHeaders;
        $this->responseBody = $responseBody;
    }

    /**
     * Gets the HTTP response header.
     *
     * @return null|string[][] HTTP response header
     */
    public function getResponseHeaders()
    {
        return $this->responseHeaders;
    }

    /**
     * Gets the HTTP body of the server response either as Json or string.
     *
     * @return null|\stdClass|string HTTP body of the server response either as \stdClass or string
     */
    public function getResponseBody()
    {
        return $this->responseBody;
    }

    /**
     * Sets the deserialized response object (during deserialization).
     *
     * @param mixed $obj Deserialized response object
     */
    public function setResponseObject($obj): void
    {
        $this->responseObject = $obj;
    }

    /**
     * Gets the deserialized response object (during deserialization).
     *
     * @return mixed the deserialized response object
     */
    public function getResponseObject()
    {
        return $this->responseObject;
    }
}
