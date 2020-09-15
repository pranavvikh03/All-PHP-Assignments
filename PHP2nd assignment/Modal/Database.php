<?php
    namespace Modal\DBdata;
    class Database
    {
        private $host;
        private $dbname;
        private $username;
        private $password;
    
        public $conn;
    
        public function __construct() {
            $this->host = servername;
            $this->dbname = dbname;
            $this->username = username;
            $this->password = password;
        }
    
        public function connect() {
            $this->conn = null;
    
            try {
                $this->conn = new \PDO(
                    "mysql:host={$this->host};dbname={$this->dbname}",
                    $this->username,
                    $this->password
                );
            } catch(\PDOException $exp) {
                echo "Connection Error: " . $exp->getMessage();
            }
    
            return $this->conn;
        }
    
    }
?>