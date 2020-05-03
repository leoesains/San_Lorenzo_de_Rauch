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
        echo '<h1>El HOME está en construcción</h1>';
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
    
    public function mostrarError($msg,$img){
        //Le digo a la VISTA que me muestre el error en pantalla
        $this->view->imprimirError($msg,$img);
    }

}