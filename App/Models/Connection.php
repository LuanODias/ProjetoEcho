<?php

namespace App\Models;

abstract class Connection{

    private $dbname = 'mysql:host=echo.cioy4joo3i3i.us-east-1.rds.amazonaws.com:3306;dbname=echo';
    private $user = 'enzo';
    private $pass = 'senha-banco';

    public $login_id;

    protected function connect(){
        try{
            $conn = new \PDO($this->dbname, $this->user, $this->pass);
            $conn->exec("set names utf8");
            return $conn;
        }catch(\PDOException $erro){
            echo $erro->getMessage();
        }
    }
}