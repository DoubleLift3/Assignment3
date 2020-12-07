<?php

namespace Quwi\framework;
class StreamsMapper extends Data_Mapper{
    
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
        $connect = $this->makeConnection();
        $data = [];
        $streamsObject = new StreamsMapper;
        $query_string = 'SELECT * FROM streams' ;
        $result = $connect->query($query_string);
        if ($connect->errno){
            trigger_error('SQL error ' . $connect->error, E_USER_ERROR);
            }else if(empty($result)){
                die();
            }
            while ($row = $result->fetch_assoc()){
                $data['streams'] = $row;
            
            }
        $streamsObject = $this->doCreateObject($data['streams']);
        return $streamsObject;
    }

   
    public function insert(){
        
    }
    
    public function doCreateObject( array $StreamsArray){
       $streamsData = $StreamsArray;
       return $streamsData;
    }
}