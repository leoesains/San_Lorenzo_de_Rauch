<?php

class AuthHelper {

    //verifica que haya un usuario logueado
    static public function userLoggued() {
        session_start();
        if(isset($_SESSION['IS_LOGGED'])) {
            return true;
        }
        return false;
    }
    
    
}
