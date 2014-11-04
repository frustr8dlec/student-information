<?php
require_once('display.php');
require_once('datastore.php');

class Timetable extends Display {
   
    private $db;
   
    public function __construct() {
        parent::__construct();
        
        $this->db = new DataStore();
    }

    public function generateOutput(){
        parent::setOutput('<p>Timetable Object Called</p>');
        parent::generateOutput();
    }

}

?>