<?php
require_once 'models/divisiones.model.php';
require_once 'models/jugadores.model.php';
require_once 'models/login.model.php';
require_once 'views/public.view.php';
require_once 'views/admin.view.php';
require_once 'helpers/auth.helper.php';


class AdminController{

    //Variables globales del controlador
    private $modelDivisiones;
    private $modelJugadores;
    private $modelAdmin;
    private $view;
    private $viewPublic;
    
    
    public function __construct() { //Constructor de la clase
        authHelper::checkLogged();
        $this->modelDivisiones = new DivisionesModel();
        $this->modelJugadores = new JugadoresModel();
        $this->modelAdmin = new AdminModel();
        $this->view = new AdminView();
        $this->viewPublic = new PublicView();
    }

    //muestra un pequeño formulario para elegir si se quiere hacer el CRUD en jugadores o categorias
    public function showOptionAdm(){
        $this->view->chooseTask();
    }

    //muestra los jugadores para poder eliminar, actualizar o agregar un jugador nuevo
    public function crudPlayers() {
        //Pido los jugadores al modelo
        $jugadores = $this->modelJugadores->getAll();
        //Actualizo la vista
        $this->view->showPlayersCrud($jugadores);
    }

    //muestra las categorias para poder eliminar, actualizar o agregar una nueva
    public function crudDivisions() {
        
        //pido las divisiones al modelo
        $divisiones = $this->modelDivisiones->getAll();
        //actualizo la vista
        $this->view->showDivisionsCrud($divisiones);
    }

    //muestra un formulario vacio para cargar los datos de un nuevo jugador y posteriormente guardarlo en la BBDD
    public function formPlayer() {
        
        $divisiones = $this->modelDivisiones->getAll();
        $this->view->formPlayerAdd($divisiones);
    }

    //guarda un nuevo jugador en la BBDD
    public function addPlayer() {
        
        if(empty($_POST['dni']) || empty($_POST['name']) || empty($_POST['edad'])|| empty($_POST['fechaNacimiento']) || empty($_POST['numeroCarnet'])
            || empty($_POST['puesto']) || empty($_POST['clubOrigen']) || empty($_POST['telefono']) || empty($_POST['foto']) || empty($_POST['categoria'])) {
                $divisiones = $this->modelDivisiones->getAll(); 
                $this->view->formPlayerAdd($divisiones, "No ingreso todos los datos requeridos");
        } else {
            $jugador = $this->modelJugadores->get($_POST['dni']);
            if(!empty($jugador)) {
                $divisiones = $this->modelDivisiones->getAll(); 
                $this->view->formPlayerAdd($divisiones, "El jugador " . $_POST['name'] . " ya existìa!");
            } else {
                $this->modelJugadores->insert($_POST['dni'], $_POST['name'], $_POST['edad'], $_POST['fechaNacimiento'], $_POST['numeroCarnet'], $_POST['puesto'],
                                              $_POST['clubOrigen'], $_POST['telefono'], $_POST['categoria'], $_POST['foto']);
                
                $divisiones = $this->modelDivisiones->getAll(); 
                $this->view->formPlayerAdd($divisiones, $_POST['name'] . " fue guardado correctamente!");
                //header ('Location: ' .BASE_URL. 'agregar_jugador');
            }
        }
    }

    //muestra un formulario vacio para cargar los datos de una nueva categoria y posteriormente guardarla en la BBDD
    public function formDivision() {
        $this->view->formDivisionAdd();
    }

    //guarda una nueva categoria en la BBDD
    public function addDivision() {
        
        if(empty($_POST['numeroCategoria']) || empty($_POST['nombreCategoria']) || empty($_POST['edadLimite'])|| empty($_POST['limiteJugadores']) || empty($_POST['excepciones'])) {
            
            $this->view->formDivisionAdd("No ingreso todos los datos requeridos");
        } else {
            $categoria = $this->modelDivisiones->get($_POST['numeroCategoria']);
            if(!empty($categoria)) {
                
                $this->view->formDivisionAdd("La categoria " . $categoria->nombre_div . " ya existia!!");
            } else {
                $this->modelDivisiones->insert($_POST['numeroCategoria'], $_POST['nombreCategoria'], $_POST['edadLimite'], $_POST['limiteJugadores'], $_POST['excepciones']);
                $this->view->formDivisionAdd("Categoria guardada correctamente");
                //header ('Location: ' .BASE_URL. 'agregar_division');
            }
        }
    
    }

    //muestra formulario para Editar el jugador con id = dni
    public function editDataPlayer($dni){
        
        $jugador = $this->modelJugadores->get($dni);
        $divisiones = $this->modelDivisiones->getAll();
        $this->view->showFormEditionPlayer($jugador, $divisiones);
    }

    //modifica datos de jugador en DDBB
    public function modifyDataPlayer(){
        
        if(empty($_POST['nombre']) || empty($_POST['edad'])|| 
          empty($_POST['fechaNacimiento']) || empty($_POST['numeroCarnet']) || 
          empty($_POST['puesto']) || empty($_POST['clubOrigen']) || 
          empty($_POST['telefono']) || empty($_POST['foto']) || 
          empty($_POST['categoria'])) {
            //$this->viewPublic->printError("No se permiten campos vacíos");
            //die;
            $jugador = $this->modelJugadores->get($_POST['dni']);
            $divisiones = $this->modelDivisiones->getAll();
            $this->view->showFormEditionPlayer($jugador, $divisiones, "No se permiten campos vacios");
        } else {
            $this->modelJugadores->update($_POST['dni'],$_POST['nombre'], $_POST['edad'], 
                                      $_POST['fechaNacimiento'], $_POST['numeroCarnet'], $_POST['puesto'], $_POST['clubOrigen'], 
                                      $_POST['telefono'], $_POST['categoria'],
                                      $_POST['foto']);
            $jugador = $this->modelJugadores->get($_POST['dni']);
            $divisiones = $this->modelDivisiones->getAll();
            $this->view->showFormEditionPlayer($jugador, $divisiones, "Cambios guardados exitosamente");
        }
        
        
    }

    public function confirmDeletePlayer($dni) {
        $jugador = $this->modelJugadores->get($dni);
        $this->view->formDeletePlayer($jugador);
    }
    
    public function removePlayer($dni){
        $this->modelJugadores->delete($dni);
        header ('Location: ' .BASE_URL. 'listar_jugadores');
        
    }

    //muestra formulario para Editar una Division
    public function editDataDivision($id_division){
        $categoria = $this->modelDivisiones->get($id_division);
        $this->view->showFormEditionDivision($categoria);
    }

    public function modifyDataDivision(){
        if(empty($_POST['nombre_div']) || empty($_POST['edad_limite'])|| 
           empty($_POST['limite_jugadores_LBF']) || empty($_POST['excepciones'])) {
             //$this->viewPublic->printError("No se permiten campos vacíos");
             //die;
             $categoria = $this->modelDivisiones->get($_POST['id_division']);
             $this->view->showFormEditionDivision($categoria, "No se permiten campos vacios");
        } else {
            $this->modelDivisiones->update($_POST['id_division'],$_POST['nombre_div'], 
                                        $_POST['edad_limite'], 
                                        $_POST['limite_jugadores_LBF'], 
                                        $_POST['excepciones']);
            $categoria = $this->modelDivisiones->get($_POST['id_division']);
            $this->view->showFormEditionDivision($categoria, "Cambios realizados exitosamente");
        }
        
    }

    public function confirmDeleteDivision($id_div) {
        $division = $this->modelDivisiones->get($id_div);
        $this->view->formDeleteDivision($division);
    }

    public function removeDivision($id_div){
        $jugadores = $this->modelJugadores->getPlayerDivisions($id_div);
        if(empty($jugadores)) {
            $this->modelDivisiones->delete($id_div);
            $divisiones = $this->modelDivisiones->getAll();
            $this->viewPublic->showDivisions($divisiones, "Division borrada exitosamente");
        } else {
            $divisiones = $this->modelDivisiones->getAll();
            $this->viewPublic->showDivisions($divisiones, "No se puede eliminar esta division porque tiene jugadores cargados");
        }
    }

    

    public function showError($msg,$isAdmin){
        //Le digo a la VISTA que me muestre el error en pantalla
        $this->view->printError($msg,$isAdmin);
    }
}
