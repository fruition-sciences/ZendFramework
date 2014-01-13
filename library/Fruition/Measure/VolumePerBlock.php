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
 * Class for handling volume per block conversions
 *
 * @category   Fruition
 * @package    Fruition_Measure
 * @subpackage Fruition_Measure_Volume_Per_Block
 */
class Fruition_Measure_Volume_Per_Block extends Zend_Measure_Abstract
{
    const STANDARD = 'LITER_PER_BLOCK';

    const LITER_PER_BLOCK  = 'LITER_PER_BLOCK';
    const HECTOLITER_PER_BLOCK = 'HECTOLITER_PER_BLOCK';
    const GALLON_PER_BLOCK = 'GALLON_PER_BLOCK';
    const CUBIC_METER_PER_BLOCK = 'CUBIC_METER_PER_BLOCK';


    /**
     * Calculations
     *
     * @var array
     */
    protected $_units = array(
        'LITER_PER_BLOCK'         => array('1',                'l/block'),
        'HECTOLITER_PER_BLOCK'    => array('100',              'hl/block'),
        'GALLON_PER_BLOCK'        => array('3.78541178',       'gal/block'),
        'CUBIC_METER_PER_BLOCK'   => array('1000',             'm³/block'),
        'STANDARD'                => 'LITER_PER_BLOCK'
    );
    
    /**
     * Override the default constructor for units translation.
     */
    public function __construct($value, $type = null, $locale = null)
    {
        parent::__construct($value, $type, $locale);
        $this->_units['LITER_PER_BLOCK'][1] = 'l/' . Application::getTranslator()->_('block');
        $this->_units['HECTOLITER_PER_BLOCK'][1] = 'hl/' . Application::getTranslator()->_('block');
        $this->_units['GALLON_PER_BLOCK'][1] = 'gal/' . Application::getTranslator()->_('block');
        $this->_units['CUBIC_METER_PER_BLOCK'][1] = 'm³/' . Application::getTranslator()->_('block');
    }
}
