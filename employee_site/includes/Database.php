<?php

    require('config.php');
    
    class Database {
        //properties
        protected $connection;
        public $table;
        
        //methods
        public function __construct(){
            //things inside construct function happen automatically when new instance of class is created
            $this->connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
            if($this->connection->connect_errno){
                die('Database connection failed: '.mysqli_error());
            }
            $this->table = 'tbl_employees';
        }
        public function query($str){
            $sql = $this->prepQueryString($str);
            //the actual query
            $result = mysqli_query($this->connection, $sql);
            if(!$result){
                die('Query failed. Oh well.');
            }
            return $result;
        }

        public function getAllRecords($tbl){
            $str = 'SELECT * FROM '.$tbl;
            $sql = $this->prepQueryString($str);
            //the actual query
            $result = mysqli_query($this->connection, $sql);
            if(!$result){
                die('Query failed. Oh well.');
            }
            return $result;
        }
        
        public function fetchArray($arr){
            return mysqli_fetch_array($arr);
        }
        
        public function numRows($arr){
            return mysqli_num_rows($arr);
        }
        
        public function insertedId(){
            
        }
        
        protected function prepQueryString($raw){
            //sanitize query strings before we run them
            $escaped = mysqli_real_escape_string($this->connection, $raw);
            return $escaped;
        }
    }
    
    $db = new Database();

?>