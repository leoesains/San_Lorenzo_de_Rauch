<?php

require_once 'models/db.conection.model.php';

class PublicidadesModel extends dbConectionModel {

    //Obtengo todas las publicidades
    public function getAll() {
        //Hacemos la consulta
        $sql = "SELECT * FROM publicidades WHERE activa = 1";
        $query = $this->getConnection()->prepare($sql);    
        $query->execute();        //la ejecuto
        $publicidades = $query->fetchAll(PDO::FETCH_OBJ);    
        return $publicidades;
    }

    //ingresa una nueva publicidad a la BBDD
    public function insert($foto, $contacto, $valor, $foto2, $foto3) {
        //enviamos la consulta
        $sql = "INSERT INTO publicidades(imagen, contacto, valor, activa, imagen2, imagen3) VALUES (?, ?, ?, ?, ?, ?)";
        $query = $this->getConnection()->prepare($sql);  
        $query->execute([$foto, $contacto, $valor, 1, $foto2, $foto3]);        
    }

}