<?php

class connection{
    
    public $dbconnection;

    public function __construct()
    {
        try{
            $this->dbconnection = new PDO('mysql:host=localhost','admin','welcome');
        }
        catch (exception $e){;
            die("connnection error".$e->getMessage());
        }
    }
}

class model extends connection{

    /**inserting the db name */
    public function insertDbName($name){

        $this->dbconnection->query("CREATE DATABASE $name");

        header('location:/');
    }

    /**fetch the db name */
    public function fetchDbName(){
        return $this->dbconnection->query("SHOW DATABASES")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insertTable($dbName,$tableName){
        // var_dump($dbName,$tableName);

    }

}