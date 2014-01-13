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
 * Class for handling weight per block conversions
 *
 * @category   Fruition
 * @package    Fruition_Measure
 * @subpackage Fruition_Measure_Weight_Per_Block
 */
class Fruition_Measure_Weight_Per_Block extends Zend_Measure_Abstract
{
    const STANDARD = 'KILOGRAM_PER_BLOCK';

    const KILOGRAM_PER_BLOCK      = 'KILOGRAM_PER_BLOCK';
    const POUND_PER_BLOCK         = 'POUND_PER_BLOCK';


    /**
     * Calculations
     *
     * @var array
     */
    protected $_units = array(
        'KILOGRAM_PER_BLOCK'         => array('1',                'kg/block'),
        'POUND_PER_BLOCK'            => array('0.45359237',       'lb/block'),
        'STANDARD'                   => 'KILOGRAM_PER_BLOCK'
    );
    
    /**
     * Override the default constructor for units translation.
     */
    public function __construct($value, $type = null, $locale = null)
    {
        parent::__construct($value, $type, $locale);
        $this->_units['KILOGRAM_PER_BLOCK'][1] = 'kg/' . Application::getTranslator()->_('block');
        $this->_units['POUND_PER_BLOCK'][1] = 'lb/' . Application::getTranslator()->_('block');
    }
}
