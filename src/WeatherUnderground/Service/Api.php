<?php
namespace WeatherUnderground\Service;

use WeatherUnderground\Config\Api as ApiConfig;
use WeatherUnderground\Service\Response as Response;
use Zend\Http\Client as HttpClient;

class Api
{
    private $_config = null;
    private $_httpClient = null;
    private $_response;
    private $_returnType = 'php';
    private $_currentFeatures = array();

    /**
     * @param ApiConfig $config
     */
    public function __construct(ApiConfig $config)
    {
        if ( null === $this->_config ) {
            $this->_config = $config;
        }

        if ( null === $this->_httpClient ) {
            $this->_httpClient = new HttpClient($this->_config->apiHost,
                                                array(
                                                    'maxredirects' => 0,
                                                    'timeout'      => 30
                                                )
                                     );
        }

        if ( null === $this->_response) {
            $this->_response = new Response();
        }

        // setting up url
        $this->_httpClient->getUri()
                          ->setScheme($this->_config->apiProtocol)
                          ->setHost($this->_config->apiHost);
    }

    public function setReturnType($type = 'php')
    {
        if ( in_array($type, array('json', 'php')) ) {
            $this->_returnType = $type;
        } else {
            $this->_returnType = 'json';
        }
    }

    public function addFeature($feature, array $options = array())
    {
        $feature = ucfirst(strtolower($feature));
        $featureClass = 'WeatherUnderground\Feature\\' . $feature;

        if ( class_exists($featureClass) ) { // check whether feature exists
            if ( !array_key_exists($feature, $this->_currentFeatures)) { // check if we have it already loaded
                $this->_currentFeatures[$feature] = new $featureClass();
            }

            $this->_currentFeatures[$feature]->setOptions($options);

            return $this;
        } else {
            throw new \Exception('Unable to find feature : '.$feature);
        }
    }

    // public function removeFeature($feature) {}

    public function execute()
    {
        $append = '';
        $prepend = '';
        foreach ( $this->_currentFeatures as $feature ) {
            if ( $feature->canBeNested() ) {
                if (0 == $feature->getNestLevel()) {
                    $prepend .= $feature->toString();
                } else {
                    $append .= $feature->toString();
                }
            }
        }

        // @TODO : check for format
        // @TODO : cache query responses !!
        $this->_prepareHttpClinet($prepend . $append . '.json');

        $rawResponse = $this->_httpClient->send();
        $this->_response->setResponse('all', $rawResponse->getBody()); // @TODO : Do we actually need this response object ?!?

        /*
        var_dump($rawResponse->getBody());
        var_dump($rawResponse->toString());
        var_dump($this->_response->getResponse());
        exit;
        */

        // @TODO : return and json as well as other types
        return $this->_response->getResponse();
    }

    public function getResponse()
    {
        return $this->_response;
    }

    private function _prepareHttpClinet($path, $method = \Zend\Http\Request::METHOD_GET)
    {
        $this->_httpClient->resetParameters();

        $this->_httpClient->setMethod($method);
        $this->_httpClient->setOptions(array('sslverifypeer' => false)); // !!!

        // setting up headers
        $this->_httpClient->setHeaders(
                                array(
                                    'X-Target-URI' => $this->_config->apiProtocol . '://' . $this->_config->apiHost,
                                    'X-HostCommonName' => $this->_config->apiHost
                                )
                            );

        $this->_httpClient->getUri()->setPath($this->_config->apiPath . (string) $path);
    }

    /**
     * @todo
     */
    private function _cacheResponse()
    {

    }
}