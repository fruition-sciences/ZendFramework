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
 * Class for handling the unit one (quantities expressed simply as numbers)
 * @see http://physics.nist.gov/Pubs/SP811/sec07.html
 *
 * @category   Fruition
 * @package    Fruition_Measure
 * @subpackage Fruition_Measure_One
 */
class Fruition_Measure_One extends Zend_Measure_Abstract
{
    const STANDARD = 'PERCENTAGE';

    const PERCENTAGE = 'PERCENTAGE';
    const NODE_PER_VINE  = 'NODE_PER_VINE';
    const SHOOT_PER_VINE = 'SHOOT_PER_VINE';
    const CLUSTER_PER_VINE = 'CLUSTER_PER_VINE';
    const ALCOHOL_BY_VOLUME = 'ALCOHOL_BY_VOLUME';
    const PH = 'PH';
    const ABSORBANCE = 'ABSORBANCE';
    const INDEX = 'INDEX';
    const FRACTION = 'FRACTION';
    const PPM = 'PPM';
    const BERRY_NUMBER_PER_CLUSTER = 'BERRY_NUMBER_PER_CLUSTER';


    /**
     * No calculations available between units except percentage to fraction.
     *
     * @var array
     */
    protected $_units = array(
        'PERCENTAGE'             => array('1',            '%'),
        'NODE_PER_VINE'          => array('1',            'node/vine'),
    	'SHOOT_PER_VINE'         => array('1',            'shoot/vine'),
    	'CLUSTER_PER_VINE'       => array('1',            'cluster/vine'),
        'ALCOHOL_BY_VOLUME'      => array('1',            '%Vol'),
        'PH'                     => array('1',            ''),
    	'ABSORBANCE'             => array('1',            ''),
        'INDEX'                  => array('1',            ''),
        'FRACTION'               => array('100',          ''),
        'PPM'                    => array('1',            'ppm'),
        'STANDARD'               => 'PERCENTAGE',
        'BERRY_NUMBER_PER_CLUSTER'=>array('1',            'berry/cluster')
    );

    /**
     * Override the default constructor for units translation.
     */
    public function __construct($value, $type = null, $locale = null)
    {
        parent::__construct($value, $type, $locale);
        $this->_units['NODE_PER_VINE'][1] = Application::getTranslator()->_('node') . '/' . Application::getTranslator()->_('vine');
        $this->_units['SHOOT_PER_VINE'][1] = Application::getTranslator()->_('shoot') . '/' . Application::getTranslator()->_('vine');
        $this->_units['CLUSTER_PER_VINE'][1] = Application::getTranslator()->_('cluster') . '/' . Application::getTranslator()->_('vine');
        $this->_units['BERRY_NUMBER_PER_CLUSTER'][1] = Application::getTranslator()->_('berry') . '/' . Application::getTranslator()->_('cluster');
    }
}
