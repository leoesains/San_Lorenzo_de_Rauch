<?php

require_once 'libs/router/Router.php';
require_once 'api/comments-api.controller.php';

//Creo el ruteador usando la libreria externa que tengo guarda en la carpeta libs
$router = new Router();

//Creo la tabla de ruteo
$router->addRoute('jugadores/:ID/comentarios', 'GET', 'CommentsApiController', 'getComments'); //Obtengo todos los comentarios sobre un jugador dado (id del jugador)
$router->addRoute('comentario/:ID', 'DELETE', 'CommentsApiController', 'deleteComment'); //Elimino un comentario (id del comentario)
$router->addRoute('comentario', 'POST', 'CommentsApiController', 'addComment'); //Agrego un comentario



//$router->addRoute('comentarios/:ID', 'GET', 'CommentsApiController', 'getComments'); //Obtengo todos los comentarios sobre un jugador dado (id del jugador)
//$router->addRoute('comentario/:ID', 'DELETE', 'CommentsApiController', 'deleteComment'); //Elimino un comentario (id del comentario)
//$router->addRoute('comentario', 'POST', 'CommentsApiController', 'addComment'); //Agrego un comentario

//Rutea
$router->route($_REQUEST['resource'], $_SERVER['REQUEST_METHOD']);       //$_REQUEST['resource']: recurso del usuario, $_SERVER['REQUEST_METHOD']: verbo