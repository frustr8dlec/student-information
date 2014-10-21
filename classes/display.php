<?php
class Display {
    
    private $output;
    
    public function __Construct(){
        $this->output = '';
    }
    
    public function setOutput($data){
        $this->output = $data;
    }
    
    public function getOutput(){
        return $this->output;
    }
    
    public function addToFront($data){
        $this->output = $data . $this->output;
    }
    
    public function addToEnd($data){
        $this->output = $this->output . $data;
    }
    
    public function wrapAround($top, $bottom){
        $this->output = $top . $this->output . $bottom;
    }
    
    public function generateOutput(){
        print $this->output;
    }
}
?>