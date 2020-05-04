<?php

class DivisionesModel{

    //crea la coneccion a la BBDD
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

    //devuelve todas las divisiones
    public function getAll() {

        // abro la conexion con mysql
        $db = $this->createConexion();

        // enviamos la consulta
        $sentencia = $db->prepare("SELECT * FROM divisiones");    //preparo la sentencia
        $sentencia->execute();        //la ejecuto
        $divisiones = $sentencia->fetchAll(PDO::FETCH_OBJ);    //Oobtenemos la lista de divisiones y la guardamos en el arreglo $divisiones

        return $divisiones;
    }

}