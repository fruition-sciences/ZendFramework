<?php
/**
 * Created on Jun 25, 2013
 * @author Benjamin Soufflet
 *
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
 * Class for handling Volume Per Area conversions
 *
 * @category   Fruition
 * @package    Fruition_Measure
 * @subpackage Fruition_Measure_Volume_Per_Area
 */
class Fruition_Measure_Volume_Per_Area extends Zend_Measure_Abstract
{
    const STANDARD = 'LITER_PER_SQUARE_METER';

    const LITER_PER_SQUARE_METER  = 'LITER_PER_SQUARE_METER';
    const LITER_PER_HECTARE       = 'LITER_PER_HECTARE';
    const HECTOLITER_PER_HECTARE  = 'HECTOLITER_PER_HECTARE';


    /**
     * Calculations
     *
     * @var array
     */
    protected $_units = array(
        'LITER_PER_SQUARE_METER'          => array('1',                'l/m²'),
        'LITER_PER_HECTARE'               => array('0.0001',           'l/ha'),
        'HECTOLITER_PER_HECTARE'          => array('0.01',            'hl/ha'),
        'STANDARD'                        => 'LITER_PER_SQUARE_METER'
    );
}
