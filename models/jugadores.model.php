<?php

class JugadoresModel{

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

    //devuelve todos los jugadores
    public function getAll() {

        // abro la conexion con mysql
        $db = $this->createConexion();

        // enviamos la consulta
        $sentencia = $db->prepare("SELECT * FROM jugadores");    //preparo la sentencia
        $sentencia->execute();        //la ejecuto
        $jugadores = $sentencia->fetchAll(PDO::FETCH_OBJ);    //Oobtenemos la lista de tareas y la guardamos en el arreglo $tareas

        return $jugadores;
    }

    //devuelve un jugador
    public function get($idJugador) {
        // 1) abro la conexion con mysql
        $db = $this->createConexion();

        // 2)enviamos la consulta
        $sentencia = $db->prepare("SELECT * FROM jugadores WHERE id_jugador = ?");    //preparo la sentencia
        $sentencia->execute([$idJugador]);        //la ejecuto
        $jugador = $sentencia->fetch(PDO::FETCH_OBJ);    

        return $jugador;
    }




}
