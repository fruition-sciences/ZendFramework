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


    /**
     * Calculations for all electrical resistance units
     *
     * @var array
     */
    protected $_units = array(
        'WATT_PER_SQUARE_METER'           => array('1',                'W/m²'),
        'STANDARD'                        => 'WATT_PER_SQUARE_METER'
    );
}
