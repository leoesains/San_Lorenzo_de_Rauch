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
            $this->viewPublic->showHome("Debe ingresar Usuario y Contraseña",false);
        } else {
            $username = $_POST['username'];
            $password = $_POST['psw'];
            $user = $this->modelLogin->getAdmin($username);
            if($user) {
                if(password_verify($password, $user->contraseña)) {
                    if(session_status() != PHP_SESSION_ACTIVE){
                        session_start();                           
                    }         //Abro la sesion
                    $_SESSION['IS_LOGGED'] = true;
                    $_SESSION['NOMBRE_USUARIO'] = $user->nombre;        //Guardo el nombre del usuario
                    $this->view->welcome($user->nombre); 
                } else {
                    //var_dump($accion);die;
                    $this->viewPublic->showHome("Contraseña incorrecta", false);
                }
            } else {
                $this->viewPublic->showHome("El usuario ingresado no existe", false);
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

