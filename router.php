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

    case 'jugadores': {
        $controller = new AdminController();  
        $controller->crudPlayers();
    break;
    }

    case 'categorias': {
        $controller = new AdminController();  
        $controller->crudDivisions();
    break;
    }

    case 'agregarJugador': {
        $controller = new AdminController();  
        $controller->formPlayer();
    break;
    }

    case 'guardarJugador': {
        $controller = new AdminController();  
        $controller->addPlayer();
    break;
    }
    
    case 'agregarDivision': {
        $controller = new AdminController();  
        $controller->formDivision();
    break;
    }

    case 'guardarDivision': {
        $controller = new AdminController();  
        $controller->addDivision();
    break;
    }

    case 'log_admin': {
        $controller = new AdminController();  
        $controller->loginAdmin();
    break;
    }
    case 'elegir_tarea': {
        $controller = new AdminController();  
        $controller->showOptionAdm();
    break;
    }

    case 'registrarse': {
        $controller = new AdminController();  
        $controller->viewKeyWord();
    break;
    }
    case 'formulario': {
        $controller = new AdminController();  
        $controller->showForm();
    break;
    }
    case 'enviarFormulario': {
        $controller = new AdminController();  
        $controller->loadData();
    break;
    }
    case 'editarJugador': {
        $controller = new AdminController();  
        $controller->editDataPlayer();
    break;
    }
    case 'guardarEdicionJugador': {
        $controller = new AdminController();  
        $controller->modifyDataPlayer();
    break;
    }
    case 'eliminarJugador': {
        $controller = new AdminController();  
        $controller->removePlayer();
    break;
    }
    case 'editarDivision': {
        $controller = new AdminController();  
        $controller->editDataDivision($parametros[1]);
    break;
    }
    case 'guardarEdicionDivision': {
        $controller = new AdminController();  
        $controller->modifyDataDivision();
    break;
    }
    case 'eliminarDivision': {
        $controller = new AdminController();  
        $controller->removeDivision($parametros[1]);
    break;
    }
    case 'cerrar_sesion': {
        $controller = new PublicController();     
        $controller->home();
    break;
    }
    
    default: {
        $controller = new PublicController();     
        $controller->showError("Se ha ejecutado una acción desconocida","images/errores/accion_desconocida.jpg");
    }    
}
    