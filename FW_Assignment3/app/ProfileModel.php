<?php

namespace App\Apps;

use Quwi\framework\Observable_Model;
use Quwi\framework\ProfileMapper;
class ProfileModel extends Observable_Model {

  
    public function findAll() : array{
        
        return [];
        
    }

    public function findRecord(string $id) : array {
        /*
        $connect = $this->makeConnection();
        $data = [];
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
        return $data['users'];*/
        $mapper= new ProfileMapper();
        $test = $mapper->find($id);
        return $test;

        
}
}


