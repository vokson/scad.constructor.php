<?php


namespace Classes\Utils\AbstractInstance;

/**
 * Class of point
 *
 * @author Noskov Alexey
 */
class Line {
    /*
     * Points of begin and end
     * 
     * @param Classes\Utils\AbstractInstance\Point $point1
     * @param Classes\Utils\AbstractInstance\Point $point2
     */
    public $point1, $point2;
    
    public function __construct($point1, $point2) {
        $this->point1 = $point1;
        $this->point2 = $point2;
    }
}
