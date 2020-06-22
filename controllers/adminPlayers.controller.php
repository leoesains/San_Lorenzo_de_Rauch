<?php

require_once 'controllers/adminBase.controller.php';

class PlayersController extends AdminBaseController {

    //muestra el formulario para cargar los datos de un nuevo jugador
    //para posteriormente guardarlo en la BBDD
    public function formPlayer() {
        $divisiones = $this->getModelDivisions()->getAll(); //para el select del form

        if(empty($divisiones)) {
            $this->DDBBvacia("Aún no hay cargadas divisiones en la Base de Datos");
        } else {
            $this->getViewAdmin()->formPlayerAdd($divisiones);
        }
    }

    // Le asigno un nombre único al archivo subido, 
    // lo guardo en la carpeta images/jugadores/
    // y retorna el nombre creado para guardarlo en la DDBB 
    public function copyImage(){
        // Nombre archivo original
        $nombreOriginal = $_FILES['foto']['name'];
        // Nombre en el file system:
        $nombreFisico = $_FILES['foto']['tmp_name'];
        $nombreFinal = "images/jugadores/". uniqid("", true) . "." . strtolower(pathinfo($nombreOriginal, PATHINFO_EXTENSION));
        move_uploaded_file($nombreFisico, $nombreFinal); 
        return $nombreFinal;
    }

    //guarda un nuevo jugador en la BBDD
    public function addPlayer() {
        if(empty($_POST['dni']) || empty($_POST['name']) || empty($_POST['edad'])|| empty($_POST['fechaNacimiento']) || empty($_POST['numeroCarnet'])
            || empty($_POST['puesto']) || empty($_POST['clubOrigen']) 
            || empty($_POST['telefono']) || empty($_POST['categoria'])
            || ($_FILES['foto']['name'] == "")) {
                $divisiones = $this->getModelDivisions()->getAll(); 
                $this->getViewAdmin()->formPlayerAdd($divisiones, "No ingresò todos los datos requeridos");
        } 
        else {
            $jugador = $this->getModelPlayers()->get($_POST['dni']);
            if(!empty($jugador)) {
                $divisiones = $this->getModelDivisions()->getAll(); 
                $this->getViewAdmin()->formPlayerAdd($divisiones, "El jugador " . $_POST['name'] . " ya existe!");
            }
            else {
                
                if($_FILES['foto']['type'] == "image/jpg" || $_FILES['foto']['type'] == "image/jpeg" || $_FILES['foto']['type'] == "image/png"){
                    $imagen = $this->copyImage();
                    $this->getModelPlayers()->insert($_POST['dni'], $_POST['name'], $_POST['edad'], $_POST['fechaNacimiento'], $_POST['numeroCarnet'], $_POST['puesto'], $_POST['clubOrigen'], $_POST['telefono'], $_POST['categoria'], $imagen);
                    $divisiones = $this->getModelDivisions()->getAll(); 
                    $this->getViewAdmin()->formPlayerAdd($divisiones, $_POST['name'] . " fue guardado correctamente!");
                }
                else {
                    $divisiones = $this->getModelDivisions()->getAll(); 
                    $this->getViewAdmin()->formPlayerAdd($divisiones, "No ingresó archivo de imágen correcto");
                }
            }
        }
    }

    //muestra formulario para Editar un jugador
    public function editDataPlayer($dni){
        $jugador = $this->getModelPlayers()->get($dni); //para precargar los datos al form
        $divisiones = $this->getModelDivisions()->getAll(); //para select en form
        $this->getViewAdmin()->showFormEditionPlayer($jugador, $divisiones);
    }

    //modifica datos de jugador en DDBB
    public function modifyDataPlayer(){
        if(empty($_POST['nombre']) || empty($_POST['edad'])|| 
          empty($_POST['fechaNacimiento']) || empty($_POST['numeroCarnet']) || 
          empty($_POST['puesto']) || empty($_POST['clubOrigen']) || 
          empty($_POST['telefono']) || empty($_POST['foto']) || 
          empty($_POST['categoria'])) {
            $jugador = $this->getModelPlayers()->get($_POST['dni']);
            $divisiones = $this->getModelDivisions()->getAll();
            $this->getViewAdmin()->showFormEditionPlayer($jugador, $divisiones, "No se permiten campos vacìos");
        } else {
            $this->getModelPlayers()->update($_POST['dni'],$_POST['nombre'], $_POST['edad'], 
                                      $_POST['fechaNacimiento'], $_POST['numeroCarnet'], $_POST['puesto'], $_POST['clubOrigen'], 
                                      $_POST['telefono'], $_POST['categoria'],
                                      $_POST['foto']);
            $jugador = $this->getModelPlayers()->get($_POST['dni']);
            $divisiones = $this->getModelDivisions()->getAll();
            $this->getViewAdmin()->showFormEditionPlayer($jugador, $divisiones, "Cambios guardados exitosamente");
        }
    }

    //Repregunta si esta seguro en eliminar un jugador de la BBDD
    public function confirmDeletePlayer($dni) {
        $jugador = $this->getModelPlayers()->get($dni);
        $this->getViewAdmin()->formDeletePlayer($jugador);
    }

    //Elimina un jugador. luego se situa en listar_jugadores
    public function removePlayer($dni){
        $this->getModelPlayers()->delete($dni);
        header ('Location: ' .BASE_URL. 'listar_jugadores');
    }


}


