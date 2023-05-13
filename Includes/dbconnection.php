<?php 
//initiate the class of database and connectivity
class Dbconnect 
{ 
  private $_localhost = 'localhost'; 
  private $_user = 'root'; 
  private $_password = ''; 
  private $_dbname = 'selten_event_app'; 
   
  protected $connection; 
   public function __construct() { 
      if(!isset($this-> connection)) {            
         $this->connection = new mysqli($this->_localhost , $this->_user , $this->_password , $this->_dbname);    
      }  
   } 
} 

?>