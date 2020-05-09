<?php

require_once 'libs/Smarty.class.php';

class PublicView{
   
    public function showHome(){
        $smarty = new Smarty();
        
        $smarty->display('templates/showHome.tpl');
    }

    public function printError($msg) {
        $smarty = new Smarty();
        $smarty->assign('mensaje', $msg);
        
        $smarty->display('templates/printError.tpl');
    }

    public function showPlayers($jugadores) {
        $smarty = new Smarty();
        $smarty->assign('listaJugadores', $jugadores);
        
        $smarty->display('templates/showPlayers.tpl');
    }

    public function showPlayer($jugador) {
        $smarty = new Smarty();
        $smarty->assign('datosJug', $jugador);

        $smarty->display('templates/showPlayer.tpl');
    }

    public function showDivisions($divisiones) {
        $smarty = new Smarty();
        $smarty->assign('listaDivisiones', $divisiones);
        
        $smarty->display('templates/showDivisions.tpl');
    }    

    public function printPlayersByDivision($jugXdiv) {
       $smarty = new Smarty();
       $smarty->assign('jugadoresXdivisiones', $jugXdiv);

       $smarty->display('templates/printPlayersByDivision.tpl');
    }
}