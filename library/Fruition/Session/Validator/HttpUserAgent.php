<?php
/*
 * Created on July 13, 2011
 * Author: Boris Ngamamba
 *
 */

/**
 * Zend Framework
 *  
 * Fruition_Session_Validator_HttpUserAgent
 *
 * @category   Zend
 * @package    Fruition_Session
 * @subpackage Validator
 */

/**
 * Implement needed class
 * @see Zend_Session_Validator_Abstract
 */
require_once 'Zend/Session/Validator/HttpUserAgent.php';

/**
 * 
 * Allow to use UserAgent as Zend_Session Validator in a better way
 * If UserAgents change, session is destroyed, and session persistent cookie is removed
 * 
 */
class Fruition_Session_Validator_HttpUserAgent extends Zend_Session_Validator_HttpUserAgent
{

    /**
     * Validate() - this method will determine if the current user agent matches the
     * user agent we stored when we initialized this variable.
     *
     * @return bool
     */
    public function validate()
    {
        $currentBrowser = (isset($_SERVER['HTTP_USER_AGENT'])
            ? $_SERVER['HTTP_USER_AGENT'] : null);

        if($currentBrowser === $this->getValidData()){
            return true;
        }else{
            Zend_Session::destroy();
            Zend_Session::forgetMe();
            return false;
        }
    }

}
