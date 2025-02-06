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

namespace SpojeNET\Csas;

/**
 * Description of ApiClient.
 *
 * @author vitex
 */
class ApiClient extends \GuzzleHttp\Client
{
    /**
     * ClientID obtained from Developer Portal - when you registered your app with us.
     */
    protected string $apiKey;
    protected string $token;

    /**
     * Use sandbox for api calls ?
     */
    protected bool $sandBoxMode = false;

    /**
     * {@inheritDoc}
     *
     * $config['apikey'] - obtained from Developer Portal - when you registered your app with us.
     * $config['token'] - your access token
     * $config['sandbox'] = true to use //api/csas/public/sandbox/v3/* endpoints
     *
     * @throws \Exception ACCESS_TOKEN is not set
     * @throws \Exception API_KEY is not set
     */
    public function __construct(array $config = [])
    {
        if (\array_key_exists('apikey', $config) === false) {
            $this->apiKey = \Ease\Shared::cfg('API_KEY');
        } else {
            $this->apiKey = $config['apikey'];
        }

        if (\array_key_exists('token', $config) === false) {
            $this->token = \Ease\Shared::cfg('API_TOKEN');
        } else {
            $this->token = $config['token'];
        }

        if (\array_key_exists('debug', $config) === false) {
            $config['debug'] = \Ease\Shared::cfg('API_DEBUG', false);
        }

        if (\array_key_exists('sandbox', $config)) {
            $this->sandBoxMode = (bool) $config['sandbox'];
        } else {
            $this->token = (bool) \Ease\Shared::cfg('SANDBOX_MODE');
        }

        parent::__construct($config);
    }

    /**
     * ClientID obtained from Developer Portal.
     *
     * @return string
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }

    public function getAccessToken(): string
    {
        return $this->token;
    }

    /**
     * Use mocking uri for api calls ?
     */
    public function getSandBoxMode(): bool
    {
        return $this->sandBoxMode;
    }

    /**
     * Merges default options into the array.
     *
     * @param array $options Options to modify by reference
     */
    private function prepareDefaults(array $options): array
    {
        $options['headers']['User-Agent'] = $this->config->getUserAgent();

        return parent::prepareDefaults($options);
    }
}
