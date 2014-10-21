<?php
require_once('display.php');

class QRCode extends Display {
   
    public function __construct() {
       parent::__construct();
    }

    public function generateOutput(){
        parent::setOutput('<p>QRCode Object Called</p>');
        parent::generateOutput();
    }

}
?>