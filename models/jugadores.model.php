<?php

require_once 'models/db.conection.model.php';

class JugadoresModel{

    private $modelConection;

    public function __construct(){
        $this->modelConection = new dbConectionModel();
    }

    
    //Obtengo todos los jugadores
    public function getAll() {
        //Abro la conexion con mysql
        $db = $this->modelConection->createConexion();
        //Enviamos la consulta
        $sql = "SELECT * FROM jugadores";
        $query = $db->prepare($sql);    //Preparo la sentencia sql para hacer la consulta
        $query->execute();        //La ejecuto
        $jugadores = $query->fetchAll(PDO::FETCH_OBJ);    //Obtenemos la lista de jugadores y la guardamos en el arreglo $jugadores
        return $jugadores;
    }

    //Devuelve un jugador
    public function get($idJugador) {
        //Abro la conexion con mysql
        $db = $this->modelConection->createConexion();
        //Enviamos la consulta
        $sql = "SELECT * FROM jugadores WHERE id_jugador = ?";
        $query = $db->prepare($sql);    //Preparo la sentencia sql para hacer la consulta
        $query->execute([$idJugador]);        //La ejecuto
        $jugador = $query->fetch(PDO::FETCH_OBJ);    
        return $jugador;
    }

    //Devuelve los jugadores de una division dada
    public function getPlayerDivisions($idDivision){
        //1. Abro la conexion con MySQL
        $db = $this->modelConection->createConexion();
        //2. Enviamos la consulta (Se preapra, se envía o ejecuta y se obtiene la respuesta)
        $sql = "SELECT J.id_jugador, J.nombre, D.nombre_div 
                FROM jugadores J
                INNER JOIN divisiones D ON J.id_division = D.id_division
                WHERE J.id_division = $idDivision"; //Consulta que quiero realizar en la Base de Datos
        $query = $db->prepare($sql); //Preparo para hacer la consulta
        $query->execute(); //Envío o ejecuto la consulta
        $jugadorXdivision = $query->fetchAll(PDO::FETCH_OBJ); //Obtengo la respuesta a mi consulta. 
        return $jugadorXdivision;
    }

    //ingresa un nuevo jugador a la BBDD
    public function insert($dni, $nombre, $edad, $fechaNacimiento, $numeroCarnet, $puesto, $clubOrigen, $telefono, $foto, $categoria) {
        // 1) abro la conexion con mysql
        $db = $this->modelConection->createConexion();
        // 2)enviamos la consulta
        $sql = "INSERT INTO jugadores(id_jugador, nombre, edad, fecha_nac, carnet, puesto, club_origen, telefono, id_division, imagen) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?) ";
        $query = $db->prepare($sql);  
        $query->execute([$dni, $nombre, $edad, $fechaNacimiento, $numeroCarnet, $puesto, $clubOrigen, $telefono, $foto, $categoria]);        
    }

//actualiza los datos de un jugador  
    public function update($dni, $nombre, $edad, $fechaNacimiento, $numeroCarnet, $puesto, $clubOrigen, $telefono, $foto, $categoria) {
        // 1) abro la conexion con mysql
        $db = $this->modelConection->createConexion();
        // 2)enviamos la consulta
        $sql = "UPDATE jugadores SET nombre = ?, edad = ?, fecha_nac = ?, carnet = ?, puesto = ?, club_origen = ?, telefono = ?, id_division = ?, imagen = ? WHERE id_jugador = $dni";
        $query = $db->prepare($sql);  
        $query->execute([$nombre, $edad, $fechaNacimiento, $numeroCarnet, $puesto, $clubOrigen, $telefono, $foto, $categoria]);        
    }

    public function delete($dni){
       // 1) abro la conexion con mysql
       $db = $this->modelConection->createConexion();
       // 2)enviamos la consulta
       $sql = "DELETE FROM jugadores WHERE id_jugador = ?";
       $query = $db->prepare($sql);  
       $query->execute([$dni]);        

    }
}