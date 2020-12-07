<?php 
namespace Quwi\framework;
  abstract class Model{
   
      protected $cached_json = [];
      protected $sqli = null;
        
        /**
         * Creates a database connection
         */

         

    /*public function loadData(string $fromFile) : array{
        $filename = basename($fromFile. 'json');
        if(!isset($this->cached_json[$filename]) || empty($this->cached_json[filename])){
          $json_file=file_get_contents($fromFile);
          $this->cached_json[$filename] = json_decode($json_file, true);  
        }
        return $this->cached_json[$filename];
    } */
    abstract public function findAll() : array;

    abstract public function findRecord(string $id) : array;

    
   
}