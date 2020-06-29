<?php

require_once 'models/comentarios.model.php';
require_once 'api/api.view.php';


class CommentsApiController {

    private $model;
    private $view;
    private $data;

    public function __construct() {
        $this->model = new ComentariosModel();
        $this->view = new APIView();
        $this->data = file_get_contents("php://input");  //Lee el input ingresado
    }

    public function getComments($params = []) {
       
        /*
        $orden = [];
        if(isset($_GET['sort'])) {
            $orden['sort'] = $_GET['sort'];
            if(isset($_GET['order'])) {
                $orden['order'] = $_GET['order'];
            }
        }
        */
        $id_jugador = $params[':ID'];  //Obtengo el id del jugador del arreglo asociativo $params
        $comentarios = $this->model->getAll($id_jugador);
        
        if(!empty($comentarios)) {
            $this->view->response($comentarios, 200); 
        } else {
            $this->view->response($comentarios, 404); // devuelve un arreglo vacío
        }
    }

    public function deleteComment($params = []) {
        $id_comentario = $params[':ID'];
        //faltaria preguntar si esta seguro en eliminar el comentario
        $comentario = $this->model->get($id_comentario);
        if(!empty($comentario)) {
            $this->model->delete($id_comentario);
            $this->view->response("El comentario nùmero {$id_comentario} se elimino satisfactoriamente ", 200);
        } else {
            $this->view->response("El comentario nùmero {$id_comentario} no existe ", 404); 
        }
    }

    public function getData() {
        return json_decode($this->data);
    }

    public function addComment() {
        //Devuelve el objeto JSON enviado por POST ($body es un objeto JSON)
        $body = $this->getData();

        $comentario = $body->comentario;
        $usuario = $body->usuario;
        $fecha = $body->fecha;
        $puntaje = $body->puntaje;
        $id_jugador = $body->id_jugador;
        $id_comentario = $this->model->insert($comentario, $usuario, $fecha, $puntaje, $id_jugador);

        if($id_comentario) {
            $this->view->response("Se agrego el comentario nùmero: {$id_comentario}", 200);
        } else {
            $this->view->response("El comentario no se pudo agregar ", 500);
        }

    }


}