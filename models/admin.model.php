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

    //ingresa un administrador en la BBDD
    function insert($nombre, $usurname, $password) {
        // 1) abro la conexion con mysql
        $db = $this->modelConection->createConexion();
        // 2)enviamos la consulta
        $sentencia = $db->prepare("INSERT INTO administradores(nombre, nombre_usuario, contraseña) VALUES (?, ?, ?) ");  //los ? son para verificar que el usuario no ingrese codigo malisioso
        $sentencia->execute([$nombre, $usurname, $password]);        //la ejecuto
    }





}