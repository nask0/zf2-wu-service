<?php

namespace WeatherUnderground\Service\Factory;

use WeatherUnderground\Config\Api as ApiConfig;
use WeatherUnderground\Service\Api as ApiService;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class Api implements FactoryInterface
{
    /**
     * @param ServiceLocatorInterface $serviceLocator
     *
     * @return mixed|FacebookService
     * @throws \Exception
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $config = $serviceLocator->get('config');

        if (!array_key_exists('weather-underground', $config)) {
            throw new \Exception('You must copy the "weather-underground.local.php.dist" file to your config/autoload under "weather-underground.local.php" namedirectory.');
        }

        return new ApiService(new ApiConfig($config['weather-underground']), $serviceLocator->get('request'));
    }
}