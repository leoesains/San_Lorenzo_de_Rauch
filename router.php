<?php

require_once 'controllers/public.controller.php';
require_once 'controllers/login.controller.php';
require_once 'controllers/adminPlayers.controller.php';
require_once 'controllers/adminDivisions.controller.php';


// definimos la base url de forma dinamica
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

//defino una accion por defecto
if(empty($_GET['action'])){
    $_GET['action'] = 'home';
}
$accion = $_GET['action'];

$parametros = explode('/', $accion);

switch($parametros[0]){

    //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    //++++++++++++++ Acciones del public.controller ++++++++++++++
    //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    
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
    case 'ver_jugador_division': {
        $controller = new PublicController();     
        $controller->viewPlayerDivision($parametros[1],$parametros[2]);
    break;
    }
    case 'ver_arqueros': {
        $controller = new PublicController();     
        $controller->viewPlayersPosition("ARQUERO");
    break;
    }
    case 'ver_defensores': {
        $controller = new PublicController();     
        $controller->viewPlayersPosition("DEFENSOR");
    break;
    }
    case 'ver_volantes': {
        $controller = new PublicController();     
        $controller->viewPlayersPosition("VOLANTE");
    break;
    }
    case 'ver_delanteros': {
        $controller = new PublicController();     
        $controller->viewPlayersPosition("DELANTERO");
    break;
    }
    case 'ver_jugador_puesto': {
        $controller = new PublicController();     
        $controller->viewPlayerPosition($parametros[1]);
    break;
    }

    //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    //++ Acciones del players.controller y divisions.controller ++
    //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

    case 'agregar_jugador': {
        $controller = new PlayersController();  
        $controller->formPlayer();
    break;
    }
    case 'guardar_jugador': {
        $controller = new PlayersController();  
        $controller->addPlayer();
    break;
    }
    case 'agregar_division': {
        $controller = new DivisionsController();  
        $controller->formDivision();
    break;
    }
    case 'guardar_division': {
        $controller = new DivisionsController();  
        $controller->addDivision();
    break;
    }
    case 'editar_jugador': {
        $controller = new PlayersController();  
        $controller->editDataPlayer($parametros[1]);
    break;
    }
    case 'guardar_edicion_jugador': {
        $controller = new PlayersController();  
        $controller->modifyDataPlayer();
    break;
    }
    case 'eliminar_jugador': {
        $controller = new PlayersController();  
        $controller->confirmDeletePlayer($parametros[1]);
    break;
    }
    case 'confirmar_eliminar_jugador': {
        $controller = new PlayersController();  
        $controller->removePlayer($parametros[1]);
    break;
    }
    case 'editar_division': {
        $controller = new DivisionsController();  
        $controller->editDataDivision($parametros[1]);
    break;
    }
    case 'guardar_edicion_division': {
        $controller = new DivisionsController();  
        $controller->modifyDataDivision();
    break;
    }
    case 'eliminar_division': {
        $controller = new DivisionsController();  
        $controller->confirmDeleteDivision($parametros[1]);
    break;
    }
    case 'confirmar_eliminar_division': {
        $controller = new DivisionsController();  
        $controller->removeDivision($parametros[1]);
    break;
    }

    //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    //+++++++++++++++ Acciones del login.controller ++++++++++++++
    //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

    case 'loguearse': {
        $controller = new LoginController();  
        $controller->loginAdmin();
    break;
    }
    case 'cerrar_sesion': {
        $controller = new LoginController();     
        $controller->logout();
    break;
    }

    //+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    //+++++++++++++++++++ Acción por defecto ++++++++++++++++++++
    //+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

    default: {
        $controller = new PublicController();     
        $controller->showError("Se ha ejecutado una acción desconocida","images/errores/accion_desconocida.jpg");
    } 

    /*
    //++++++++++++++++++++++++++++++++++++
    //++ Acciones del public.controller ++
    //++++++++++++++++++++++++++++++++++++
    
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
    case 'ver_jugador_division': {
        $controller = new PublicController();     
        $controller->viewPlayerDivision($parametros[1],$parametros[2]);
    break;
    }
    case 'ver_arqueros': {
        $controller = new PublicController();     
        $controller->viewPlayersPosition("ARQUERO");
    break;
    }
    case 'ver_defensores': {
        $controller = new PublicController();     
        $controller->viewPlayersPosition("DEFENSOR");
    break;
    }
    case 'ver_volantes': {
        $controller = new PublicController();     
        $controller->viewPlayersPosition("VOLANTE");
    break;
    }
    case 'ver_delanteros': {
        $controller = new PublicController();     
        $controller->viewPlayersPosition("DELANTERO");
    break;
    }
    case 'ver_jugador_puesto': {
        $controller = new PublicController();     
        $controller->viewPlayerPosition($parametros[1],$parametros[2]);
    break;
    }


    //++++++++++++++++++++++++++++++++++++
    //++ Acciones del admin.controller +++
    //++++++++++++++++++++++++++++++++++++

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
    case 'editar_jugador': {
        $controller = new AdminController();  
        $controller->editDataPlayer($parametros[1]);
    break;
    }
    case 'guardar_edicion_jugador': {
        $controller = new AdminController();  
        $controller->modifyDataPlayer();
    break;
    }
    case 'eliminar_jugador': {
        $controller = new AdminController();  
        $controller->confirmDeletePlayer($parametros[1]);
    break;
    }
    case 'confirmar_eliminar_jugador': {
        $controller = new AdminController();  
        $controller->removePlayer($parametros[1]);
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
        $controller->confirmDeleteDivision($parametros[1]);
    break;
    }
    case 'confirmar_eliminar_division': {
        $controller = new AdminController();  
        $controller->removeDivision($parametros[1]);
    break;
    }

    //++++++++++++++++++++++++++++++++++++
    //++ Acciones del login.controller +++
    //++++++++++++++++++++++++++++++++++++

    case 'loguearse': {
        $controller = new LoginController();  
        $controller->loginAdmin();
    break;
    }
    case 'cerrar_sesion': {
        $controller = new LoginController();     
        $controller->logout();
    break;
    }

    //++++++++++++++++++++++++++++++++++++
    //+++++++ Acción por defecto +++++++++
    //++++++++++++++++++++++++++++++++++++

    default: {
        $controller = new PublicController();     
        $controller->showError("Se ha ejecutado una acción desconocida","images/errores/accion_desconocida.jpg");
    } 
    
    */
}
    