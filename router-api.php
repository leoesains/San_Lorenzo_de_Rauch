<?php

require_once 'libs/router/Router.php';

//Creo el ruteador usando la libreria externa que tengo guarda en la carpeta libs
$router = new Router();

//Creo la tabla de ruteo
$router->addRoute('comentarios/:ID', 'GET', 'CommentsApiController', 'getComments'); //obtengo todos los comentarios de un jugador dado

//Rutea
$router->route($_REQUEST['resource'], $_SERVER['REQUEST_METHOD']);       //$_REQUEST['resource']: recurso del usuario, $_SERVER['REQUEST_METHOD']: verbo

