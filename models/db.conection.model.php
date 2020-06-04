<?php
    
class dbConectionModel {

    private $db;

    public function __construct(){
        //hacemos la conexión con a BBDD
        $this->db = $this->createConexion();
    }

    public function getConnection() {
        return $this->db;
    }

    //Crea la conexión a la DDBB
    public function createConexion() {
        $host = 'localhost';
        $userName = "root";
        $password = '';
        $dataBase = 'db_san_lorenzo_rauch';
        try {
            $pdo = new PDO("mysql:host=$host;dbname=$dataBase;charset=utf8", $userName, $password);
        } catch (Exception  $e){
            var_dump($e);
        }
        return $pdo;
    }
}
    