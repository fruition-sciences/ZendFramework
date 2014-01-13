<?php
/*
 * Created on Jan 31, 2011
 * Author: Benjamin Soufflet
 *
 */

/**
 * Class for helper functions for the measure classes
 *
 * @category   Fruition
 * @package    Fruition_Measure
 * @subpackage Fruition_Measure_Helper
 */
class Fruition_Measure_Helper{
    
    /**
     * Return the unit symbol for the passed unit type.
     * 
     * @param  string      $measureClassName 
     * @param  int         $type   a measure type f.e. Zend_Measure_Length::METER
     */
    public static function getUnitSymbol($measureClassName, $type){
        $zendMeasureObj = new $measureClassName(null, $type);
        $convList = $zendMeasureObj->getConversionList();
        return $convList[$type][1];
    }
}
