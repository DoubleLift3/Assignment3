<?php
namespace Quwi\framework;
class CoursesMapper extends Data_Mapper{
    private $selectStmt;
    
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
         
    public function findAll() {
        $connect = $this->makeConnection();
        $courses = [];
        $coursesObject = new CoursesMapper;
        $query_string = 'SELECT * FROM courses' ;
        $result = $connect->query($query_string);
        if ($connect->errno){
            trigger_error('SQL error ' . $connect->error, E_USER_ERROR);
        }
        while ($row = $result->fetch_assoc()){
            $courses['courses'] = $row;
        }
        $coursesObject = $this->doCreateObject($courses['courses']);
        return $coursesObject;
    }

    public function find(string $id){

    }

    public function insert(){
        
    }

   /*public function doInsert($PlaceHolder){

    }*/

    
    public function doCreateObject( array $CoursesArray){
       $coursesData = $CoursesArray;
       return $coursesData;
    }
}