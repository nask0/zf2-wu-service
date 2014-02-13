<?php
namespace WeatherUnderground\Service;

use WeatherUnderground\Config\WeatherUndergroundConfig;
use Zend\Http\Request;

class WeatherUndergroundService implements Provider
{
    /**
     * @param WeatherUndergroundConfig $config
     */
    public function __construct(WeatherUndergroundConfig $config, Request $request)
    {

    }

    /**
     * @return bool
     */
    public function hasErrors()
    {
        return !(bool) $this->isValid;
    }
}