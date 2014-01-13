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
 * Class for handling the unit Mass Fraction
 * @see http://physics.nist.gov/Pubs/SP811/sec07.html
 *
 * @category   Fruition
 * @package    Fruition_Measure
 * @subpackage Fruition_Measure_Mass_Fraction
 */
class Fruition_Measure_Mass_Fraction extends Zend_Measure_Abstract
{
    const STANDARD = 'MASS_FRACTION';

    const MASS_FRACTION = 'MASS_FRACTION';
    const MASS_PERCENTAGE = 'MASS_PERCENTAGE';
    const NANOGRAM_PER_KILOGRAM  = 'NANOGRAM_PER_KILOGRAM';
    const BRIX = 'BRIX';


    /**
     * No calculations available between units.
     *
     * @var array
     */
    protected $_units = array(
        'MASS_FRACTION'          => array('1',                 ''),
        'MASS_PERCENTAGE'        => array('0.1',                '%m'),
        'NANOGRAM_PER_KILOGRAM'  => array('0.000000000001',   'ng/kg'),
        'BRIX'                   => array('0.01',             'Brix'),
        'STANDARD'               => 'MASS_FRACTION'
    );
}
