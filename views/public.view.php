<?php

require_once 'libs/Smarty.class.php';

class PublicView{
   
    private $smarty;
    
    public function __construct(){
        $this->smarty = new Smarty();
    }

    public function showHome(){
        $this->smarty->display('templates/showHome.tpl');
    }

    public function printError($msg) {
        $this->smarty->assign('mensaje', $msg);
        $this->smarty->display('templates/printError.tpl');
    }

    public function showPlayers($jugadores, $admin) {
        $this->smarty->assign('listaJugadores', $jugadores);
        $this->smarty->assign('isAdmin', $admin);
        $this->smarty->display('templates/showPlayers.tpl');
    }

    public function showPlayer($jugador, $jugadores, $admin) {
        $this->smarty->assign('datosJug', $jugador);
        $this->smarty->assign('listaJugadores', $jugadores);
        $this->smarty->assign('isAdmin', $admin);
        $this->smarty->display('templates/showPlayer.tpl');
    }

    public function showPlayerDivision($jugador, $jugadores) {
        $this->smarty->assign('datosJug', $jugador);
        $this->smarty->assign('listaJugadores', $jugadores);
        $this->smarty->display('templates/showPlayerDivision.tpl');
    }
    public function showDivisions($divisiones, $admin) {
        $this->smarty->assign('listaDivisiones', $divisiones);
        $this->smarty->assign('isAdmin', $admin);
        $this->smarty->display('templates/showDivisions.tpl');
    }    

    public function printPlayersByDivision($jugXdiv) {
       $this->smarty->assign('jugadoresXdivisiones', $jugXdiv);
       $this->smarty->display('templates/printPlayersByDivision.tpl');
    }
}