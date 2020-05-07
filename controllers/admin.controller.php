<?php
require_once 'models/divisiones.model.php';
require_once 'models/jugadores.model.php';
require_once 'views/public.view.php';
require_once 'views/admin.view.php';


class AdminController{

    //Variables globales del controlador
    private $modelDivisiones;
    private $modelJugadores;
    private $view;

    public function __construct(){ //Constructor de la clase
        $this->modelDivisiones = new DivisionesModel();
        $this->modelJugadores = new JugadoresModel();
        $this->view = new AdminView();
    }

    public function loginAdmin(){
        if(empty($_POST['username']) || empty($_POST['psw'])) {           //hacer algo mas lindo de vista
            echo "debe ingresar usuario y contraseña";
        } else {
            $username = $_POST['username'];
            $password = $_POST['psw'];
            $administradores = $this->modelDivisiones->getAllAdmin();
            //print_r($administradores);
            
            //foreach($administradores as $administrador) {
            $longitud = count($administradores);
            for($i = 0; $i < $longitud; $i ++) {
                if($administradores[$i]->nombre_usuario == $username && $administradores[$i]->contraseña == $password) {
                    echo "logueado correctamente";
                    die();
                }
            }
            if($i == $longitud) {
                echo "los datos ingresados son incorrectos"; 
            }
        }

    }

    public function regAdmin(){
        //var_dump("MOSTRAR UN FORMULARIO PARA INSERTAR UN USUARIO ADMINISTRADOR A LA TABLA ADMINISTRADORES");
        $this->view->keyWord();
        
        
    }

    public function showForm() {
        $palabraClave = "sanlorenzo";
        if(empty($_POST['palabraClave'])) {
            echo "no ingreso la palabra clave";
        } else {
            if($_POST['palabraClave'] != $palabraClave) {
                echo "La palabra clave ingresada es incorrecta";
            } else {
                $this->view->adminForm();
            }
        }
    }

    public function loadData() {
        if(empty($_POST['name']) || empty($_POST['username']) || empty($_POST['password'])) {           //hacer algo mas lindo de vista
            echo "debe ingresar los 3 datos solicitados";
        } else {
            $this->modelDivisiones->insert($_POST['name'], $_POST['username'], $_POST['password']);
            echo "datos guardados correctamente";
        }
    }




}
