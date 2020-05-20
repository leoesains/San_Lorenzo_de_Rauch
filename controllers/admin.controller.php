<?php
require_once 'models/divisiones.model.php';
require_once 'models/jugadores.model.php';
require_once 'models/admin.model.php';
require_once 'views/public.view.php';
require_once 'views/admin.view.php';


class AdminController{

    //Variables globales del controlador
    private $modelDivisiones;
    private $modelJugadores;
    private $modelAdmin;
    private $view;
    private $viewPublic;
    
    
    public function __construct() { //Constructor de la clase
        $this->modelDivisiones = new DivisionesModel();
        $this->modelJugadores = new JugadoresModel();
        $this->modelAdmin = new AdminModel();
        $this->view = new AdminView();
        $this->viewPublic = new PublicView();
        
    }

    //Controla que el usuario ingresado sea correcto
    public function loginAdmin(){
        if(empty($_POST['username']) || empty($_POST['psw'])) {   
            echo "No ingreso todos los datos requeridos";
            
        } else {
            $username = $_POST['username'];
            $password = $_POST['psw'];
            $administradores = $this->modelAdmin->getAllAdmin();
                        
            $longitud = count($administradores);
            for($i = 0; $i < $longitud; $i ++) {
                if($administradores[$i]->nombre_usuario == $username && $administradores[$i]->contraseña == $password) {
                    $this->view->welcome($administradores[$i]->nombre);
                    //echo "Bienvenido " .$administradores[$i]->nombre;
                    
                    die();
                }
            }
            if($i == $longitud) {
                echo "Usuario Desconocido";
            }
        }
    }

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
                echo 'Debe ingresar todos los datos requeridos!';
        } else {
            $jugador = $this->modelJugadores->get($_POST['dni']);
            if(!empty($jugador)) {
                echo "El jugador ya estaba cargado";
            } else {
                $this->modelJugadores->insert($_POST['dni'], $_POST['name'], $_POST['edad'], $_POST['fechaNacimiento'], $_POST['numeroCarnet'], $_POST['puesto'],
                                              $_POST['clubOrigen'], $_POST['telefono'], $_POST['categoria'], $_POST['foto']);
                echo "jugador guardado correctamente";
            }
        }
    }

    //muestra un formulario vacio para cargar los datos de una nueva division y posteriormente guardarla en la BBDD
    public function formDivision() {
        $this->view->formDivisionAdd();
    }

    //guarda una nueva categoria en la BBDD
    public function addDivision() {
        if(empty($_POST['numeroCategoria']) || empty($_POST['nombreCategoria']) || empty($_POST['edadLimite'])|| empty($_POST['limiteJugadores']) || empty($_POST['excepciones'])) {
            echo "Todos los datos son obligatorios";
        } else {
            $division = $this->modelDivisiones->get($_POST['numeroCategoria']);
            if(!empty($division)) {
                echo "La division ya estaba cargada";
            } else {
                $this->modelDivisiones->insert($_POST['numeroCategoria'], $_POST['nombreCategoria'], $_POST['edadLimite'], $_POST['limiteJugadores'], $_POST['excepciones']);
                echo "categoria guardada correctamente";
            }
        }
    }

    //muestra formulario para Editar el jugador con id = dni
    public function editDataPlayer($dni){
        $jugador = $this->modelJugadores->get($dni);
        $this->view->showFormEditionPlayer($jugador);
    }

    //modifica datos de jugador en DDBB
    public function modifyDataPlayer(){
       if(empty($_POST['nombre']) || empty($_POST['edad'])|| 
          empty($_POST['fechaNacimiento']) || empty($_POST['numeroCarnet']) || 
          empty($_POST['puesto']) || empty($_POST['clubOrigen']) || 
          empty($_POST['telefono']) || empty($_POST['foto']) || 
          empty($_POST['division'])) {
            $this->viewPublic->printError("No se permiten campos vacíos");
            die;
        } 
        $this->modelJugadores->update($_POST['dni'],$_POST['nombre'], $_POST['edad'], 
                                      $_POST['fechaNacimiento'], $_POST['numeroCarnet'], $_POST['puesto'], $_POST['clubOrigen'], 
                                      $_POST['telefono'], $_POST['division'],
                                      $_POST['foto']);
    }

    public function removePlayer($dni){
        
        $this->modelJugadores->delete($dni,);
        

    }

    //muestra formulario para Editar una Division
        public function editDataDivision($id_division){
        $division = $this->modelDivisiones->get($id_division);
        $this->view->showFormEditionDivision($division);

    }

    public function modifyDataDivision(){
        if(empty($_POST['nombre_div']) || empty($_POST['edad_limite'])|| 
           empty($_POST['limite_jugadores_LBF']) || empty($_POST['excepciones'])) {
             $this->viewPublic->printError("No se permiten campos vacíos");
             die;
         } 
         $this->modelDivisiones->update($_POST['id_division'],$_POST['nombre_div'], 
                                        $_POST['edad_limite'], 
                                        $_POST['limite_jugadores_LBF'], 
                                        $_POST['excepciones']);
    }

    public function removeDivision($id_div){
        $this->modelDivisiones->delete($id_div);
    }




    public function showError($msg){
        //Le digo a la VISTA que me muestre el error en pantalla
        $this->view->printError($msg);
    }


}
