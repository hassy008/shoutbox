<?php 
  include_once "../lib/database.php";  
    
  class shout{
        private $db;
        public function __construct(){
          $this->db=new Database();  
        }
    }
?>