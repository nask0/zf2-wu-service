<?php
/**
 * @class Hourly
 * @namespace WeatherUnderground\Feature
 * @filename Hourly.php
 * @author Atanas Beloborodov <nask0@cod3r.net>
 * @license BSD 3-Clause
 * @created 17 Feb 2014 20:58:28
 * @see http://www.wunderground.com/weather/api/d/docs?d=data/alerts
 */
namespace WeatherUnderground\Feature;

class Hourly extends Base
{
    public static $feature = 'hourly';
    public static $options = array();
    public static $nestLvl = 0;
    public static $canBeNested = true;
}