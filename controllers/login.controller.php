<?php

require_once 'models/login.model.php';
require_once 'views/public.view.php';
require_once 'views/admin.view.php';

class LoginController {

    //Variables globales del controlador
    private $modelLogin;
    private $view;
    private $viewPublic;
    
    public function __construct() { //Constructor de la clase
        $this->modelLogin = new LoginModel();
        $this->view = new AdminView();
        $this->viewPublic = new PublicView();
    }

    //Controla que el usuario ingresado sea correcto e Inicia Sesión
    public function loginAdmin(){
        if(empty($_POST['username']) || empty($_POST['psw'])) {   
            $this->viewPublic->showHome("Debe ingresar Mail y Contraseña", session_status() === PHP_SESSION_ACTIVE);
        } else {
            $username = $_POST['username'];
            $password = $_POST['psw'];
            $user = $this->modelLogin->getAdmin($username);
            
            if($user) {
                if(password_verify($password, $user->contraseña)) {
                    if(session_status() != PHP_SESSION_ACTIVE){
                        session_start();         //Abro la sesion                  
                    }         
                    $_SESSION['IS_LOGGED'] = true;
                    $_SESSION['NOMBRE_USUARIO'] = $user->nombre;  //Guardo el nombre del usuario
                    $_SESSION['TIPO'] = $user->tipo;
                    $_SESSION['ID'] = $user->id_usuario;
                    header('Location: ' .BASE_URL. 'home');
                } else {
                    $this->viewPublic->showHome("Contraseña incorrecta", session_status() === PHP_SESSION_ACTIVE);
                }
            } else {
                $this->viewPublic->showHome("El Mail ingresado no existe", session_status() === PHP_SESSION_ACTIVE);
            }
        }
    }

    //destruye la sesión que se encuentra abierta y redirecciona al home
    public function logout() {
        session_start();
        session_destroy();
        header('Location: ' .BASE_URL. 'home');
        
    }

    public function formCheckIn() {
       $this->viewPublic->formCheckIn(); 
    }

    public function addUser() {
        if(empty($_POST['nombre']) || empty($_POST['email']) || empty($_POST['contraseña']) || empty($_POST['repitaContraseña']) || empty($_POST['mascota']) || empty($_POST['ciudad'])) {
            $this->viewPublic->formCheckIn("Todos los datos son obligatorios", $_POST['nombre'], $_POST['email']);
        } else {
            $name = $_POST['nombre'];
            $username = $_POST['email'];
            $password = $_POST['contraseña'];
            $repitPassword = $_POST['repitaContraseña'];
            $tipo = "usuario";
            $mascota = $_POST['mascota'];
            $ciudad = $_POST['ciudad'];
            $user = $this->modelLogin->getAdmin($username);
            if($user) {
                $this->viewPublic->formCheckIn("El usuario " . $username . " ya estaba registrado");
            } else {
                if($password != $repitPassword) {
                    $this->viewPublic->formCheckIn("Las contraseñas no coinciden", $_POST['nombre'], $_POST['email']); 
                } else {
                    $passwordCifrado = password_hash($password, PASSWORD_DEFAULT);
                    $mascotaCifrado = password_hash($mascota, PASSWORD_DEFAULT);
                    $ciudadCifrado = password_hash($ciudad, PASSWORD_DEFAULT);
                    $this->modelLogin->insert($name, $username, $passwordCifrado, $tipo, $mascotaCifrado, $ciudadCifrado);
                    $user = $this->modelLogin->getAdmin($username);
                    if(session_status() != PHP_SESSION_ACTIVE){
                        session_start();         //Abro la sesion                  
                    }         
                    $_SESSION['IS_LOGGED'] = true;
                    $_SESSION['NOMBRE_USUARIO'] = $name;  //Guardo el nombre del usuario
                    $_SESSION['TIPO'] = $tipo;
                    $_SESSION['ID'] = $user->id_usuario;
                    header('Location: ' .BASE_URL. 'home');
                    
                }
            }

        }
    }

    //Muestra todos los usuarios
    public function showUsers() {
        $usuarios = $this->modelLogin->get();
        $tipos = $this->modelLogin->types();
        if(count($usuarios) == 1){
            $this->view->showUsers($usuarios, $tipos, "Aún no hay Usuarios cargados.");
            die;
        }
        $this->view->showUsers($usuarios, $tipos);
    }

    //Repregunta si esta seguro en eliminar un usuario de la BBDD
    public function confirmDeleteUser($id_usuario) {
        $usuario = $this->modelLogin->getId($id_usuario);
        $this->view->formDeleteUser($usuario);
    }

    //Elimina un usuario. luego se situa en listar_usuarios
    public function removeUser($id_usuario){
        $this->modelLogin->delete($id_usuario);
        $usuarios = $this->modelLogin->get();
        $tipos = $this->modelLogin->types();
        $this->view->showUsers($usuarios, $tipos, "El usuario se eliminó exitosamente");
    }

    //modifica datos de un usuario en DDBB
    public function editUser($id_usuario){
        if(empty($_POST['name']) || empty($_POST['username']) || empty($_POST['type'])) {
            $usuarios = $this->modelLogin->get();
            $tipos = $this->modelLogin->types();
            $this->view->showUsers($usuarios, $tipos, "No se permiten campos vacios");
        } else {
            $this->modelLogin->update($id_usuario, $_POST['type']);
            $usuarios = $this->modelLogin->get();
            $tipos = $this->modelLogin->types();
            $this->view->showUsers($usuarios, $tipos, "Cambios guardados exitosamente");
        }
    }

    
    
}

