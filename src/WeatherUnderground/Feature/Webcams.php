<?php
/**
 * Basic skeleton class for new features.
 *
 * @class Webcams
 * @namespace WeatherUnderground\Feature
 * @filename Webcams.php
 * @author Atanas Beloborodov <nask0@cod3r.net>
 * @license BSD 3-Clause
 * @created 17 Feb 2014 21:39:38
 */
namespace WeatherUnderground\Feature;

class Webcams extends Base
{
    public static $feature = 'webcams';
    public static $options = array();
    public static $nestLvl = 0;
    public static $canBeNested = true;
}