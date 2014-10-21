<?php
require_once('display.php');

class Countdown extends Display {
   
    public function __construct() {
       parent::__construct();
    }
    
    public function generateOutput(){
        parent::setOutput('Countdown Object Called');
        parent::generateOutput();
    }

}
?>