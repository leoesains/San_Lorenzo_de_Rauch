﻿<?php

require_once 'libs/smarty/Smarty.class.php';
require_once 'helpers/auth.helper.php';

class PublicView{
   
    private $smarty;
        
    public function __construct(){
        $this->smarty = new Smarty();
        $admin = authHelper::userLogged();
        $this->smarty->assign('isAdmin', $admin);
        $nameUser = authHelper::nameLogged();
        $this->smarty->assign('nameUser', $nameUser);
        $type = authHelper::typeLogged();
        $this->smarty->assign('type', $type);
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

    //Muestra un jugador específico y todos los jugadores del club
    public function showPlayer($jugador, $jugadores, $publicidades, $error = null) {
        $this->smarty->assign('datosJug', $jugador);
        $this->smarty->assign('listaJugadores', $jugadores);
        $this->smarty->assign('publicidades', $publicidades);
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/showPlayer.tpl');
    }

    //Muestra un jugador específico de una división
    //y todos los jugadores de la misma división del jugador
    public function showPlayerDivision($jugador, $jugadores, $publicidades, $error = null) {
        $this->smarty->assign('datosJug', $jugador);
        $this->smarty->assign('listaJugadores', $jugadores);
        $this->smarty->assign('publicidades', $publicidades);
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

    //Muestra todos los jugadores de una posición dada
    public function printPlayersByPosition($jugXpos, $error = null) {
        $this->smarty->assign('jugadoresXpuesto', $jugXpos);
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/printPlayersByPosition.tpl');
    }

    //Muestra un jugador específico de un puesto
    //y todos los jugadores del mismo puesto del jugador
     public function showPlayerPosition($jugador, $jugadores, $publicidades, $error = null) {
        $this->smarty->assign('datosJug', $jugador);
        $this->smarty->assign('listaJugadores', $jugadores);
        $this->smarty->assign('publicidades', $publicidades);
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/showPlayerPosition.tpl');
    }

    //Muestra un formulario para cargar un nuevo usuario
    public function formCheckIn($error = null, $usuario = null, $mail = null) {
        $this->smarty->assign('nombre', $usuario);
        $this->smarty->assign('mail', $mail);
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/formUserAdd.tpl');
    }

    //Mustra el formulario para asociarse
    public function showFormAsociarse() {
        $this->smarty->display('templates/showFormAsociarse.tpl');
    }

    //Muestra formulario para ingresar mail de usuario para
    //recuperar contraseña
    public function formNameUser($error = null){
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/formNameUser.tpl');
    } 

    //Muestra formulario para responder las preguntas secretas para
    //recuperar contraseña
    public function formPreguntas($respuesta1, $respuesta2, $id_usuario, $error = null){
        $this->smarty->assign('respuesta1', $respuesta1);
        $this->smarty->assign('respuesta2', $respuesta2);
        $this->smarty->assign('id_usuario', $id_usuario);
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/formPreguntas.tpl');
    }

    //Muestra formulario para ingresar la nueva contraseña para
    //recuperar contraseña
    public function formCambiarContraseña($id_usuario, $error = null) {
        $this->smarty->assign('id_usuario', $id_usuario);
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/formCambiarContraseña.tpl');
    }
}