<?php
class Model {
    public static $conn = NULL;

    public function __construct() {
        if (self::$conn == NULL) {
            self::$conn  = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);            
        } else {
            return self::$conn;
        }
    }
    
    public function query($sql) {
        $data = mysqli_query(self::$conn, $sql);
        return $data;
    }

    public function select($sql) {
        $data = $this->query($sql);
        
        $rows = [];
        while ($row = mysqli_fetch_assoc($data)) {
            $rows[] = $row;
        }
        return $rows;
    }
}