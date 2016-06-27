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
 * Class for handling irradiance conversions
 *
 * @category   Fruition
 * @package    Fruition_Measure
 * @subpackage Fruition_Measure_Irradiance
 */
class Fruition_Measure_Irradiance extends Zend_Measure_Abstract
{
    const STANDARD = 'WATT_PER_SQUARE_METER';

    const WATT_PER_SQUARE_METER           = 'WATT_PER_SQUARE_METER';
    const KILOWATT_PER_SQUARE_METER       = 'KILOWATT_PER_SQUARE_METER';
    const CALORIE_PER_SQUARE_CENTIMETER   = 'CALORIE_PER_SQUARE_CENTIMETER';


    /**
     * Calculations for all electrical resistance units
     *
     * @var array
     */
    protected $_units = array(
        'WATT_PER_SQUARE_METER'             => array('1',                'W/m²'),
        'KILOWATT_PER_SQUARE_METER'         => array('1000',             'kW/m²'),
        'CALORIE_PER_SQUARE_CENTIMETER'     => array('11.6222',          'cal/cm²'), //  cal/cm2 * 10000 * 4.184 / 3600 = w/m2
        'STANDARD'                          => 'WATT_PER_SQUARE_METER'
    );
}
