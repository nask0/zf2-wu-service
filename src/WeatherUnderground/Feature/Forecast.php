<?php
/**
 * Describes Conditions feature of Weather Underground API.
 *
 * Returns the current temperature, weather condition, humidity,
 * wind, 'feels like' temperature, barometric pressure, and visibility.
 *
 * @class Forecast
 * @namespace WeatherUnderground\Feature
 * @filename Forecast.php
 * @author Atanas Beloborodov <nask0@cod3r.net>
 * @license BSD 3-Clause
 * @created 16 Feb 2014 22:18:35
 *
 * @todo: query nested with conditions : http://api.wunderground.com/api/0c277c2236876520/conditions/forecast/geolookup/q/autoip.json
 */
namespace WeatherUnderground\Feature;

class Forecast extends Base
{
    public static $feature = 'forecast';
    public static $options = array();
    public static $nestLvl = 0; // prepend
    public static $canBeNested = true;
}