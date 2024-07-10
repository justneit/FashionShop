<?php

class DB{
    public $con;
    protected $servername = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $port = "3333";
    protected $dbname = "shop";
    function __construct(){
        $this->con =  mysqli_connect($this->servername, $this->username,  $this->password, $this->dbname, $this->port);
        mysqli_select_db($this->con, $this->dbname);
        mysqli_query($this->con, "SET NAMES 'utf8'");
    }
}
?>