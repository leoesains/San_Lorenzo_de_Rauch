<?php

require_once 'models/db.conection.model.php';

class AdminModel extends dbConectionModel {

    //devuelve el admin si existe en la DDBB o vacio si no existe
    public function getAdmin($username) {
        //Hacemos la consulta
        $sql = "SELECT * FROM administradores WHERE nombre_usuario = ?";
        $query = $this->getConnection()->prepare($sql);    //Preparo la sentencia sql para hacer la consulta
        $query->execute([$username]);        //la ejecuto
        $administrador = $query->fetch(PDO::FETCH_OBJ);    
        return $administrador;
    }

    //ingresa un nuevo usuario a la BBDD
    public function insert($nombre, $nombre_usuario, $contraseña, $tipo) {
        //enviamos la consulta
        $sql = "INSERT INTO administradores(nombre, nombre_usuario, contraseña, tipo) 
                VALUES (?, ?, ?, ?) ";
        $query = $this->getConnection()->prepare($sql);  
        $query->execute([$nombre, $nombre_usuario, $contraseña, $tipo]);        
    }
}