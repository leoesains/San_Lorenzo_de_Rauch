<?php

require_once 'models/db.conection.model.php';

class AdminModel{

    private $modelConection;

    public function __construct(){
        $this->modelConection = new dbConectionModel();
    }

    //devuelve el admin si existe en la DDBB o vacio si no existe
    public function getAdmin($username) {
        //Me conecto con la DDBB
        $db = $this->modelConection->createConexion();
        //Hacemos la consulta
        $sql = "SELECT * FROM administradores WHERE nombre_usuario = ?";
        $query = $db->prepare($sql);    //Preparo la sentencia sql para hacer la consulta
        $query->execute([$username]);        //la ejecuto
        $administrador = $query->fetch(PDO::FETCH_OBJ);    
        return $administrador;
    }

}