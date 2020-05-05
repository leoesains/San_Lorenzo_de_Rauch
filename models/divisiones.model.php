<?php

class DivisionesModel{

    //Crea la conexión a la DDBB
    private function createConexion() {
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

    //Obtengo todas las divisiones
    public function getAll() {
        //Me conecto con la DDBB
        $db = $this->createConexion();
        //Hacemos la consulta
        $sql = "SELECT * FROM divisiones";
        $query = $db->prepare($sql);    //Preparo la sentencia sql para hacer la consulta
        $query->execute();        //la ejecuto
        $divisiones = $query->fetchAll(PDO::FETCH_OBJ);    //Guardo todas las divisiones en $divisiones (arreglo)
        return $divisiones;
    }
}