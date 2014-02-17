<?php
/**
 * @TODO : configure api router endpoints in order to use api as provider for FE or something
 */
// Copy this file to "config/autoload/weather-underground.local.php"
return array(
    'weather-underground' => array(
        'enable_api_endpoints' => false, // @todo (implement me!) : whether to use api end points or not
        'key' => '0c277c2236876520',
        'host' => 'api.wunderground.com',
        'protocol' => 'http',
        'cache_response' => false
    ),
    'service_manager' => array(
        'factories' => array(
            'WeatherUnderground' => 'WeatherUnderground\Service\Factory\Api'
        )
    ),
);