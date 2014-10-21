<?php
require_once('display.php');

class ImportantDates extends Display {
   
    public function __construct() {
       parent::__construct();
    }
    
    public function generateOutput(){
        parent::setOutput('<p>Important Dates Object Called</p>');
        parent::generateOutput();
    }
}
?>