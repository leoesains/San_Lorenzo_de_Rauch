<?php
require_once 'models/divisiones.model.php';
require_once 'models/jugadores.model.php';
require_once 'views/public.view.php';

class PublicController{

    //Variables globales del controlador
    private $modelDivisiones;
    private $modelJugadores;
    private $view;

    public function __construct(){ //Constructor de la clase
        $this->modelDivisiones = new DivisionesModel();
        $this->modelJugadores = new JugadoresModel();
        $this->view = new PublicView();
    }

    public function home(){
        $this->view->showHome();
    }
    
    public function showPlayer() {
        //Pido los jugadores al modelo
        $jugadores = $this->modelJugadores->getAll();
        //Actualizo la vista
        $this->view->showPlayers($jugadores);
    }
    
    public function viewPlayer($idJugador) {
        $jugador = $this->modelJugadores->get($idJugador);
        if(!empty($jugador))
            $this->view->showPlayer($jugador);
        else
            $this->view->showError("El jugador con id = " .$idJugador. " no se encuentra en la Base de Datos");
    }

    public function showDivision() {
        //pido las divisiones al modelo
        $divisiones = $this->modelDivisiones->getAll();
        //actualizo la vista
        $this->view->showDivisions($divisiones);
    }
 
    public function showPlayersByDivision($division){
        $jugadoresXdivisiones = $this->modelJugadores->getPlayerDivisions($division);
        $this->view->printPlayersByDivision($jugadoresXdivisiones);
    }
 

    public function showError($msg){
        //Le digo a la VISTA que me muestre el error en pantalla
        $this->view->printError($msg);
    }

}