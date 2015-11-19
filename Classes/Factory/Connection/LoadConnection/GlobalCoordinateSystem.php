<?php

namespace Classes\Factory\Connection\LoadConnection;

/**
 * Description of LoadConnection
 *
 * @author Noskov Alexey
 */
class GlobalCoordinateSystem extends \Classes\Factory\Connection\Connection{
    
    /*
     * Constructor 
     */
     function __construct() {
         // Set default connection
         $this->connection = NULL;
    }
    
    public function get() {
        return $this->connection;
    }
}