<?php
require_once('display.php');

class Timetable extends Display {
   
    public function __construct() {
       parent::__construct();
    }

    public function generateOutput(){
        parent::setOutput('<p>Timetable Object Called</p>');
        parent::generateOutput();
    }

}

?>