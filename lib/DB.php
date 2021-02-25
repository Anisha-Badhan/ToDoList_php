<?php


class DB
{
    public $serverName = "localhost";
    public $dbUser = "root";
    public $dbPass = "password";
    public $dbName = "practice_test";
    protected $connection;

    public function __construct(){
        $this->connect();
    }

    public function connect()
    {
        $this->connection = new mysqli($this->serverName, $this->dbUser, $this->dbPass, $this->dbName);
        if($this->connection->connect_error){
            return false;
        }
        return true;
    }

    public function insertData($task){
        $query = "INSERT INTO tasks (task) VALUES ('${task}')";
        if($this->connection-> query($query) == false){
            return false;
        }
        return true;
    }

    public function __destruct(){
        $this->connection->close();
    }
}