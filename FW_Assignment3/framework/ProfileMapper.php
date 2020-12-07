<?php
namespace Quwi\framework;
class ProfileMapper extends Data_Mapper{
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
         
    public function find(string $id) {
        $connect = $this->makeConnection();
        $profile = [];
        $profileObject = new ProfileMapper;
        $query_string = "SELECT Userpass FROM users WHERE Userpass='$id' ";      
        $result = $connect->query($query_string);
        if ($connect->errno){
            trigger_error('SQL error ' . $connect->error, E_USER_ERROR);
            }else if(empty($result)){
                die();
            }
            while ($row = $result->fetch_assoc()){
                $data['users'] = $row;
            
            }
        $profileObject = $this->doCreateObject($data['users']);
        return $profileObject;
    }

    public function findAll(){

    }

    public function insert(){
        
    }

    
    public function doCreateObject( array $CoursesArray){
       $coursesData = $CoursesArray;
       return $coursesData;
    }
}