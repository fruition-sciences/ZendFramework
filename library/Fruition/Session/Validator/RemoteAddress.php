<?php
/*
 * Created on July 7, 2011
 * Author: Boris Ngamamba
 *
 */
/**
 * Zend Framework
 *
 * Fruition_Session_Validator_RemoteAddress
 *
 * @category   Zend
 * @package    Fruition_Session
 * @subpackage Validator
 * 
 */

/**
 * Implement needed class
 * @see Zend_Session_Validator_Abstract
 */
require_once 'Zend/Session/Validator/Abstract.php';

/**
 * 
 * Allow to use IpAddress as Zend_Session Validator
 * 
 * Zend_Session Validators are sort of properties, allowing to control a session validity.
 * When Zend_Session Validators are created, they are  stored in session  (see Zend_Session_Validator_Abstract)
 * During page starting process ('session_start', or headers sending) , Zend_session::start() control if there are ..
 * ..some validators existing in session.
 * If there are, it validates each of them, returning a specific exception and stoping the loading on a validation error 
 *
 */
class Fruition_Session_Validator_RemoteAddress extends Zend_Session_Validator_Abstract
{

    /**
     * Setup() - this method will get the current ip address and store it in the session
     * as 'valid data'
     *
     * @return void
     */
    public function setup()
    {
        $ip = $this->getIpAddr();
        $this->setValidData( (!empty($ip)
            ? $ip : null) );
    }

    /**
     * Validate() - this method will determine if the current ip address matches the
     * ip address we stored when we initialized this variable.
     *
     * @return bool
     */
    public function validate()
    {
        $ip = $this->getIpAddr();
        $currentIp = (!empty($ip)
            ? $ip : null);

        return $currentIp === $this->getValidData();
    }

    /**
     * also existant as Utils::getRealIpAddr() => not use to avoid dependency
     * getIpAddr() - this method will return the real current ip address stored in $_SERVER[] variable.
     *
     * @return string
     */
    private function  getIpAddr()
    {
        if(!empty($_SERVER['HTTP_CLIENT_IP'])){ //check ip from share internet
            $ip=$_SERVER['HTTP_CLIENT_IP'];
        }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){ //to check ip is pass from proxy
            $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
        }else{
            $ip=$_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }

}
