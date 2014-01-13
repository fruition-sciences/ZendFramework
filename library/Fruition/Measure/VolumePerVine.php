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
 * Class for handling volume per vine conversions
 *
 * @category   Fruition
 * @package    Fruition_Measure
 * @subpackage Fruition_Measure_Volume_Per_Vine
 */
class Fruition_Measure_Volume_Per_Vine extends Zend_Measure_Abstract
{
    const STANDARD = 'LITER_PER_VINE';

    const LITER_PER_VINE  = 'LITER_PER_VINE';
    const GALLON_PER_VINE = 'GALLON_PER_VINE';


    /**
     * Calculations
     *
     * @var array
     */
    protected $_units = array(
        'LITER_PER_VINE'         => array('1',                'l/vine'),
        'GALLON_PER_VINE'        => array('3.78541178',       'gal/vine'),
        'STANDARD'                => 'LITER_PER_VINE'
    );
    
    /**
     * Override the default constructor for units translation.
     */
    public function __construct($value, $type = null, $locale = null)
    {
        parent::__construct($value, $type, $locale);
        $this->_units['LITER_PER_VINE'][1] = 'l/' . Application::getTranslator()->_('vine');
        $this->_units['GALLON_PER_VINE'][1] = 'gal/' . Application::getTranslator()->_('vine');
    }
}
