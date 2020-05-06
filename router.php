<?php

require_once 'controllers/public.controller.php';
require_once 'controllers/admin.controller.php';

// definimos la base url de forma dinamica
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

//defino una accion por defecto
if(empty($_GET['action'])){
    $_GET['action'] = 'home';
}
$accion = $_GET['action'];

$parametros = explode('/', $accion);

switch($parametros[0]){

    // -- Acciones del public.controller

    case 'home': {
        $controller = new PublicController();     
        $controller->home();
    break;
    }
    case 'listarJugadores': {
        $controller = new PublicController();     
        $controller->showPlayer();
    break;
    }
    case 'verJugador': {
        $controller = new PublicController();     
        $controller->viewPlayer($parametros[1]);
    break;
    }
    case 'listarDivisiones': {
        $controller = new PublicController();     
        $controller->showDivision();
    break;
    }
    case 'divisiones_jugadores': {
        $controller = new PublicController();     
        $controller->showPlayersByDivision($parametros[1]);
    break;
    }

    // -- Acciones del admin.controller
    
    case 'log_admin': {
        $controller = new AdminController();  
        $controller->loginAdmin();
    break;
    }

    case 'registrarse': {
        $controller = new AdminController();  
        $controller->regAdmin();
    break;
    }

    default: {
        $controller = new PublicController();     
        $controller->showError("Se ha ejecutado una acción desconocida","images/errores/accion_desconocida.jpg");
    }    
}
    