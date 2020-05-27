<?php

require_once 'libs/Smarty.class.php';

class PublicView{
   
    private $smarty;
        
    public function __construct(){
        $this->smarty = new Smarty();
        $admin = authHelper::userLogged();
        $this->smarty->assign('isAdmin', $admin);
    }

    //Muestra la pagina de inicio
    public function showHome($error = null){
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/showHome.tpl');
    }

    //Muestra un error por pantalla
    public function printError($msg) {
        $this->smarty->assign('mensaje', $msg);
        $this->smarty->display('templates/printError.tpl');
    }

    //Muestra un mensaje si la base de datos esta vacia
    public function printDDBBvacia($msg) {
        $this->smarty->assign('mensaje', $msg);
        $this->smarty->display('templates/printDDBBvacia.tpl');
    }

    //Muestra todos los jugadores
    public function showPlayers($jugadores, $error = null) {
        $this->smarty->assign('listaJugadores', $jugadores);
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/showPlayers.tpl');
    }

    //Muestra un jugador especìfico y todos los jugadores del club
    public function showPlayer($jugador, $jugadores, $error = null) {
        $this->smarty->assign('datosJug', $jugador);
        $this->smarty->assign('listaJugadores', $jugadores);
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/showPlayer.tpl');
    }

    //Muestra un jugador especìfico y todos los jugadores de la divisiòn del jugador o todos los jugadores del puesto del jugador
    public function showPlayerDivision($jugador, $jugadores, $error = null) {
        $this->smarty->assign('datosJug', $jugador);
        $this->smarty->assign('listaJugadores', $jugadores);
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/showPlayerDivision.tpl');
    }

    //Muestra todas las divisiones
    public function showDivisions($divisiones, $error = null) {
        $this->smarty->assign('listaDivisiones', $divisiones);
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/showDivisions.tpl');
    }

    //Muestra todos los jugadores de una division
    public function printPlayersByDivision($jugXdiv, $error = null) {
       $this->smarty->assign('jugadoresXdivisiones', $jugXdiv);
       $this->smarty->assign('error', $error);
       $this->smarty->display('templates/printPlayersByDivision.tpl');
    }

    //Muestra todos los jugadores de una posiciòn
    public function printPlayersByPosition($jugXpos, $error = null) {
        $this->smarty->assign('jugadoresXpuesto', $jugXpos);
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/printPlayersByPosition.tpl');
    }

    //Muestra el perfìl de un jugador y todos los jugadores de la posiciòn de dicho jugador
     public function showPlayerPosition($jugador, $jugadores, $error = null) {
        $this->smarty->assign('datosJug', $jugador);
        $this->smarty->assign('listaJugadores', $jugadores);
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/showPlayerPosition.tpl');
    }
}