<?php

namespace Quwi\framework;

abstract class Data_Mapper{
    //protected $pdo;


    public function __construct()
    {
    //$reg = Registry::instance();
    //$this->pdo = $reg->getPdo();
    }

    abstract protected function findAll();
    abstract protected function find(string $id);
    abstract protected function insert();
        /*
        {
        $this->selectstmt()->execute();
        $row = $this->selectstmt()->fetch();
        $this->selectstmt()->closeCursor();
        if (! is_array($row)) {
        return null;
        }
        if (! isset($row['id'])) {
        return null;
        }
        $object = $this->createObject($row);
        return $object;}*/
    

  //  abstract protected function createObject(array $raw): DomainObject;
   // {
       // $obj = $this->doCreateObject($raw);
        //return $obj;
   // }

  //  abstract protected function insert(DomainObject $obj);
    //{
        // $this->doInsert($obj);
  //  }

   // abstract protected function selectStmt();
    //abstract protected function doInsert(DomainObject $object);
   // abstract protected function doCreateObject(array $raw): DomainObject;
}