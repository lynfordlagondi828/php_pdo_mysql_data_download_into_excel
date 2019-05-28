<?php
class Db_Function{

    private $conn;

    function __construct(){
        
        require_once 'Db_Config.php';
        $database = new Db_Config();
        $this->conn = $database->connect();
    }

    /**
     * Display all records
     */
    public function get_all_records(){

        $sql = "SELECT * FROM books";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }
}
?>