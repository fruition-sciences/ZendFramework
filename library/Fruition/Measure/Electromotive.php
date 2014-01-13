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
 * Class for handling electromotive force conversions
 *
 * @category   Fruition
 * @package    Fruition_Measure
 * @subpackage Fruition_Measure_Electromotive
 */
class Fruition_Measure_Electromotive extends Zend_Measure_Abstract
{
    const STANDARD = 'VOLT';

    const VOLT                     = 'VOLT';
    const MILLIVOLT                = 'MILLIVOLT';


    /**
     * Calculations for all electromotive force units
     *
     * @var array
     */
    protected $_units = array(
        'VOLT'             => array('1',                'V'),
        'MILLIVOLT'        => array('0.001',            'mV'),
        'STANDARD'           => 'VOLT'
    );
}
