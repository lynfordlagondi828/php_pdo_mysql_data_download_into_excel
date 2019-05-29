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

    /**
     * Search Book
     */
    public function search_book($keyword){

        $sql = "SELECT * FROM books WHERE book_name LIKE ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(array($keyword));
        $result = $stmt->fetchAll();
        return $result;
    }

    /**
     * Insert Book
     */
    public function insert_into_book_record($book_name,$book_author,$book_isbn){

        $sql = "INSERT INTO books(book_name,book_author,book_isbn)VALUES(?,?,?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(array($book_name,$book_author,$book_isbn));
        $result = $stmt->fetch();
        return $result;
    }

}
?>