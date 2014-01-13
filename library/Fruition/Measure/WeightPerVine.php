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
 * Class for handling weight per vine conversions
 *
 * @category   Fruition
 * @package    Fruition_Measure
 * @subpackage Fruition_Measure_Weight_Per_Vine
 */
class Fruition_Measure_Weight_Per_Vine extends Zend_Measure_Abstract
{
    const STANDARD = 'KILOGRAM_PER_VINE';

    const KILOGRAM_PER_VINE      = 'KILOGRAM_PER_VINE';
    const POUND_PER_VINE         = 'POUND_PER_VINE';
    const GRAM_PER_VINE          = 'GRAM_PER_VINE';
    const OUNCE_PER_VINE         = 'OUNCE_PER_VINE';


    /**
     * Calculations
     *
     * @var array
     */
    protected $_units = array(
        'KILOGRAM_PER_VINE'         => array('1',                'kg/vine'),
        'GRAM_PER_VINE'             => array('0.001',            'g/vine'),
        'POUND_PER_VINE'            => array('0.45359237',       'lb/vine'),
        'OUNCE_PER_VINE'            => array('0.0283495231',     'oz/vine'),
        'STANDARD'                  => 'KILOGRAM_PER_VINE'
    );
    
    /**
     * Override the default constructor for units translation.
     */
    public function __construct($value, $type = null, $locale = null)
    {
        parent::__construct($value, $type, $locale);
        $this->_units['KILOGRAM_PER_VINE'][1] = 'kg/' . Application::getTranslator()->_('vine');
        $this->_units['GRAM_PER_VINE'][1] = 'g/' . Application::getTranslator()->_('vine');
        $this->_units['POUND_PER_VINE'][1] = 'lb/' . Application::getTranslator()->_('vine');
        $this->_units['OUNCE_PER_VINE'][1] = 'oz/' . Application::getTranslator()->_('vine');
    }
}
