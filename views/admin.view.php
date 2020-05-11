<?php

require_once 'libs/Smarty.class.php';

class AdminView{

    //muestra un formulario para elegir si quiere modificar jugadores o divisiones
    public function welcome($admin) {
        $smarty = new Smarty();
        $smarty->assign('nombre_admin', $admin);
        $smarty->display('templates/welcome.tpl');
    }

    //muestra un formulario para elegir si quiere modificar jugadores o divisiones
    public function chooseTask() {
        $smarty = new Smarty();
        
        $smarty->display('templates/chooseTask.tpl');
    }

    //
    public function showPlayersCrud($jugadores) {
        $smarty = new Smarty();
        $smarty->assign('listaJugadores', $jugadores);
        
        $smarty->display('templates/showPlayersCrud.tpl');
    }

    public function showDivisionsCrud($divisiones) {
        $smarty = new Smarty();
        $smarty->assign('listaDivisiones', $divisiones);

        $smarty->display('templates/showDivisionsCrud.tpl');
    }    

    public function formPlayerAdd($divisiones) {
        $smarty = new Smarty();
        $smarty->assign('listaDivisiones', $divisiones);

        $smarty->display('templates/formPlayerAdd.tpl');
    }

    public function formDivisionAdd() {
        $smarty = new Smarty();

        $smarty->display('templates/formDivisionAdd.tpl');
    }

    public function keyWord() {
        $smarty = new Smarty();

        $smarty->display('templates/keyWord.tpl');
    }

    public function keyWordError() {
        $smarty = new Smarty();

        $smarty->display('templates/keyWordError.tpl');
    }

    public function adminForm() {
        $smarty = new Smarty();

        $smarty->display('templates/adminForm.tpl');
    }
    public function adminFormError() {
        $smarty = new Smarty();

        $smarty->display('templates/adminFormError.tpl');
    }

    public function showFormEditionPlayer($jug){
        $smarty = new Smarty();
        $smarty->assign('jugador', $jug);
        $smarty->display('templates/showFormEditionPlayer.tpl');

    }
    public function showFormEditionDivision($div){
        $smarty = new Smarty();
        $smarty->assign('division', $div);
        $smarty->display('templates/showFormEditionDivision.tpl');

    }

}