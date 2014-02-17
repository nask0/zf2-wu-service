<?php
/**
 * Describes Geolookup feature of Weather Underground API.
 *
 * Returns the city name, zip code / postal code, latitude-longitude coordinates
 * and nearby personal weather stations.
 *
 * @class Geolookup
 * @namespace WeatherUnderground\Feature
 * @filename Geolookup.php
 * @author Atanas Beloborodov <nask0@cod3r.net>
 * @license BSD 3-Clause
 * @created 16 Feb 2014 09:12:53
 */
namespace WeatherUnderground\Feature;

class Geolookup extends Base
{
    public static $feature = 'geolookup';
    public static $options = array('ca' => '', // city within the USA
                            'country' => '',
                            'autoip' => '',
                            'zip_postal' => '',
                            'airport' => '',
                            'coordinates' => '',
                            'pws' => ''
                      );
    public static $nestLvl = 1; // append
    public static $canBeNested = true;
}