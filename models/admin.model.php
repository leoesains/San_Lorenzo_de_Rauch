<?php

require_once 'models/db.conection.model.php';

class AdminModel{

    private $modelConection;

    public function __construct(){
        $this->modelConection = new dbConectionModel();
    }

    //devuelve todos los administradores de la tabla administradores
    public function getAllAdmin() {
        //Me conecto con la DDBB
        $db = $this->modelConection->createConexion();
        //Hacemos la consulta
        $sql = "SELECT * FROM administradores";
        $query = $db->prepare($sql);    //Preparo la sentencia sql para hacer la consulta
        $query->execute();        //la ejecuto
        $administradores = $query->fetchAll(PDO::FETCH_OBJ);    
        return $administradores;
    }

}