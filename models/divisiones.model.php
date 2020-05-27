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
        //abro la conexion con mysql
        $db = $this->modelConection->createConexion();
        //enviamos la consulta
        $sql = "INSERT INTO divisiones(id_division, nombre_div, edad_limite, limite_jugadores_LBF, excepciones) VALUES (?, ?, ?, ?, ?)";
        $query = $db->prepare($sql);  
        $query->execute([$numeroDivision, $nombreDivision, $edadLimite, $limiteJugadores, $excepciones]);        
    }

    public function update($id_div, $nombre, $edad_lim, $lim_jug_LBF, $excepciones) {
        //abro la conexion con mysql
        $db = $this->modelConection->createConexion();
        //enviamos la consulta
        $sql = "UPDATE divisiones SET nombre_div = ?, edad_limite = ?, limite_jugadores_LBF = ?, excepciones = ? WHERE id_division = $id_div";
        $query = $db->prepare($sql);  
        $query->execute([$nombre, $edad_lim, $lim_jug_LBF, $excepciones]);        
    }

    public function delete($id_div){
        //abro la conexion con mysql
        $db = $this->modelConection->createConexion();
        //enviamos la consulta
        $sql = "DELETE FROM divisiones WHERE id_division = ?";
        $query = $db->prepare($sql);  
        $query->execute([$id_div]);        
    }
}