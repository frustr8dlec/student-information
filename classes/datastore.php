<?php
class DataStore {
    
    private $server;   // Server name
    private $database; // Database name
    private $user;     // Database user name
    private $password; // Password for database user 
    private $db;       // Database connection object
    
    public function __Construct(){
        $this->server = '';
        $this->database = '';
        $this->user = '';
        $this->password = '';
        $this->db = 1;
        $this->connectDatabase();
    }
    
    private function connectDatabase(){
        /*  New database code to be implemented soon
        try {
            $this->db = new PDO("mysql:host=$this->server;dbname=$this->db", $this->user, $this->password);
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        */
    }
   
    private function disconnectDatabase(){
      /* New databse code to be be implemented soon
        $db = null;
      */
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
