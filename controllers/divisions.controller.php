<?php

require_once 'controllers/adminBase.controller.php';

class DivisionsController extends AdminBaseController {

    //muestra el formulario para cargar los datos de una nueva División
    //para posteriormente guardarla en la BBDD
    public function formDivision() {
        $this->getViewAdmin()->formDivisionAdd();
    }

    //guarda una nueva División en la BBDD
    public function addDivision() {
        if(empty($_POST['numeroCategoria']) || empty($_POST['nombreCategoria']) || empty($_POST['edadLimite'])|| empty($_POST['limiteJugadores']) || empty($_POST['excepciones'])) {
            $this->getViewAdmin()->formDivisionAdd("No ingreso todos los datos requerìdos");
        } else {
            $categoria = $this->getModelDivisions()->get($_POST['numeroCategoria']);
            if(!empty($categoria)) {
                $this->getViewAdmin()->formDivisionAdd("La categoria " . $categoria->nombre_div . " ya existìa!!");
            } else {
                $this->getModelDivisions()->insert($_POST['numeroCategoria'], $_POST['nombreCategoria'], $_POST['edadLimite'], $_POST['limiteJugadores'], $_POST['excepciones']);
                $this->getViewAdmin()->formDivisionAdd("Divisiòn guardada correctamente");
            }
        }
    }

    //muestra formulario para Editar una Division
    public function editDataDivision($id_division){
        $categoria = $this->getModelDivisions()->get($id_division); //para precargar los datos al form
        $this->getViewAdmin()->showFormEditionDivision($categoria);
    }

    //Modifica los datos de una determina division
    public function modifyDataDivision(){
        if(empty($_POST['nombre_div']) || empty($_POST['edad_limite'])|| 
           empty($_POST['limite_jugadores_LBF']) || empty($_POST['excepciones'])) {
             $categoria = $this->getModelDivisions()->get($_POST['id_division']);
             $this->getViewAdmin()->showFormEditionDivision($categoria, "No se permiten campos vacìos");
        } else {
            $this->getModelDivisions()->update($_POST['id_division'],$_POST['nombre_div'], 
                                        $_POST['edad_limite'], 
                                        $_POST['limite_jugadores_LBF'], 
                                        $_POST['excepciones']);
            $categoria = $this->getModelDivisions()->get($_POST['id_division']);
            $this->getViewAdmin()->showFormEditionDivision($categoria, "Cambios realizados exitosamente");
        }
    }

    //Repregunta si esta seguro en eliminar una Division
    public function confirmDeleteDivision($id_div) {
        $division = $this->getModelDivisions()->get($id_div);
        $this->getViewAdmin()->formDeleteDivision($division);
    }

    //Elimina la division siempre y cuando no tenga jugadores cargados
    public function removeDivision($id_div){
        $jugadores = $this->getModelPlayers()->getPlayerDivisions($id_div);
        if(empty($jugadores)) {
            $this->getModelDivisions()->delete($id_div);
            $divisiones = $this->getModelDivisions()->getAll();
            $this->getViewPublic()->showDivisions($divisiones, "División borrada exitosamente");
        } else {
            $divisiones = $this->modelDivisiones->getAll();
            $this->getViewPublic()->showDivisions($divisiones, "No se puede eliminar esta división porque tiene jugadores cargados");
        }
    }




}
