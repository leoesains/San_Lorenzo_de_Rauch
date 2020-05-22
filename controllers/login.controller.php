<?php

require_once 'models/login.model.php';
require_once 'views/public.view.php';

class LoginController{

    //Variables globales del controlador
    private $modelLogin;
    private $view;
    
    public function __construct() { //Constructor de la clase
        
        $this->modelLogin = new AdminModel();
        $this->view = new AdminView();
    }

    //Controla que el usuario ingresado sea correcto
    public function loginAdmin(){
        if(empty($_POST['username']) || empty($_POST['psw'])) {   
            
            echo "No ingreso todos los datos requeridos";
            
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
                    echo "contraseña incorrecta";
                }
            } else {
                echo "el usuario no existe";
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

