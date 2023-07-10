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

     /** redirect to  create table page and fetch the db names   */
    public function showTable(){
        
        $dbNames = $this->model->fetchDbName();
       
        require "views/table.php";

    }


    public function createTable($getDbName){

        var_dump($dbNames);
        if($getDbName){
            $dbName = $getDbName['databasename'];
            $tableName = $getDbName['tableName'];
            $this->model->insertTable($dbName,$tableName);
 
            require 'views/table.php';

        
        }
    }
    
}