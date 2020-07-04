<?php

//controller padre, players.controller y divisions.controller heredan de aca

require_once 'models/divisiones.model.php';
require_once 'models/jugadores.model.php';
require_once 'models/comentarios.model.php';
require_once 'views/public.view.php';
require_once 'views/admin.view.php';
require_once 'helpers/auth.helper.php';

class AdminBaseController{

    //Variables globales del controlador
    private $modelDivisiones;
    private $modelJugadores;
    private $modelComments;
    private $viewAdmin;
    private $viewPublic;
    
    public function __construct() { //Constructor de la clase
        authHelper::checkLogged();
        $this->modelDivisiones = new DivisionesModel();
        $this->modelJugadores = new JugadoresModel();
        $this->modelComments = new ComentariosModel();
        $this->viewAdmin = new AdminView();
        $this->viewPublic = new PublicView();
    }

    public function getModelDivisions() {
        return $this->modelDivisiones;
    }

    public function getModelPlayers() {
        return $this->modelJugadores;
    }

    public function getModelComments() {
        return $this->modelComments;
    }

    public function getViewAdmin() {
        return $this->viewAdmin;
    }

    public function getViewPublic() {
        return $this->viewPublic;
    }

    //Le digo a la VISTA que me muestre un mensaje por pantalla
    public function DDBBvacia($msg){
        $this->viewPublic->printDDBBvacia($msg);
    }
}
