<?php

namespace WeatherUnderground\Service;

use Zend\Json\Json as json;

class Response
{
    private $_response = null;
    private $_rawResponse = '';

    public function __construct()
    {
        $this->_response = new \ArrayIterator();
    }

    public function setResponse($feature, $rawResponse)
    {
        $this->_rawResponse = $rawResponse;
        $response = $this->decodeResponse($rawResponse);
        $this->_response->offsetSet($feature, $response);
    }

    public function getResponse($feature = '')
    {
        if (!empty($feature) && $this->_response->offsetExists($feature)) {
            return $this->_response->offsetGet($feature);
        }
        return $this->_response->getArrayCopy();
    }

    public function decodeResponse($response, $type = Json::TYPE_OBJECT)
    {
        // Decode JSON objects as PHP objects
        return Json::decode($response, $type);
    }

    public function toString()
    {
        return $this->_rawResponse;
    }

    public function toArray()
    {
        return $this->_response->getArrayCopy();
    }
}