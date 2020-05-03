<?php

class PublicView{
    
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
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
    
    
    public function imprimirError($msg,$img) {
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
            echo ' <b>' . $jugador->nombre . "</b> - ";
            echo '<a href="verJugador/'.$idJugador.'">Ver</a>';
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
            echo $jugador->imagen . "---";
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
            echo ' <b>' . $division->nombre . "</b> - ";
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

    


}