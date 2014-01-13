<?php
/*
 * Created on May 27, 2013
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
 * Class for handling Stomatal conductance conversions
 *
 * @category   Fruition
 * @package    Fruition_Measure
 * @subpackage Fruition_Measure_Conductance
 */
class Fruition_Measure_Conductance extends Zend_Measure_Abstract
{
    const STANDARD = 'MOL_PER_SQUARE_METER_SECOND';

    const MOL_PER_SQUARE_METER_SECOND  = 'MOL_PER_SQUARE_METER_SECOND';
    const MMOL_PER_SQUARE_METER_SECOND = 'MMOL_PER_SQUARE_METER_SECOND';


    /**
     * Calculations for all electrical resistance units
     *
     * @var array
     */
    protected $_units = array(
        'MOL_PER_SQUARE_METER_SECOND'     => array('1',                'mol/m² s'),
        'MMOL_PER_SQUARE_METER_SECOND'    => array('0.001',            'mmol/m² s'),
        'STANDARD'                        => 'MOL_PER_SQUARE_METER_SECOND'
    );
}
