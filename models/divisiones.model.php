<?php

require_once 'models/db.conection.model.php';

class DivisionesModel{

    private $modelConection;

    public function __construct(){
        $this->modelConection = new dbConectionModel();
    }

    
    //Obtengo todas las divisiones
    public function getAll() {
        //Me conecto con la DDBB
        //$db = $this->createConexion();
        $db = $this->modelConection->createConexion();
        //Hacemos la consulta
        $sql = "SELECT * FROM divisiones";
        $query = $db->prepare($sql);    //Preparo la sentencia sql para hacer la consulta
        $query->execute();        //la ejecuto
        $divisiones = $query->fetchAll(PDO::FETCH_OBJ);    //Guardo todas las divisiones en $divisiones (arreglo)
        return $divisiones;
    }

    //obtengo una division pasada por parametro
    public function get($idDivision) {
        //Abro la conexion con mysql
        $db = $this->modelConection->createConexion();
        //Enviamos la consulta
        $sql = "SELECT * FROM divisiones WHERE id_division = ?";
        $query = $db->prepare($sql);    //Preparo la sentencia sql para hacer la consulta
        $query->execute([$idDivision]);        //La ejecuto
        $division = $query->fetch(PDO::FETCH_OBJ);    
        return $division;
    }

    //ingresa una nueva division a la BBDD
    function insert($numeroDivision, $nombreDivision, $edadLimite, $limiteJugadores, $excepciones) {
        // 1) abro la conexion con mysql
        $db = $this->modelConection->createConexion();
        // 2)enviamos la consulta
        $sentencia = $db->prepare("INSERT INTO divisiones(id_division, nombre_div, edad_limite, limite_jugadores_LBF, excepciones) VALUES (?, ?, ?, ?, ?)");  
        $sentencia->execute([$numeroDivision, $nombreDivision, $edadLimite, $limiteJugadores, $excepciones]);        
    }
}