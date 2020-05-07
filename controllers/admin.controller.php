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
    
    
    public function __construct() { //Constructor de la clase
        $this->modelDivisiones = new DivisionesModel();
        $this->modelJugadores = new JugadoresModel();
        $this->modelAdmin = new AdminModel();
        $this->view = new AdminView();
        
    }

    //crea el usuario y contraseña y guarda los datos en la BBDD
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
                    //echo "logueado correctamente";
                    $this->view->chooseTask();
                    die();
                }
            }
            if($i == $longitud) {
                echo "los datos ingresados son incorrectos";
            }
        }
    }

    //muestra un formulario para ingresar una palabra clave para poder loguearse en la pagina
    public function viewKeyWord(){
        $this->view->keyWord();
    }

    //comprueba si la palabra clave ingresada es correcta, si es correcta muestra un formulario para loguearse
    public function showForm() {
        $palabraClave = "sanlorenzo";
        if(empty($_POST['palabraClave'])) {
            echo "No ingreso la palabra clave";
        } else {
            if($_POST['palabraClave'] != $palabraClave) {
                echo "La palabra clave ingresada es incorrecta!";
            } else {
                $this->view->adminForm();
            }
        }
    }

    //guarda los datos del usuario en la BBDD
    public function loadData() {
        if(empty($_POST['name']) || empty($_POST['username']) || empty($_POST['password'])) {           //hacer algo mas lindo de vista
            echo "Debe ingresar los tres datos solicitados";
        } else {
            $this->modelAdmin->insert($_POST['name'], $_POST['username'], $_POST['password']);

            echo "datos guardados correctamente";
        }
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
                echo "Debe ingresar todos los datos requeridos!";
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

    public function showError($msg){
        //Le digo a la VISTA que me muestre el error en pantalla
        $this->view->printError($msg);
    }


}
