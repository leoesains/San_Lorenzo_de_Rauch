<?php

require_once 'controllers/public.controller.php';
require_once 'controllers/login.controller.php';
require_once 'controllers/adminPlayers.controller.php';
require_once 'controllers/adminDivisions.controller.php';
require_once 'controllers/adminPublicidades.controller.php';

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
    case 'asociarse': {
        $controller = new PublicController();     
        $controller->viewAsociarse();
        break;
    }
    case 'recuperar_contraseña': {
        $controller = new PublicController();     
        $controller->formPedirUsuario();
        break;
    }

    case 'viewIsUser': {
        $controller = new PublicController();     
        $controller->verificarUsuario();
        break;
    }
    case 'verificar_respuestas': {
        $controller = new PublicController();     
        $controller->verificarRespuestas();
        break;
    }
    case 'cambiar_contraseña': {
        $controller = new PublicController();     
        $controller->actualizarContraseña();
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

    case 'mostrar_abm_publicidades': {
        $controller = new PublicidadesController();  
        $controller->showABMPublicidades();
        break;
    }
    
    case 'agregar_publicidad': {
        $controller = new PublicidadesController();  
        $controller->formPublicidad();
        break;
    }
    case 'guardar_publicidad': {
        $controller = new PublicidadesController();  
        $controller->addPublicidad();
        break;
    }
    
    case 'eliminar_foto': {
        $controller = new PublicidadesController();  
        $controller->deleteFotos($parametros[1]);
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
    case 'registrarse': {
        $controller = new LoginController();     
        $controller->formCheckIn();
        break;
    }
    case 'guardar_usuario': {
        $controller = new LoginController();     
        $controller->addUser();
        break;
    }
    case 'listar_usuarios': {
        $controller = new LoginController();     
        $controller->showUsers();
        break;
    }
    case 'eliminar_usuario': {
        $controller = new LoginController();     
        $controller->confirmDeleteUser($parametros[1]);
        break;
    }
    case 'confirmar_eliminar_usuario': {
        $controller = new LoginController();     
        $controller->removeUser($parametros[1]);
        break;
    }
    case 'editar_usuario': {
        $controller = new LoginController();     
        $controller->editUser($parametros[1]);
        break;
    }
        
    //+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    //+++++++++++++++++++ Acción por defecto ++++++++++++++++++++
    //+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

    default: {
        $controller = new PublicController();     
        $controller->showError("Se ha ejecutado una acción desconocida","images/errores/accion_desconocida.jpg");
    } 
}
    