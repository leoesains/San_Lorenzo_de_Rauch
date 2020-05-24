<?php

require_once 'libs/Smarty.class.php';

class AdminView{

    private $smarty;
    
    public function __construct(){
        $this->smarty = new Smarty();
    }

    //muestra un formulario para elegir si quiere modificar jugadores o divisiones
    public function welcome($admin) {
        $this->smarty->assign('nombre_admin', $admin);
        $this->smarty->display('templates/welcome.tpl');
    }

    //muestra un formulario para elegir si quiere modificar jugadores o divisiones
    public function chooseTask() {
        $this->smarty->display('templates/chooseTask.tpl');
    }

    //
    public function showPlayersCrud($jugadores) {
        $this->smarty->assign('listaJugadores', $jugadores);
        $this->smarty->display('templates/showPlayersCrud.tpl');
    }

    public function showDivisionsCrud($divisiones) {
        $this->smarty->assign('listaDivisiones', $divisiones);
        $this->smarty->display('templates/showDivisionsCrud.tpl');
    }    

    public function formPlayerAdd($divisiones) {
        $this->smarty->assign('listaDivisiones', $divisiones);
        $this->smarty->display('templates/formPlayerAdd.tpl');
    }

    public function formDivisionAdd() {
        $this->smarty->display('templates/formDivisionAdd.tpl');
    }

    public function showFormEditionPlayer($jug, $divisiones){
        $this->smarty->assign('jugador', $jug);
        $this->smarty->assign('listaDivisiones', $divisiones);
        $this->smarty->display('templates/showFormEditionPlayer.tpl');
    }
    public function showFormEditionDivision($div){
        $this->smarty->assign('division', $div);
        $this->smarty->display('templates/showFormEditionDivision.tpl');
    }
    public function alert($msg){
        $this->smarty->assign('mensaje', $msg);
        $this->smarty->display('templates/alert.tpl');
    }
}