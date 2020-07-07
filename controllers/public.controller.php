<?php
require_once 'models/divisiones.model.php';
require_once 'models/jugadores.model.php';
require_once 'views/public.view.php';
require_once 'helpers/auth.helper.php';
require_once 'models/publicidades.model.php';
require_once 'models/login.model.php';

class PublicController{

    //Variables globales del controlador
    private $modelDivisiones;
    private $modelJugadores;
    private $view;
    private $modelPublicidades;
    private $modelLogin;
    
    public function __construct(){                  //Constructor de la clase
        $this->modelDivisiones = new DivisionesModel();
        $this->modelJugadores = new JugadoresModel();
        $this->view = new PublicView();
        $this->modelPublicidades = new PublicidadesModel();
        $this->modelLogin = new LoginModel();
    }

    //Muestra la pagina de inicio
    public function home(){
        $this->view->showHome();
    }

    //muestra todos los jugadores que hay cargados en la BBDD
    public function showPlayer() {
        $jugadores = $this->modelJugadores->getAll();               //Pido los jugadores al modelo

        if(empty($jugadores)) {
            $this->DDBBvacia("No hay jugadores en la Base de Datos");
        } else {
            $this->view->showPlayers($jugadores);                       //Actualizo la vista
        }
    }

    //muestra Perfil de un jugador y la lista de jugadores para ver otros perfiles 
    public function viewPlayer($idJugador) {
        $jugadores = $this->modelJugadores->getAll();
        $jugador = $this->modelJugadores->get($idJugador);
        $publicidades = $this->modelPublicidades->getAll();
        if(!empty($jugador)) {
            $this->view->showPlayer($jugador, $jugadores, $publicidades);
        } else {
            $this->DDBBvacia("El jugador no se encuentra en la Base de datos");
        }
    }

    //muestra Perfil de un jugador y una lista de todos los jugadores de la misma división
    public function viewPlayerDivision($idJugador, $division) {
        $jugadoresXdivisiones = $this->modelJugadores->getPlayerDivisions($division);
        $jugador = $this->modelJugadores->get($idJugador);
        $publicidades = $this->modelPublicidades->getAll();
        if(!empty($jugador)) {
            $this->view->showPlayerDivision($jugador, $jugadoresXdivisiones, $publicidades);
        } else {
            $this->DDBBvacia("El jugador no se encuentra en la Base de Datos");
        }
    }

    //muestra todas las divisiones cargadas en la BBDD
    public function showDivision() {
        $divisiones = $this->modelDivisiones->getAll();             //pido las divisiones al modelo

        if(empty($divisiones)) {
            $this->DDBBvacia("Aún no se ha cargado ninguna División");
        } else {
            $this->view->showDivisions($divisiones);                //actualizo la vista
        }
    }

    //muestra los jugadores de una division especifica
    public function showPlayersByDivision($division){
        $jugadoresXdivisiones = $this->modelJugadores->getPlayerDivisions($division);

        if(empty($jugadoresXdivisiones)) {
            $this->DDBBvacia("No hay Jugadores cargados en esta División");
        } else {
            $this->view->printPlayersByDivision($jugadoresXdivisiones);
        }
    }

    //Le digo a la VISTA que me muestre un ERROR en pantalla
    public function showError($msg){
        $this->view->printError($msg);
    }

    //Le digo a la VISTA que me muestre un MENSAJE en pantalla
    public function DDBBvacia($msg){
        $this->view->printDDBBvacia($msg);
    }

    //muestra los jugadores de un determinado puesto ($puesto)
    public function viewPlayersPosition($puesto){
        $jugadoresXpuesto = $this->modelJugadores->getPlayerPosition($puesto);

        if(empty($jugadoresXpuesto)) {
            $this->DDBBvacia("No hay Jugadores cargados en la Base de Datos en el puesto " .$puesto);
        } else {
            $this->view->printPlayersByPosition($jugadoresXpuesto);
        }
    }

    //muestra el Perfil de un jugador ($idJugador), de un determinado puesto ($puesto)
    //y una lista de jugadores del mismo puesto.
    public function viewPlayerPosition($idJugador) {
        
        //sacar parametro puesto
        $jugador = $this->modelJugadores->get($idJugador);
        $jugadoresXpuesto = $this->modelJugadores->getPlayerPosition($jugador->puesto);
        $publicidades = $this->modelPublicidades->getAll();

        if(!empty($jugador)) {
            $this->view->showPlayerPosition($jugador, $jugadoresXpuesto, $publicidades); 
        } else {
            $this->DDBBvacia("El Jugador no se encuentra en la Base de Datos");
        }
    }

    public function viewAsociarse(){
        $this->view->showFormAsociarse();
    }

    public function formPedirUsuario(){
        $this->view->formNameUser();
    } 

    public function verificarUsuario(){
        if(empty($_POST['mail'])){
            $this->view->formNameUser("No ingresó un mail! ");
            die;
        }
        $mail = $_POST['mail'];
        $usuario = $this->modelLogin->getMail($mail);
        if(!$usuario){
            $this->view->formNameUser("No existe el mail ingresado! ");
            die;
        }
        $respuesta1 = $usuario->respuesta1;
        $respuesta2 = $usuario->respuesta2;
        $id_usuario = $usuario->id_usuario;
        $this->view->formPreguntas($respuesta1, $respuesta2, $id_usuario);
    }
    public function verificarRespuestas(){
        
        if(empty($_POST['resp1']) || empty($_POST['resp2'])){
            $this->view->formPreguntas($_POST['respuesta1'], $_POST['respuesta2'], $_POST['id_usuario'], "Debe responder las dos preguntas!");
            die;
        }
        /**Controlar las respuestas */
        if(password_verify($_POST['resp1'], $_POST['respuesta1']) && password_verify($_POST['resp2'], $_POST['respuesta2'])){
            $this->view->formCambiarContraseña($_POST['id_usuario']);
        }
        else
        {
            $this->view->formPreguntas($_POST['respuesta1'], $_POST['respuesta2'], $_POST['id_usuario'], "Verifique sus respuestas");
            die;
        }
    }

    public function actualizarContraseña(){
        if(empty($_POST['contraseña']) || empty($_POST['repitaContraseña'])){
            $this->view->formCambiarContraseña($_POST['id_usuario'], "Debe ingresar todos los campos pedidos");
            die;
        }
        if($_POST['contraseña'] != $_POST['repitaContraseña']){
            $this->view->formCambiarContraseña($_POST['id_usuario'], "Las contraseñas no coinciden");
            die;
        }
        $contraseña = $_POST['contraseña'];
        $id_usuario = $_POST['id_usuario'];
        $passwordCifrado = password_hash($contraseña, PASSWORD_DEFAULT);
        $this->modelLogin->updatePassword($id_usuario, $passwordCifrado);
        $this->view->showHome("Se reestableció correctamente su contraseña");
    }

}