<?php
require_once('display.php');

class CollegeNews extends Display {
   
    public function __construct() {
       parent::__construct();
    }
    
    public function generateOutput(){
        parent::setOutput('<p>College News Object Called</p>');
        parent::generateOutput();
    }
}
?>