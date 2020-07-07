<?php

require_once 'models/db.conection.model.php';

class LoginModel extends dbConectionModel {

    //devuelve el admin si existe en la DDBB o vacio si no existe
    public function getAdmin($username) {
        //Hacemos la consulta
        $sql = "SELECT * FROM usuarios WHERE nombre_usuario = ?";
        $query = $this->getConnection()->prepare($sql);    //Preparo la sentencia sql para hacer la consulta
        $query->execute([$username]);        //la ejecuto
        $administrador = $query->fetch(PDO::FETCH_OBJ);    
        return $administrador;
    }

    //ingresa un nuevo usuario a la BBDD
    public function insert($nombre, $nombre_usuario, $contraseña, $tipo, $mascota, $ciudad) {
        //enviamos la consulta
        $sql = "INSERT INTO usuarios(nombre, nombre_usuario, contraseña, tipo, respuesta1, respuesta2) 
                VALUES (?, ?, ?, ?, ?, ?) ";
        $query = $this->getConnection()->prepare($sql);  
        $query->execute([$nombre, $nombre_usuario, $contraseña, $tipo, $mascota, $ciudad]);        
    }

    //devuelve los usuarios y administradores
    public function get() {
        //Hacemos la consulta
        $sql = "SELECT * FROM usuarios";
        $query = $this->getConnection()->prepare($sql);    //Preparo la sentencia sql para hacer la consulta
        $query->execute();        //la ejecuto
        $usuarios = $query->fetchAll(PDO::FETCH_OBJ);    
        return $usuarios;
    }

    //devuelve los tipos de usuarios distintos que existen en la DDBB
    public function types() {
        //Hacemos la consulta
        $sql = "SELECT DISTINCT tipo FROM usuarios";
        $query = $this->getConnection()->prepare($sql);    //Preparo la sentencia sql para hacer la consulta
        $query->execute();        //la ejecuto
        $tipos = $query->fetchAll(PDO::FETCH_OBJ);    
        return $tipos;
    }

    //elimina un usuario de la DDBB
    public function delete($id_usuario){
        //enviamos la consulta
        $sql = "DELETE FROM usuarios WHERE id_usuario = ?";
        $query = $this->getConnection()->prepare($sql);  
        $query->execute([$id_usuario]);        
    }

    //obtengo un usuario pasada por parametro
    public function getId($id_usuario) {
        //Enviamos la consulta
        $sql = "SELECT * FROM usuarios WHERE id_usuario = ?";
        $query = $this->getConnection()->prepare($sql);    //Preparo la sentencia sql para hacer la consulta
        $query->execute([$id_usuario]);        //La ejecuto
        $usuario = $query->fetch(PDO::FETCH_OBJ);    
        return $usuario;
    }

    //Actualiza el tipo de usuario
    public function update($id_usuario, $tipo) {
        //enviamos la consulta
        $sql = "UPDATE usuarios SET tipo = ? WHERE id_usuario = ?";
        $query = $this->getConnection()->prepare($sql);  
        $query->execute([$tipo, $id_usuario]);        
    }
    
    //devuelve el usuario con email $mail
    public function getMail($mail) {
        //Hacemos la consulta
        $sql = "SELECT * FROM usuarios WHERE nombre_usuario = ?";
        $query = $this->getConnection()->prepare($sql);    //Preparo la sentencia sql para hacer la consulta
        $query->execute([$mail]);        //la ejecuto
        $usuario = $query->fetch(PDO::FETCH_OBJ);    
        return $usuario;
    }

    //Actualiza contraseña del usuario
    public function updatePassword($id_usuario, $contraseña) {
        //enviamos la consulta
        $sql = "UPDATE usuarios SET contraseña = ? WHERE id_usuario = ?";
        $query = $this->getConnection()->prepare($sql);  
        $query->execute([$contraseña, $id_usuario]);        
    }
}