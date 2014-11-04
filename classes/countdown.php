<?php
require_once('display.php');
require_once('datastore.php');

class Countdown extends Display {
   
    private $db;
   
    public function __construct() {
        parent::__construct();
        
        $this->db = new DataStore();
    }
    
    public function generateOutput(){
        parent::setOutput('Countdown Object Called');
        parent::generateOutput();
    }

}
?>