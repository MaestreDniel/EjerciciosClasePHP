<?php
    class Database{

        // Para determinar los parámetros de tu base de datos
        private $host = "localhost";
        private $db_name = "Agenda_BBDD_OO";
        private $username = "root";
        private $password = "";
        public $conn;

        // Conectarse a la base de datos
        public function getConnection(){

            try{
               //$this->conn = null;
               $this->conn = new PDO("mysql:host={$this->host};dbname={$this->db_name}", $this->username, $this->password);
               //$this->conn = new PDO("pgsql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            }catch(PDOException $exception){
                echo "Connection error: " . $exception->getMessage();
            }
            return $this->conn;
        }
    }
?>