<?php

class AuthHelper {

    //verifica que haya un usuario logueado
    static public function userLogged() {
        if(session_status() != PHP_SESSION_ACTIVE){
            session_start();
        }
        if(isset($_SESSION['IS_LOGGED'])) {
            return true;
        }
        return false;
    }

    //verifica que haya un usuario logueado y si no lo hay redirecciona a home
    static public function checkLogged() {
        session_start(); 
        if (!isset($_SESSION['NOMBRE_USUARIO']) || $_SESSION['TIPO'] != "administrador") {
            header('Location: ' . BASE_URL . 'home');
            die();
        } else {
            return $_SESSION['NOMBRE_USUARIO'];
        }
    }

    //verifica que haya un usuario logueado y devuelve su nombre
    static public function nameLogged() {
        if(session_status() != PHP_SESSION_ACTIVE){
            session_start();
        }
        if(isset($_SESSION['IS_LOGGED'])) {
            return $_SESSION['NOMBRE_USUARIO'];
        }
        return null;
    }

    //verifica que haya un usuario logueado y devuelve el tipo de administrador
    static public function typeLogged() {
        if(session_status() != PHP_SESSION_ACTIVE){
            session_start();
        } 
        if (isset($_SESSION['TIPO'])) {
            return $_SESSION['TIPO'];
        } else {
            return null;
        }
    }

    
}
