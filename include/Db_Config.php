<?php
  class Db_Config{

    private $conn;

    function __construct(){
    }

    function connect(){

      $this->conn = new PDO("mysql:host=localhost;dbname=php-excel","root","");
      return $this->conn;
    }
  }

?>
