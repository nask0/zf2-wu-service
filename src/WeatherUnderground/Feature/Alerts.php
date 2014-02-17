<?php
/**
 * Describes Alerts feature of Weather Underground API.
 *
 * Returns the short name description, expiration time and a long text
 * description of a severe alert, if one has been issued for the searched upon location.
 *
 * @class Alerts
 * @namespace WeatherUnderground\Feature
 * @filename Alerts.php
 * @author Atanas Beloborodov <nask0@cod3r.net>
 * @license BSD 3-Clause
 * @created 16 Feb 2014 10:23:28
 * @see http://www.wunderground.com/weather/api/d/docs?d=data/alerts
 */
namespace WeatherUnderground\Feature;

class Alerts extends Base
{
    public static $feature = 'alerts';
    public static $options = array();
    public static $nestLevel = 0;
    public static $nestLvl = false;
}