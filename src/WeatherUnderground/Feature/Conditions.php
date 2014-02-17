<?php
/**
 * Describes Conditions feature of Weather Underground API.
 *
 * Returns the current temperature, weather condition, humidity,
 * wind, 'feels like' temperature, barometric pressure, and visibility.
 *
 * @class Conditions
 * @namespace WeatherUnderground\Feature
 * @filename Conditions.php
 * @author Atanas Beloborodov <nask0@cod3r.net>
 * @license BSD 3-Clause
 * @created 16 Feb 2014 10:12:53
 *
 * @todo: query nested with conditions : http://api.wunderground.com/api/0c277c2236876520/conditions/geolookup/q/autoip.json
 */
namespace WeatherUnderground\Feature;

class Conditions extends Base
{
    public static $feature = 'conditions';
    public static $options = array();
    public static $nestLvl = 0; // prepend
    public static $canBeNested = true;
}