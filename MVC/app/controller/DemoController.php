<?php 

/**
 * Text class
 */
class DemoController extends DController
{
    public function __construct() {
        // parent::__construct();
    }
    public function Hello($param)
    {
        echo"Hello form method $param ";   
    }
}


?>