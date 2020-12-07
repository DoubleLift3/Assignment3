<?php 

namespace App\Apps;

use Quwi\framework\Observable_Model;
use Quwi\framework\StreamsMapper;
class StreamsModel extends Observable_Model{

    public function findAll() : array{
        /*
        $connect = $this->makeConnection();
        $streams = [];
        $query_string = 'SELECT * FROM streams' ;
        $result = $connect->query($query_string);
        if ($connect->errno){
            trigger_error('SQL error ' . $connect->error, E_USER_ERROR);
        }
        while ($row = $result->fetch_assoc()){
            $streams['courses'] = $row;
        }
        return $streams;*/
        $mapper= new StreamsMapper();
        $test = $mapper->findAll();
        return $test;

        
    }

    public function findRecord(string $id) : array {
        return [];
    }
}