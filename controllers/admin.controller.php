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
        $user_name = $_POST['username'];
        $password = $_POST['psw'];
        var_dump($user_name);
        var_dump($password);
    }

    public function regAdmin(){
        var_dump("MOSTRAR UN FORMULARIO PARA INSERTAR UN USUARIO ADMINISTRADOR A LA TABLA ADMINISTRADORES");
        
    }

}
