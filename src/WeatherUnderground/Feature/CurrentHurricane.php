<?php
/**
 * Returns information about current hurricanes and tropical storms.
 * This feature can be used with other weather API features. However,
 * location query options do not apply to the results for currenthurricane.
 * Also, if you are requesting only the currenthurricane, use the following
 * request format:
 * --
 *   api.wunderground.com/api/0c277c2236876520/currenthurricane/view.format (json/xml)
 * --
 *
 * @class CurrentHurricane
 * @namespace WeatherUnderground\Feature
 * @filename CurrentHurricane.php
 * @author Atanas Beloborodov <nask0@cod3r.net>
 * @license BSD 3-Clause
 * @created 17 Feb 2014 20:58:28
 * @see http://www.wunderground.com/weather/api/d/docs?d=data/alerts
 */
namespace WeatherUnderground\Feature;

class CurrentHurricane extends Base
{
    public static $feature = 'currenthurricane';
    public static $options = array();
    public static $nestLvl = 0;
    public static $canBeNested = true;
}