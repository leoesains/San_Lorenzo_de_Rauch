<?php

require_once 'libs/Smarty.class.php';

class PublicView{
   
    private $smarty;
    
    
    
    public function __construct(){
        $this->smarty = new Smarty();
        $admin = authHelper::userLogged();
        $this->smarty->assign('isAdmin', $admin);
        
    }

    public function showHome($error = null){
        
        $this->smarty->assign('error', $error);
        //$this->smarty->assign('nombreUsuario', $nameAdmin);
        $this->smarty->display('templates/showHome.tpl');
    }

    public function printError($msg) {
        $this->smarty->assign('mensaje', $msg);
        $this->smarty->display('templates/printError.tpl');
    }

    public function showPlayers($jugadores, $error = null) {
        $this->smarty->assign('listaJugadores', $jugadores);
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/showPlayers.tpl');
    }

    public function showPlayer($jugador, $jugadores, $error = null) {
        $this->smarty->assign('datosJug', $jugador);
        $this->smarty->assign('listaJugadores', $jugadores);
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/showPlayer.tpl');
    }

    public function showPlayerDivision($jugador, $jugadores, $error = null) {
        $this->smarty->assign('datosJug', $jugador);
        $this->smarty->assign('listaJugadores', $jugadores);
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/showPlayerDivision.tpl');
    }
    public function showDivisions($divisiones, $error = null) {
        $this->smarty->assign('listaDivisiones', $divisiones);
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/showDivisions.tpl');
    }    

    public function printPlayersByDivision($jugXdiv, $error = null) {
       $this->smarty->assign('jugadoresXdivisiones', $jugXdiv);
       $this->smarty->assign('error', $error);
       $this->smarty->display('templates/printPlayersByDivision.tpl');
    }

    public function printPlayersByPosition($jugXpos, $error = null) {
        $this->smarty->assign('jugadoresXpuesto', $jugXpos);
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/printPlayersByPosition.tpl');
     }

     public function showPlayerPosition($jugador, $jugadores, $error = null) {
        $this->smarty->assign('datosJug', $jugador);
        $this->smarty->assign('listaJugadores', $jugadores);
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/showPlayerPosition.tpl');
    }

}