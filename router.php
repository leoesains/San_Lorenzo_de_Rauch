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
    case 'listar_jugadores': {
        $controller = new PublicController();     
        $controller->showPlayer();
    break;
    }
    case 'ver_jugador': {
        $controller = new PublicController();     
        $controller->viewPlayer($parametros[1]);
    break;
    }
    case 'listar_divisiones': {
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

    case 'agregar_jugador': {
        $controller = new AdminController();  
        $controller->formPlayer();
    break;
    }

    case 'guardar_jugador': {
        $controller = new AdminController();  
        $controller->addPlayer();
    break;
    }
    
    case 'agregar_division': {
        $controller = new AdminController();  
        $controller->formDivision();
    break;
    }

    case 'guardar_division': {
        $controller = new AdminController();  
        $controller->addDivision();
    break;
    }

    case 'loguearse': {
        $controller = new AdminController();  
        $controller->loginAdmin();
    break;
    }
    case 'elegir_tarea': {
        $controller = new AdminController();  
        $controller->showOptionAdm();
    break;
    }

    case 'editar_jugador': {
        $controller = new AdminController();  
        $controller->editDataPlayer();
    break;
    }
    case 'guardar_edicion_jugador': {
        $controller = new AdminController();  
        $controller->modifyDataPlayer();
    break;
    }
    case 'eliminar_jugador': {
        $controller = new AdminController();  
        $controller->removePlayer();
    break;
    }
    case 'editar_division': {
        $controller = new AdminController();  
        $controller->editDataDivision($parametros[1]);
    break;
    }
    case 'guardar_edicion_division': {
        $controller = new AdminController();  
        $controller->modifyDataDivision();
    break;
    }
    case 'eliminar_division': {
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
    