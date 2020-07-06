<?php

require_once 'controllers/adminBase.controller.php';

class PublicidadesController extends AdminBaseController {

    //muestra el formulario para cargar los datos de una nueva División
    //para posteriormente guardarla en la BBDD
    public function showABMPublicidades() {
        $publicidades = $this->getModelPublicidades()->getAll();
        if(count($publicidades) == 1){
            $this->getViewAdmin()->abmPublicidades($publicidades, "Aún no hay publicidades cargadas");
            die;
        }
        $this->getViewAdmin()->abmPublicidades($publicidades);
    }

    public function formPublicidad(){
        $this->getViewAdmin()->formPublicidadAdd();
    }
/*
    public function copyImage(){
        // Nombre archivo original
        $nombreOriginal = $_FILES['foto']['name'];
        // Nombre en el file system:
        $nombreFisico = $_FILES['foto']['tmp_name'];
        $nombreFinal = "images/publicidades/". uniqid("", true) . "." . strtolower(pathinfo($nombreOriginal, PATHINFO_EXTENSION));
        move_uploaded_file($nombreFisico, $nombreFinal); 
        return $nombreFinal;
    }
*/
    public function copyImage(){
        
        foreach($_FILES as $fotos){
            $cant = count($fotos['name']);
            for($i=0; $i<$cant; $i++){
                $nombreOriginal = $fotos['name'][$i];
                $nombreFisico = $fotos['tmp_name'][$i];
                $nombreFinal[$i] = "images/publicidades/". uniqid("", true) . "." . strtolower(pathinfo($nombreOriginal, PATHINFO_EXTENSION));
                move_uploaded_file($nombreFisico, $nombreFinal[$i]);
                 
            }
        }
        
        
        return $nombreFinal;
    }





    //guarda una nueva publicidad en la BBDD
  
    public function addPublicidad() {
        if(empty($_POST['contacto']) || empty($_POST['valor']) ||$_FILES['fotos']['name'][0] == "") {
                $publicidades = $this->getModelPublicidades()->getAll(); 
                $this->getViewAdmin()->abmPublicidades($publicidades, "No ingresó todos los campos");
        } 
        else { //******* HACER UN FOREACH */

            foreach($_FILES['fotos']['type'] as $tipo){
                if(!($tipo == "image/jpg" || $tipo == "image/jpeg" || $tipo == "image/png")){
                    $publicidades = $this->getModelPublicidades()->getAll(); 
                    $this->getViewAdmin()->abmPublicidades($publicidades, "No ingresó un archivo de imagen correcto");
                    die;
                }
            }
            $imagenes = $this->copyImage(); // Recibe un arreglo de imagenes
            $cant_fotos = count($imagenes);
            if($cant_fotos == 1){
                $this->getModelPublicidades()->insert($imagenes[0], $_POST['contacto'], $_POST['valor'], "", "");
            }
            if($cant_fotos == 2){
                $this->getModelPublicidades()->insert($imagenes[0], $_POST['contacto'], $_POST['valor'], $imagenes[1], "");
            }
            if($cant_fotos == 3){
                $this->getModelPublicidades()->insert($imagenes[0], $_POST['contacto'], $_POST['valor'], $imagenes[1], $imagenes[2]);
            }
            if($cant_fotos > 3){
                $this->getModelPublicidades()->insert($imagenes[0], $_POST['contacto'], $_POST['valor'], $imagenes[1], $imagenes[2]);
            }
            $publicidades = $this->getModelPublicidades()->getAll(); 
            $this->getViewAdmin()->abmPublicidades($publicidades, "La publicidad se cargó con éxito");
        }
    }
            
    
}