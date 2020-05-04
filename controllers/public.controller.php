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
        $divisiones = $this->modelDivisiones->getAll();
        $this->view->showHome($divisiones);
    }

    public function showPlayer() {
        //pido los jugadores al modelo
        $jugadores = $this->modelJugadores->getAll();

        //actualizo la vista
        $this->view->showPlayers($jugadores);
    }
    
    public function viewPlayer($idJugador) {
        $jugador = $this->modelJugadores->get($idJugador);

        if(!empty($jugador))
            $this->view->showPlayer($jugador);
        //else
          //  $this->view->showError("La tarea no existe");
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
 
    public function showPlayer() {
        //pido los jugadores al modelo
        $jugadores = $this->modelJugadores->getAll();

        //actualizo la vista
        $this->view->showPlayers($jugadores);
    }
    
    public function viewPlayer($idJugador) {
        $jugador = $this->modelJugadores->get($idJugador);

        if(!empty($jugador))
            $this->view->showPlayer($jugador);
        //else
          //  $this->view->showError("La tarea no existe");
    }

    public function showDivision() {
        //pido las divisiones al modelo
        $divisiones = $this->modelDivisiones->getAll();

        //actualizo la vista
        $this->view->showDivisions($divisiones);
    }
 
    public function showError($msg,$img){
        //Le digo a la VISTA que me muestre el error en pantalla
        $this->view->printError($msg,$img);
    }

}