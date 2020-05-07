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
    
    public function showHome(){
        $this->encabezado();
        echo '
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar navbar-dark bg-dark">
            <img class="imagenNav"src="images/Escudo transparente.png">
            <a class="navbar-brand" href="#"><b>SAN LORENZO DE RAUCH</b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="home">HOME<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="listarJugadores">JUGADORES</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="listarDivisiones">DIVISIONES</a>
                    </li>
                </ul>
            </div>
            <div class="login-container">
                <form class="form_log" action="log_admin" method="POST">
                    <input type="text" placeholder="Username" name="username">
                    <input type="password" placeholder="Password" name="psw">
                    <button type="submit">Login</button>
                </form>
                <a class="nav-link" href="registrarse">REGISTRARSE</a
            </div>
        </nav>
        
        <div class="contenedorFrase">
            <h1>Institución dedicada a la Enseñanza del Deporte y la Formación Humana de niños, jóvenes y adultos</h1>
            <p class="frase">"Todos tenemos sueños, pero para que se vuelvan realidad se necesita una gran determinación, dedicación, autodisciplina y esfuerzo."</P>
            
        </div>
        ';
                
        $this->pie();
    }

    public function printError($msg) {
        $this->encabezado();

        echo '
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar navbar-dark bg-dark">
            <img class="imagenNav"src="images/Escudo transparente.png">  
            <a class="navbar-brand" href="#"><b>SAN LORENZO DE RAUCH</b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="home">HOME<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="listarJugadores">JUGADORES</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="listarDivisiones">DIVISIONES</a>
                    </li>
                </ul>
            </div>
            <div class="login-container">
                <form class="form_log" action="log_admin" method="POST">
                    <input type="text" placeholder="Username" name="username">
                    <input type="text" placeholder="Password" name="psw">
                    <button type="submit">Login</button>
                </form>
                <a class="nav-link" href="registrarse">REGISTRARSE</a
            </div>
        </nav>        
                
        <div class="text-center">
            <p>Error</p>
            <h2>' .$msg. '</h2>
            <img src="images/errores/error_icon.png"> 
        </div>';

        $this->pie();
    }

    public function showPlayers($jugadores) {
        $this->encabezado();    
        echo '
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar navbar-dark bg-dark">
            <img class="imagenNav"src="images/Escudo transparente.png">
            <a class="navbar-brand" href="#"><b>SAN LORENZO DE RAUCH</b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="home">HOME<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="listarJugadores">JUGADORES</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="listarDivisiones">DIVISIONES</a>
                    </li>
                </ul>
            </div>
            <div class="login-container">
                <form class="form_log" action="log_admin" method="POST">
                    <input type="text" placeholder="Username" name="username">
                    <input type="text" placeholder="Password" name="psw">
                    <button type="submit">Login</button>
                </form>
                <a class="nav-link" href="registrarse">REGISTRARSE</a
            </div>
        </nav>    
        <div class="contenedorTablaJugadores">
            <table class="table">
                <caption>LISTA DE JUGADORES TEMPORADA 2020</caption>
                <thead>
                    <tr>
                        <th>NOMBRE</th>
                        <th>DNI</th>
                        <th>PERFIL</th>
                    </tr>
                </thead>
                <tbody>';
                    foreach($jugadores as $jugador) {
                        $idJugador = $jugador->id_jugador;
                        echo '<tr>';
                            echo '<td>';
                            echo '<b>' . $jugador->nombre . '</b>';
                            echo '</td>';
                            echo '<td>';
                            echo $idJugador;
                            echo '</td>';
                            echo '<td>';
                            echo '<a href="verJugador/'.$idJugador.'">Ver</a>';    
                            echo '</td>';
                        echo '</tr>';
                    }   
                echo '
                </tbody>
            </table>
        </div>';
    
        $this->pie();
    }

    public function showPlayer($jugador) {
        $this->encabezado();
        echo '
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar navbar-dark bg-dark">
            <img class="imagenNav"src="images/Escudo transparente.png">
            <a class="navbar-brand" href="#"><b>SAN LORENZO DE RAUCH</b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="home">HOME<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="listarJugadores">JUGADORES</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="listarDivisiones">DIVISIONES</a>
                    </li>
                </ul>
            </div>
            <div class="login-container">
                <form class="form_log" action="log_admin" method="POST">
                    <input type="text" placeholder="Username" name="username">
                    <input type="text" placeholder="Password" name="psw">
                    <button type="submit">Login</button>
                </form>
                <a class="nav-link" href="registrarse">REGISTRARSE</a
            </div>
        </nav>    
        <div class="contenedorPerfil">
            <div>
                <img src=' .$jugador->imagen. '>
            </div>
            <div class="datosJugador">
                <h3><b>PERFIL DEL JUGADOR</b></h3>
                <p>' .$jugador->nombre. '</p>
                <h4><b>EDAD</b></h4>
                <h3>' .$jugador->edad. ' años</h3>
                <h4><b>FECHA DE NACIMIENTO</b></h4>
                <h3>' .$jugador->fecha_nac. '</h3>
                <h4><b>CARNET</b></h4>
                <h3>' .$jugador->carnet. '</h3>
                <h4><b>PUESTO</b></h4>
                <h3>' .$jugador->puesto. '</h3>
                <h4><b>CLUB AL QUE PERTENECE EL PASE</b></h4>
                <h3>' .$jugador->club_origen. '</h3>
                <h4><b>TELÉFONO DE CONTACTO</b></h4>
                <h3>' .$jugador->telefono. '</h3>
            </div>
        </div>
        ';
        $this->pie();
    }

    public function showDivisions($divisiones) {
        $this->encabezado();
        echo '
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar navbar-dark bg-dark">
            <img class="imagenNav"src="images/Escudo transparente.png">
            <a class="navbar-brand" href="#"><b>SAN LORENZO DE RAUCH</b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="home">HOME<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="listarJugadores">JUGADORES</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="listarDivisiones">DIVISIONES</a>
                    </li>
                </ul>
            </div>
            <div class="login-container">
                <form class="form_log" action="log_admin" method="POST">
                    <input type="text" placeholder="Username" name="username">
                    <input type="text" placeholder="Password" name="psw">
                    <button type="submit">Login</button>
                </form>
                <a class="nav-link" href="registrarse">REGISTRARSE</a
            </div>
        </nav>            
        <div class="contenedorTablaDivisiones">
            <table class="table">
                <caption>LISTA DE DIVISIONES TEMPORADA 2020</caption>
                <thead>
                    <tr>
                        <th class="thDivision">NOMBRE</th>
                        <th class="thDivision">EDAD LIMITE</th>
                        <th class="thDivision">CANTIDAD JUGADORES</th>
                        <th class="thDivision">ALGUNAS OBSERVACIONES</th>
                        <th class="thDivision">JUGADORES</th>
                    </tr>
                </thead>
                <tbody>';
                    foreach($divisiones as $division) {
                        $idDivision = $division->id_division;
                        echo '<tr>';
                            echo '<td>';
                            echo '<b>' . $division->nombre_div . '</b>';
                            echo '</td>';
                            echo '<td>';
                            echo $division->edad_limite;
                            echo '</td>';
                            echo '<td>';
                            echo $division->limite_jugadores_LBF;
                            echo '</td>';
                            echo '<td>';
                            echo $division->excepciones;
                            echo '</td>';
                            echo '<td>';
                            echo '<a href="divisiones_jugadores/'.$idDivision.'">Ver</a>';    
                            echo '</td>';
                        echo '</tr>';
                    }   
                echo '
                </tbody>
            </table>
        </div>';

        $this->pie();
}    

    public function printPlayersByDivision($jugadoresXdivisiones) {
        $this->encabezado();

        echo '
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar navbar-dark bg-dark">
            <img class="imagenNav"src="images/Escudo transparente.png">
            <a class="navbar-brand" href="#"><b>SAN LORENZO DE RAUCH</b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="home">HOME<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="listarJugadores">JUGADORES</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="listarDivisiones">DIVISIONES</a>
                    </li>
                </ul>
            </div>
            <div class="login-container">
                <form class="form_log" action="log_admin" method="POST">
                    <input type="text" placeholder="Username" name="username">
                    <input type="text" placeholder="Password" name="psw">
                    <button type="submit">Login</button>
                </form>
                <a class="nav-link" href="registrarse">REGISTRARSE</a
            </div>
        </nav>            
        <div class="contenedorTablaJugadores">
            <table class="table">
                <caption>JUGADORES POR DIVISION TEMPORADA 2020</caption>
                <thead>
                    <tr>
                        <th>JUGADOR</th>
                        <th>DIVISION</th>
                        <th>PERFIL</th>
                    </tr>
                </thead>
                <tbody>';
                    foreach($jugadoresXdivisiones as $jugXdiv){
                        $idJugador = $jugXdiv->id_jugador;
                        echo '<tr>';
                            echo '<td>';
                            echo '<b>' . $jugXdiv->nombre . '</b>';
                            echo '</td>';
                            echo '<td>';
                            echo $jugXdiv->nombre_div;
                            echo '</td>';
                            echo '<td>';
                            echo '<a href="verJugador/'.$idJugador.'">Ver</a>';    
                            echo '</td>';
                        echo '</tr>';
                    }   
                echo '
                </tbody>
            </table>
        </div>';
     
        $this->pie();

    }

    
}