<?php
/**
 * Config class for WeatherUnderground\Service\Api
 *
 * @class Api
 * @namespace WeatherUnderground\Config
 * @filename Api.php
 * @author Atanas Beloborodov <nask0@cod3r.net>
 * @license BSD 3-Clause
 */
namespace WeatherUnderground\Config;

class Api
{
    public $apiKey = '';
    public $apiHost = 'api.wunderground.com';
    public $apiPath = '';
    public $apiGetStr = '/api/';
    public $apiProtocol = 'https';

    /**
     * @param array $config
     * @throws
     */
    public function __construct(array $config)
    {
        if ( empty($config['key']) ) {
            throw new \Exception('You must provide a valid Weather Underground API Key in your config file in order to use this API');
        }

        $this->apiKey = (string) $config['key'];
        $this->apiHost = !empty($config['host']) ? (string) $config['host'] : $this->apiHost;
        $this->apiProtocol = !empty($config['protocol']) ? (string) $config['protocol'] : $this->apiProtocol;

        $this->apiPath = $this->apiGetStr . $this->apiKey . '/';
    }
}