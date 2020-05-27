<?php
require_once 'models/divisiones.model.php';
require_once 'models/jugadores.model.php';
require_once 'views/public.view.php';
require_once 'helpers/auth.helper.php';

class PublicController{

    //Variables globales del controlador
    private $modelDivisiones;
    private $modelJugadores;
    private $view;
    
    //private $admin; //administrador


    public function __construct(){ //Constructor de la clase
        $this->modelDivisiones = new DivisionesModel();
        $this->modelJugadores = new JugadoresModel();
        $this->view = new PublicView();
    }

    public function home(){
        $this->view->showHome();
    }

    //muestra todos los jugadores que hay cargados en la BBDD
    public function showPlayer() {
        
        //Pido los jugadores al modelo
        $jugadores = $this->modelJugadores->getAll();
        
        //Actualizo la vista
        $this->view->showPlayers($jugadores);
    }

    //muestra un jugador
    public function viewPlayer($idJugador) {
        $jugadores = $this->modelJugadores->getAll();
        $jugador = $this->modelJugadores->get($idJugador);
        
        if(!empty($jugador))
            $this->view->showPlayer($jugador, $jugadores);
        else
            $this->view->showError("El jugador con id = " .$idJugador. " no se encuentra en la Base de Datos", true);
    }

    public function viewPlayerDivision($idJugador, $division) {
        $jugadoresXdivisiones = $this->modelJugadores->getPlayerDivisions($division);
        $jugador = $this->modelJugadores->get($idJugador);
        if(!empty($jugador))
            $this->view->showPlayerDivision($jugador, $jugadoresXdivisiones);
        else
            $this->view->showError("El jugador con id = " .$idJugador. " no se encuentra en la Base de Datos",true);
    }

    //muestra todas las divisiones cargadas en la BBDD
    public function showDivision() {
        //pido las divisiones al modelo
        $divisiones = $this->modelDivisiones->getAll();
        
        //actualizo la vista
        $this->view->showDivisions($divisiones);
    }

    //muestra los jugadores de una division especifica
    public function showPlayersByDivision($division){
        $jugadoresXdivisiones = $this->modelJugadores->getPlayerDivisions($division);
        $this->view->printPlayersByDivision($jugadoresXdivisiones);
    }
    
    public function showError($msg, $isAdmin){
        //Le digo a la VISTA que me muestre el error en pantalla
        $this->view->printError($msg, $isAdmin);
    }

    public function viewPlayersPosition($puesto){
        
        $jugadoresXpuesto = $this->modelJugadores->getPlayerPosition($puesto);
        $this->view->printPlayersByPosition($jugadoresXpuesto);
    }

    public function viewPlayerPosition($idJugador, $puesto) {
        $jugadoresXpuesto = $this->modelJugadores->getPlayerPosition($puesto);
        $jugador = $this->modelJugadores->get($idJugador);
        if(!empty($jugador))
            $this->view->showPlayerPosition($jugador, $jugadoresXpuesto);
        else
            $this->view->showError("El jugador con id = " .$idJugador. " no se encuentra en la Base de Datos",true);
    }

}