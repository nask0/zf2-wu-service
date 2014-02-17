<?php
/**
 * Basic skeleton class for new features.
 *
 * @class Rawtide
 * @namespace WeatherUnderground\Feature
 * @filename Rawtide.php
 * @author Atanas Beloborodov <nask0@cod3r.net>
 * @license BSD 3-Clause
 * @created 17 Feb 2014 21:36:22
 */
namespace WeatherUnderground\Feature;

class Rawtide extends Base
{
    public static $feature = 'rawtide';
    public static $options = array();
    public static $nestLvl = 0;
    public static $canBeNested = true;
}