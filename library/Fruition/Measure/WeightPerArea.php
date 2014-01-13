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
 * Class for handling weight per area conversions
 *
 * @category   Fruition
 * @package    Fruition_Measure
 * @subpackage Fruition_Measure_Weight_Per_Area
 */
class Fruition_Measure_Weight_Per_Area extends Zend_Measure_Abstract
{
    const STANDARD = 'GRAM_PER_SQUARE_METER';

    const GRAM_PER_SQUARE_METER  = 'GRAM_PER_SQUARE_METER';
    const KILOGRAM_PER_HECTARE = 'KILOGRAM_PER_HECTARE';
    const TONNE_PER_HECTARE = 'TONNE_PER_HECTARE';
    const TON_US_PER_ACRE = 'TON_US_PER_ACRE';
    const OUNCE_PER_ACRE = 'OUNCE_PER_ACRE';
    const POUND_PER_ACRE = 'POUND_PER_ACRE';


    /**
     * Calculations
     *
     * @var array
     */
    protected $_units = array(
        'GRAM_PER_SQUARE_METER'           => array('1',                  'g/m²'),
        'KILOGRAM_PER_HECTARE'            => array('0.1',                'kg/ha'),
        'TONNE_PER_HECTARE'               => array('100',                't/ha'),
        'TON_US_PER_ACRE'                 => array('224.1702',           't/A'),
        'OUNCE_PER_ACRE'                  => array('0.007005',           'oz/A'),
        'POUND_PER_ACRE'                  => array('0.11208',           'lb/A'),
        'STANDARD'                        => 'GRAM_PER_SQUARE_METER'
    );
}
