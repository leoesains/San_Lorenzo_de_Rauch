<?php

require_once 'models/db.conection.model.php';

class AdminModel extends dbConectionModel {

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
    public function insert($nombre, $nombre_usuario, $contraseña, $tipo) {
        //enviamos la consulta
        $sql = "INSERT INTO usuarios(nombre, nombre_usuario, contraseña, tipo) 
                VALUES (?, ?, ?, ?) ";
        $query = $this->getConnection()->prepare($sql);  
        $query->execute([$nombre, $nombre_usuario, $contraseña, $tipo]);        
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
        $sql = "DELETE FROM usuarios WHERE id_administrador = ?";
        $query = $this->getConnection()->prepare($sql);  
        $query->execute([$id_usuario]);        
    }

    //obtengo una division pasada por parametro
    public function getId($idUsuario) {
        
        //Enviamos la consulta
        $sql = "SELECT * FROM usuarios WHERE id_administrador = ?";
        $query = $this->getConnection()->prepare($sql);    //Preparo la sentencia sql para hacer la consulta
        $query->execute([$idUsuario]);        //La ejecuto
        $usuario = $query->fetch(PDO::FETCH_OBJ);    
        return $usuario;
    }

    public function update($id_administrador, $tipo) {
        
        //enviamos la consulta
        $sql = "UPDATE usuarios SET tipo = ? WHERE id_administrador = $id_administrador";
        $query = $this->getConnection()->prepare($sql);  
        $query->execute([$tipo]);        
    } 
}