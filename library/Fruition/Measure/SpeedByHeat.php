<?php
/*
 * Created on Feb 26, 2013
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
 * Class for handling Speed by Heat conversions
 *
 * @category   Fruition
 * @package    Fruition_Measure
 * @subpackage Fruition_Measure_SpeedByHeat
 */
class Fruition_Measure_SpeedByHeat extends Zend_Measure_Abstract
{
    const STANDARD = 'METER_PER_GROWING_DEGREE_DAY_CELSIUS';

    const METER_PER_GROWING_DEGREE_DAY_CELSIUS           = 'METER_PER_GROWING_DEGREE_DAY_CELSIUS';
    const METER_PER_GROWING_DEGREE_DAY_FAHRENHEIT        = 'METER_PER_GROWING_DEGREE_DAY_FAHRENHEIT';
    const CENTIMETER_PER_GROWING_DEGREE_DAY_CELSIUS      = 'CENTIMETER_PER_GROWING_DEGREE_DAY_CELSIUS';
    const CENTIMETER_PER_GROWING_DEGREE_DAY_FAHRENHEIT   = 'CENTIMETER_PER_GROWING_DEGREE_DAY_FAHRENHEIT';
    const INCH_PER_GROWING_DEGREE_DAY_CELSIUS            = 'INCH_PER_GROWING_DEGREE_DAY_CELSIUS';
    const INCH_PER_GROWING_DEGREE_DAY_FAHRENHEIT         = 'INCH_PER_GROWING_DEGREE_DAY_FAHRENHEIT';

    /**
     * Calculations for all units
     *
     * @var array
     */
    protected $_units = array(
        'METER_PER_GROWING_DEGREE_DAY_CELSIUS'         => array('1',                                         'm/TT/m2'),
        'METER_PER_GROWING_DEGREE_DAY_FAHRENHEIT'      => array(array('' => '1', '/' => '0.5555555'),        'm/TTF/m2'),
        'CENTIMETER_PER_GROWING_DEGREE_DAY_CELSIUS'    => array('0.01',                                      'cm/TT/m2'),
        'CENTIMETER_PER_GROWING_DEGREE_DAY_FAHRENHEIT' => array(array('' => '0.01', '/' => '0.5555555'),     'cm/TTF/m2'),
        'INCH_PER_GROWING_DEGREE_DAY_CELSIUS'          => array('0.0254',                                    'in/TT/m2'),
        'INCH_PER_GROWING_DEGREE_DAY_FAHRENHEIT'       => array(array('' => '0.0254', '/' => '0.5555555'),   'in/TTF/m2'),
        'STANDARD'                          => 'METER_PER_GROWING_DEGREE_DAY_CELSIUS'
    );
}
