<?php

namespace WeatherUnderground\Service\Factory;

use WeatherUnderground\Config\WeatherUndergroundConfig;
use WeatherUnderground\Service\Api;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class WeatherUndergroundServiceFactory implements FactoryInterface
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

        return new Api(new WeatherUndergroundConfig($config['weather-underground']), $serviceLocator->get('request'));
    }
}