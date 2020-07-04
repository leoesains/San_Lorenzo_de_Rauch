<?php

require_once 'models/db.conection.model.php';

class ComentariosModel extends dbConectionModel {

    //ingresa un nuevo comentario a la BBDD
    public function insert($comentario, $usuario, $fecha, $puntaje, $id_jugador) {
        //enviamos la consulta
        $sql = "INSERT INTO comentarios(comentario, usuario, fecha, puntaje, id_jugador) 
                VALUES (?, ?, ?, ?, ?) ";
        $query = $this->getConnection()->prepare($sql);  
        $query->execute([$comentario, $usuario, $fecha, $puntaje, $id_jugador]); 
        $lastId = $this->getConnection()->LastInsertId();              //Devuelve el ùltimo id     
        return $lastId;  
    }

    //Elimina un comentario de la BBDD
    public function delete($id_comentario){
        //enviamos la consulta
        $sql = "DELETE FROM comentarios WHERE id_comentario = ?";
        $query = $this->getConnection()->prepare($sql);  
        $query->execute([$id_comentario]);        
    }

    //Obtengo todos los comentarios de un jugador
    public function getAll($id_jugador, $orden = []) {
        $sql = "SELECT * FROM comentarios WHERE id_jugador = ? ORDER BY id_comentario DESC";   //traemos los comentarios ordenados por fecha
        $query = $this->getConnection()->prepare($sql);    
        $query->execute([$id_jugador]);        
        $comentarios = $query->fetchAll(PDO::FETCH_OBJ);    
        return $comentarios;
    }

    //Obtengo un comentario
    public function get($id_comentario) {
        $sql = "SELECT * FROM comentarios WHERE id_comentario = ?";
        $query = $this->getConnection()->prepare($sql);    
        $query->execute([$id_comentario]);        
        $comentario = $query->fetch(PDO::FETCH_OBJ);    
        return $comentario;
    }
}