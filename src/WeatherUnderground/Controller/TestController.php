<?php
namespace WeatherUnderground\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class TestController extends AbstractActionController
{
    public function facebookAction()
    {
        /* @var $facebook \SocialConnect\Service\FacebookService */
        /*$facebook = $this->getServiceLocator()->get('facebookConnect');

        $urlData = $facebook->getReturnUrlData();
        //var_dump($facebook);
        //exit;

        return $this->redirect()->toUrl(
            $facebook->getLoginUrl(
                $this->url()->fromRoute($urlData['routeName'], $urlData['params'], array('force_canonical' => true))
            )
        );*/
    }
}