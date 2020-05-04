<?php

class PublicView{
    //<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
            
    private function encabezado(){
        echo '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <base href=" ' .BASE_URL. ' ">
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>San Lorenzo de Rauch</title>
            <link rel="stylesheet" href="css/estilos.css">
        </ head>
        <body>
        ';
    }
    
    private function pie(){
        echo '
            </body>
        </html>
        ';
    }
    
    public function showHome($divisiones){
        $this->encabezado();
        echo '
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">CLUB ATLÉTICO Y SOCIALSAN LORENZO DE RAUCH</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="home">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="listarJugadores">Jugadores</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="listarDivisiones">Divisiones</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Jugadores por División
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">';
                            foreach($divisiones as $division){
                                $idDivision = $division->id_division; //Para agregar a la accion del href el id que quiero borrar o mofificar
                                $nombreDivision = $division->nombre_div;
                                echo '<a class="dropdown-item" href="divisiones_jugadores/' .$idDivision. '">' .$nombreDivision. '</a>';
                            }
                echo '  </div>
                    </li>
                </ul>
            </div>
        </nav>
        ';
        echo '<div>';
        echo "</div>";
        $this->pie();
    }


    public function printError($msg,$img) {
        $this->encabezado();
        echo '
        <nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary">
            <a class="navbar-brand" href="#">Tareas</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="listar">Home<span class="sr-only">(current)</span></a>
                </li>
            </div>
        </nav>
        ';

        echo "<div class='text-center'>
                <h2>Error</h2>
                <h5>$msg</h5>
                <img src=" .$img. "> 
              </div>";

        echo '<div class="text-center"><a class="" href="'.BASE_URL . 'home">Volver</a></div>';

        $this->pie();
    }

    /* 
    
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary">
            <a class="navbar-brand" href="#">Club Atlético y Social San Lorenzo de Rauch</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="home">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="listarJugadores">Jugadores<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="listarDivisiones">Divisiones<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="divisiones_jugadores">Jugadores por División<span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    
    */


    public function showPlayers($jugadores) {

        echo '
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <base href="' . BASE_URL . '">
                <title>Lista de Jugadores</title>
                <link rel="stylesheet" href="css/estilos.css">
            </head>
            <body>
        ';
    
        echo '<h1> Lista de Jugadores</h1>';
        //armamos la lista de jugadores
        echo "<ul>";
        foreach($jugadores as $jugador) {
            $idJugador = $jugador->id_jugador;
            echo '<li>';
            //echo ' <b>' . $jugador->nombre . "</b> - ";
            echo '<a href="verJugador/'.$idJugador.'">' .$jugador->nombre. '</a>';
        }
        echo "</ul>";
    
        echo '
            </body>
            </html>
        ';
    }

    public function showPlayer($jugador) {

        echo '
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <base href="' . BASE_URL . '">
                <title>Jugador</title>
                <link rel="stylesheet" href="css/estilos.css">
            </head>
            <body>
        ';
    
        echo '<h1>Jugador</h1>';
        //armamos la lista de jugadores
        echo "<ul>";
            echo '<li>';
            echo ' <b>' . $jugador->nombre . "</b> - ";
            echo $jugador->edad . "---";
            echo $jugador->fecha_nac . "---";
            //echo $jugador->#carnet . "---";
            echo $jugador->puesto . "---";
            echo $jugador->club_origen . "---";
            echo $jugador->telefono . "---";
            echo $jugador->id_division . "---";
            echo '<img src=' .$jugador->imagen. '>';
            echo '</li>';
        echo "</ul>";
    
        echo '
            </body>
            </html>
        ';

    }

    public function showDivisions($divisiones) {

        echo '
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <base href="' . BASE_URL . '">
                <title>Lista de Categorias del Club</title>
                <link rel="stylesheet" href="css/estilos.css">
            </head>
            <body>
        ';
    
        echo '<h1>Categorias del club del club</h1>';
        //armamos la lista de divisiones
        echo "<ul>";
        foreach($divisiones as $division) {

            echo '<li>';
            echo ' <b>' . $division->nombre_div . "</b> - ";
            echo $division->edad_limite . "---";
            echo $division->limite_jugadores_LBF . "---";
            echo $division->excepciones . "---";
            echo '</li>';
        }
        echo "</ul>";
    
        echo '
            </body>
            </html>
        ';

    }

    public function printPlayersByDivision($jugadoresXdivisiones) {

        $this->encabezado();
        echo "<ul>";
            foreach($jugadoresXdivisiones as $jugXdiv){
                echo '<li>';
                    echo ' <b>' . $jugXdiv->nombre . "</b> - ";
                    echo $jugXdiv->nombre_div . "---";
                echo '</li>';
            }
        echo "</ul>";
    
        $this->pie();

    }


}