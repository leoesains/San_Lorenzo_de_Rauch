<?php

require_once 'controllers/public.controller.php';

// definimos la base url de forma dinamica
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

//defino una accion por defecto
if(empty($_GET['action'])){
    $_GET['action'] = 'home';
}
$accion = $_GET['action'];
$parametros = explode('/', $accion);

switch($parametros[0]){
    case 'home':
        $controller = new PublicController();     
        $controller->home();
    break;
    case 'listarJugadores':
        $controller = new PublicController();     
        $controller->mostrarJugadores();
    break;
    case 'verJugador':
        $controller = new PublicController();     
        $controller->verJugador();
    break;
    case 'listarDivisiones':
        $controller = new PublicController();     
        $controller->mostrarDivisiones();
    break;
    case 'divisiones_jugadores':
        $controller = new PublicController();     
        $controller->mostrarJugadoresXDivision();
    break;
    default:
        $controller = new PublicController();     
        $controller->mostrarError("Se ha ejecutado una acción desconocida","images/errores/accion_desconocida.jpg");
}
    