<?php
/*
 * Created on Jan 31, 2011
 * Author: Benjamin Soufflet
 *
 */

/**
 * Implement needed classes
 */
require_once 'Zend/Measure/Abstract.php';
require_once 'Zend/Locale.php';

/**
 * Class for handling electrical resistance conversions
 *
 * @category   Fruition
 * @package    Fruition_Measure
 * @subpackage Fruition_Measure_Resistance
 */
class Fruition_Measure_Resistance extends Zend_Measure_Abstract
{
    const STANDARD = 'OHM';

    const OHM                     = 'OHM';
    const MILLIOHM                = 'MILLIOHM';


    /**
     * Calculations for all electrical resistance units
     *
     * @var array
     */
    protected $_units = array(
        'OHM'             => array('1',                'Ω'),
        'MILLIOHM'        => array('0.001',            'mΩ'),
        'STANDARD'           => 'OHM'
    );
}