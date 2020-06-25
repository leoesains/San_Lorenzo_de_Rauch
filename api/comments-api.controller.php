<?php

require_once 'models/comentarios.model.php';
require_once 'api/api.view.php';


class CommentsApiController {

    private $model;
    private $view;

    public function __construct() {
        $this->model = new ComentariosModel();
        $this->view = new APIView();
    }

    public function getComments($params) {
        $id_jugador = $params[':ID'];                       //Obtengo el id del jugador del arreglo asociativo $params
        $comentarios = $this->model->getAll($id_jugador);
        if(!empty($comentarios)) {
            $this->view->response($comentarios, 200); 
        } else {
            $this->view->response("No hay comentarios del jugador ", 404);
        }

        
    }


}