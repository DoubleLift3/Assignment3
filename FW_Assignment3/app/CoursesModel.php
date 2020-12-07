<?php 

namespace App\Apps;
use Quwi\framework\Observable_Model;
use Quwi\framework\CoursesMapper;

class CoursesModel extends Observable_Model{

    public function findAll() : array{
             //$sqli = Database::getDbConnection();
             /*
             $connect = $this->makeConnection();
             $courses = [];
             $query_string = 'SELECT * FROM courses' ;
             $result = $connect->query($query_string);
             if ($connect->errno){
                 trigger_error('SQL error ' . $connect->error, E_USER_ERROR);
             }
             while ($row = $result->fetch_assoc()){
                 $courses['courses'] = $row;
             }
             return $courses;
             */
             $mapper= new CoursesMapper();
             $test = $mapper->findAll();
             return $test;
        
    }

    public function findRecord(string $id) : array {
        return [];
    }
    
}