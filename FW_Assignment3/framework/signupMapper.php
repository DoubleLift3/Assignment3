<?php

namespace Quwi\framework;
class signupMapper extends Data_Mapper{
    
    protected $sqli = null;
    protected $host = 'localhost';
    protected $user = 'root';
    protected $password = '';
    protected $db = 'frameworks';

    public function __construct(){
        //parent::__construct();
        //$this->selectStmt = $this->pdo-prepare("SELECT * FROM courses");
    }

    public function makeConnection(){
        $host = 'localhost';
        $user = 'root';
        $password = '';
        $db = 'frameworks';

        $sqli = new \mysqli($host, $user, $password, $db);
          if($sqli->connect_error){
              die("Connection Failed: " . $sqli->connect_error);
          }
          return $sqli;
        }
         
    public function find(string $id) {
       
    }

    public function findAll(){
      
    }

   
    
    public function doCreateObject( array $StreamsArray){
     
    }

    public function insert(){
       
        $pswd = $_POST['password'];
        //hash password
        $hashedPassword = password_hash($pswd, PASSWORD_DEFAULT);
      
        $connect = $this->makeConnection();
        $query_string = "INSERT INTO users(Username, email, Userpass) VALUE ('$_POST[formFullName]','$_POST[email]', '$pswd' )" ;
        $result = $connect->query($query_string);
        if ($connect->errno){
            trigger_error('SQL error ' . $connect->error, E_USER_ERROR);
        }
      }
    
}