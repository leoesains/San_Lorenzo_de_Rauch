<?php

require_once 'models/login.model.php';
require_once 'views/public.view.php';
require_once 'views/admin.view.php';

class LoginController{

    //Variables globales del controlador
    private $modelLogin;
    private $view;
    private $viewPublic;
    
    public function __construct() { //Constructor de la clase
        $this->modelLogin = new AdminModel();
        $this->view = new AdminView();
        $this->viewPublic = new PublicView();
    }

    //Controla que el usuario ingresado sea correcto
    public function loginAdmin(){
        $urlPaginaAnterior = explode('/', $_SERVER['HTTP_REFERER']);
        $accion = end($urlPaginaAnterior);
        if(empty($_POST['username']) || empty($_POST['psw'])) {   
            $this->viewPublic->showHome(false, "Debe ingresar Usuario y Contraseña");
        } else {
            $username = $_POST['username'];
            $password = $_POST['psw'];
            $user = $this->modelLogin->getAdmin($username);
            if($user) {
                if(password_verify($password, $user->contraseña)) {
                    session_start();                                    //Abro la sesion
                    $_SESSION['IS_LOGGED'] = true;
                    $_SESSION['NOMBRE_USUARIO'] = $user->nombre;        //Guardo el nombre del usuario
                    $this->view->welcome($user->nombre); 
                } else {
                    //var_dump($accion);die;
                    $this->viewPublic->showHome(false, "Contraseña incorrecta");
                }
            } else {
                $this->viewPublic->showHome(false, "El usuario ingresado no existe");
            }
        }
    }

    //destruye la session que se encuentra abierta para cerrar la sesion y redirecciona al home
    public function logout() {
        session_start();
        session_destroy();
        header('Location: home');
    }
}

