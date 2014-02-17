<?php
/**
 * Basic skeleton class for new features.
 *
 * @class Yesterday
 * @namespace WeatherUnderground\Feature
 * @filename Yesterday.php
 * @author Atanas Beloborodov <nask0@cod3r.net>
 * @license BSD 3-Clause
 * @created 17 Feb 2014 21:39:38
 */
namespace WeatherUnderground\Feature;

class Yesterday extends Base
{
    public static $feature = 'yesterday';
    public static $options = array();
    public static $nestLvl = 0;
    public static $canBeNested = true;
}