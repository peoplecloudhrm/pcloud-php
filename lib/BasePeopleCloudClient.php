<?php

namespace PeopleCloud;

class BasePeopleCloudClient implements PoepleCloudClientInterface
{
    /** @var string default base URL for PeopleCloud's API */
    const DEFAULT_API_BASE = 'https://account.people-cloud.com';

    /** @var string default base URL for PeopleCloud's OAuth API */
    const DEFAULT_CONNECT_BASE = 'https://account.people-cloud.com';

    /** @var string default base URL for PeopleCloud's Files API */
    const DEFAULT_FILES_BASE = 'https://files.people-cloud.com';

    /** @var array<string, mixed> */
    private $config;

    public function __construct($config = [])
    {
        $config = \array_merge($this->getDefaultConfig(), $config);
        $this->config = $config;
    }

    /**
     * Gets the API key used by the client to send requests.
     *
     * @return null|string the API key used by the client to send requests
     */
    public function getApiKey()
    {
        return $this->config['api_key'];
    }

    /**
     * Gets the client ID used by the client in OAuth requests.
     *
     * @return null|string the client ID used by the client in OAuth requests
     */
    public function getClientId()
    {
        return $this->config['client_id'];
    }

    /**
     * Gets the base URL for PeopleCloud's API.
     *
     * @return string the base URL for PeopleCloud's API
     */
    public function getApiBase()
    {
        return $this->config['api_base'];
    }

    /**
     * Gets the base URL for PeopleCloud's OAuth API.
     *
     * @return string the base URL for PeopleCloud's OAuth API
     */
    public function getConnectBase()
    {
        return $this->config['connect_base'];
    }

    /**
     * Gets the base URL for PeopleCloud's Files API.
     *
     * @return string the base URL for PeopleCloud's Files API
     */
    public function getFilesBase()
    {
        return $this->config['files_base'];
    }

    /**
     * Sends a request to PeopleCloud's API.
     *
     * @param string $method the HTTP method
     * @param string $path the path of the request
     * @param array $params the parameters of the request
     * @param array|\PeopleCloud\Util\RequestOptions $opts the special modifiers of the request
     *
     * @return \PeopleCloud\PeopleCloudObject the object returned by PeopleCloud's API
     */
    public function request($method, $path, $params, $opts)
    {
        throw new \Exception("Not implemented");
    }

    /**
     * Sends a request to PeopleCloud's API.
     *
     * @param string $method the HTTP method
     * @param string $path the path of the request
     * @param array $params the parameters of the request
     * @param array|\PeopleCloud\Util\RequestOptions $opts the special modifiers of the request
     *
     * @return \PeopleCloud\Collection of ApiResources
     */
    public function requestCollection($method, $path, $params, $opts)
    {
        throw new \Exception("Not implemented");
    }

    /**
     * @param \PeopleCloud\Util\RequestOptions $opts
     *
     * @throws \PeopleCloud\Exception\AuthenticationException
     *
     * @return string
     */
    private function apiKeyForRequest($opts)
    {
        throw new \Exception("Not implemented");
    }

    /**
     * TODO: replace this with a private constant when we drop support for PHP < 5.
     *
     * @return array<string, mixed>
     */
    private function getDefaultConfig()
    {
        return [
            'api_key' => null,
            'client_id' => null,
            'peoplecloud_account' => null,
            'peoplecloud_version' => null,
            'api_base' => self::DEFAULT_API_BASE,
            'connect_base' => self::DEFAULT_CONNECT_BASE,
            'files_base' => self::DEFAULT_FILES_BASE,
        ];
    }

    /**
     * @param array<string, mixed> $config
     *
     * @throws \PeopleCloud\Exception\InvalidArgumentException
     */
    private function validateConfig($config)
    {
        throw new \Exception("Not implemented");
    }
}
