<?php
namespace WeatherUnderground\Service;

use WeatherUnderground\Config\WeatherUndergroundConfig;
use Zend\Http\Request as Request;

class WeatherUndergroundService implements Provider
{
    public function __construct(WeatherUndergroundConfig $config, Request $request)
    {

    }
}