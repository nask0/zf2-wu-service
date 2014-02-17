<?php
/**
 * Describes Almanac feature of Weather Underground API.
 *
 * Records within the United States come from the National Weather Service,
 * with approximately 120 reporting stations giving records. Records for
 * the rest of the United States, and locations outside of the United States,
 * come from the data we have stored. These are compiled records and only go as far back
 * as we have data for. The average high and low temperature going back as far as Weather Underground
 * has data for OR from National Weather Service going back 30 years.
 *
 * @class Almanac
 * @namespace WeatherUnderground\Feature
 * @filename Astronomy.php
 * @author Atanas Beloborodov <nask0@cod3r.net>
 * @license BSD 3-Clause
 * @created 17 Feb 2014 20:53:28
 */
namespace WeatherUnderground\Feature;

class Astronomy extends Base
{
    public static $feature = 'astronomy';
    public static $options = array();
    public static $nestLvl = 0;
    public static $canBeNested = false;
}