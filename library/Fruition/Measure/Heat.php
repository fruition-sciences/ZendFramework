<?php
/*
 * Created on Jan 31, 2011
 * Author: Benjamin Soufflet
 *
 */
/**
 * Zend Framework
 *
 *
 * @category  Zend
 * @package   Zend_Measure
 */

/**
 * Implement needed classes
 */
require_once 'Zend/Measure/Abstract.php';
require_once 'Zend/Locale.php';

/**
 * Class for handling Heat accumulation conversions
 *
 * @category   Fruition
 * @package    Fruition_Measure
 * @subpackage Fruition_Measure_Heat
 */
class Fruition_Measure_Heat extends Zend_Measure_Abstract
{
    const STANDARD = 'GROWING_DEGREE_DAY_CELSIUS';

    const GROWING_DEGREE_DAY_CELSIUS            = 'GROWING_DEGREE_DAY_CELSIUS';
    const GROWING_DEGREE_DAY_FAHRENHEIT         = 'GROWING_DEGREE_DAY_FAHRENHEIT';


    /**
     * Calculations for all heat accumulation units
     *
     * @var array
     */
    protected $_units = array(
        'GROWING_DEGREE_DAY_CELSIUS'        => array('1',                'TT'),
        'GROWING_DEGREE_DAY_FAHRENHEIT'     => array('0.5555555',        'TTF'),
        'STANDARD'                          => 'GROWING_DEGREE_DAY_CELSIUS'
    );
}
