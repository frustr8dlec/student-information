<?php
class DataStore {
    
    private $server;
    private $database;
    private $user;
    private $password;
    private $db;
    
    public function __Construct(){
        $this->server = '';
        $this->database = '';
        $this->user = '';
        $this->password = '';
        $this->db = 1;
        $this->connectDatabase();
    }
    
    private function connectDatabase(){
        
    }
   
    private function disconnectDatabase(){
        
    }
    
    public function getTimeTable(){
        $data = array();
        
        return $data;         
    }

    public function getCollegeNews(){
        $data = array();
        
        return $data;         
    }
    
    public function getQRCode(){
        $data = array();
        
        return $data;         
    }
    
    public function getImpDates(){
        $data = array();
        
        return $data;         
    }
    
    public function getCountDown(){
        $data = array();
        
        return $data;         
    }
    
}
?>