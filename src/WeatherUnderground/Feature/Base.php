<?php
/**
 * class description
 *
 * @class Base
 * @namespace WeatherUnderground\Feature
 * @filename Base.php
 * @author Atanas Beloborodov <nask0@cod3r.net>
 * @license BSD 3-Clause
 * @created 16 Feb 2014 09:12:53
 */
namespace WeatherUnderground\Feature;

abstract class Base
{
    public static $feature = 'base';
    public static $options = array();
    public static $nestLvl = 0;
    public static $canBeNested = false;

    private $_selectedOpts = array();

    public function getFeature()
    {
        return ucfirst(strtolower(static::$feature));
    }

    public function getOptions()
    {
        return static::$options;
    }

    public function canBeNested()
    {
        return (bool) static::$canBeNested;
    }

    public function getNestLevel()
    {
        return (int) static::$nestLvl;
    }

    public function setOptions(array $opts)
    {
        // $f = $this->getFeature();
        foreach ($opts as $option => $optionValue) {
            if ( array_key_exists($option, static::$options) ) {
                $this->_selectedOpts[$option] = $optionValue;
            }
        }
    }

    public function toString()
    {
        $str = (0 !== $this->getNestLevel()) ? strtolower(static::$feature) . '/q' : strtolower(static::$feature);
        $str .= '/';

        if ( !empty($this->_selectedOpts) ) {
            foreach ( $this->_selectedOpts as $opt => $val ) {
                $str .= (is_string($val)) ? $opt . '/' . $val : $opt;
            }
        }

        return $str;
    }
}