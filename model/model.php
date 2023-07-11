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
        return $this->dbconnection->query("show databases")->fetchAll(PDO::FETCH_ASSOC);
    }

    /** this function is inserting table names only  */
    public function insertTable($dbName,$tableName){
        $this->dbconnection->query("
        USE $dbName;
        CREATE TABLE $tableName (
        id int auto_increment,
        primary key (id)
        )
        ");
    }

    /** this function is inserting column names only  */
    public function addColumn($dbName,$table,$column,$datatype){
        $this->dbconnection->query("
        USE $dbName;
        ALTER TABLE $table ADD COLUMN $column $datatype;
        ");
    }

    /** select the tabels for what did you select the db name  */
    public function getTableNames($DBList){
        $tableList = $this->dbconnection->query("SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = '$DBList'");
        return $tableList->fetchAll(PDO::FETCH_OBJ);

    }


}