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
    }

    public function delete($id_comentarios){
        
        //enviamos la consulta
        $sql = "DELETE FROM comentarios WHERE id_comentarios = ?";
        $query = $this->getConnection()->prepare($sql);  
        $query->execute([$id_comentarios]);        
    }

    //Obtengo todos los comentarios de un jugador
    public function getAll($id_jugador) {
        $sql = "SELECT * FROM comentarios WHERE id_jugador = ?";
        $query = $this->getConnection()->prepare($sql);    
        $query->execute([$id_jugador]);        
        $comentarios = $query->fetchAll(PDO::FETCH_OBJ);    
        return $comentarios;
    }
}