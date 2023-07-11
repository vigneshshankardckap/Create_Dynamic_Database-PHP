<?php

require 'model/model.php';


class controller{

    public $model;

    public function __construct()
    {
        $this->model = new model();
    }

    /**This function used to show the home_page **/
    public function HomePage(){
            require 'views/home.php';
    }

    /**This function used to create dynamically by getting input field **/
    public function create_Db($getDbName){
        if ($getDbName){
                $this->model->insertDbName($getDbName['dbname']);        
        }

        else{
            require "views/database.php";
        }
    }

     /**  create table page and fetch the db names  */
    public function createTable($DbTableData){
        if($DbTableData){
            $dbName = $DbTableData['database'];
            $tableName = $DbTableData['tableName'];
            $count = count($DbTableData['columnName']);
            $this->model->insertTable($dbName,$tableName);

    /** loop the column and insert column names */
        for($i=0;$i<$count;$i++){
            $this->model->addColumn($dbName,$tableName,$DbTableData['columnName'][$i],$DbTableData['dataTypes'][$i]);
        }
            header('location: /');
        }
        else{
            $dbNames= $this->model->fetchDbName();
            require 'views/table.php';
        }

    }

     /**fetch the database names form insertpages */
    public function insertData(){
        $dbNames= $this->model->fetchDbName();
        require "views/insertData.php";
    }

    /** get the tables from what you select */
    public function getTables($Dbname){

        $dbNames= $this->model->fetchDbName();

         $db=$Dbname['database'];

         $tables = $this->model->getTableNames($db);
        
        require "views/insertData.php";


    }
    
}