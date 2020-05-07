<?php

class AdminView{

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

    //muestra un formulario para elegir si quiere modificar jugadores o divisiones
    public function chooseTask() {

        echo '
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <base href="' . BASE_URL . '">
                <title>Modificaciones</title>
                <link rel="stylesheet" href="css/estilos.css">
            </head>
            <body>
        
                <form action="jugadores" method="POST">
                    <label>Modificar Jugadores</label>
                    <button type="submit">Ver</button>
                </form>

                <form action="categorias" method="POST">
                    <label>Modificar Categorias</label>
                    <button type="submit">Ver</button>
                </form>
        ';

        echo '
            </body>
            </html>
        ';
    }

    //
    public function showPlayersCrud($jugadores) {
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
        <form action="agregarJugador" method="POST">
            <label>Agregar Jugador</label>
            <button type="submit">Agregar</button>
        </form>

        <div class="contenedorTablaJugadores">
            <table class="table">
                <caption>LISTA DE JUGADORES TEMPORADA 2020</caption>
                <thead>
                    <tr>
                        <th>NOMBRE</th>
                        <th>DNI</th>
                        <th>EDITAR</th>
                        <th>ELIMINAR</th>
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
                            echo '<a href="editarJugador/'.$idJugador.'">Editar</a>';    
                            echo '</td>';
                            echo '<td>';
                            echo '<a href="eliminarJugador/'.$idJugador.'">Eliminar</a>';    
                            echo '</td>';
                        echo '</tr>';
                    }   
                echo '
                </tbody>
            </table>
        </div>';
    
        $this->pie();
    }

    public function showDivisionsCrud($divisiones) {
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
        <form action="agregarDivision" method="POST">
            <label>Agregar Division</label>
            <button type="submit">Agregar</button>
        </form>      

        <div class="contenedorTablaDivisiones">
            <table class="table">
                <caption>LISTA DE DIVISIONES TEMPORADA 2020</caption>
                <thead>
                    <tr>
                        <th class="thDivision">NOMBRE</th>
                        <th class="thDivision">EDAD LIMITE</th>
                        <th class="thDivision">CANTIDAD JUGADORES</th>
                        <th class="thDivision">ALGUNAS OBSERVACIONES</th>
                        <th class="thDivision">EDITAR</th>
                        <th class="thDivision">ELIMINAR</th>
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
                            echo '<a href="editarDivision/'.$idDivision.'">Editar</a>';    
                            echo '</td>';
                            echo '<td>';
                            echo '<a href="EliminarDivision/'.$idDivision.'">Eliminar</a>';    
                            echo '</td>';
                        echo '</tr>';
                    }   
                echo '
                </tbody>
            </table>
        </div>';

        $this->pie();
    }    

    public function formPlayerAdd($categorias) {

        echo '
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <base href="' . BASE_URL . '">
                <title>Agregar Jugador</title>
                <link rel="stylesheet" href="css/estilos.css">
            </head>
            <body>
        
                <form action="guardarJugador" method="POST">
                    <label>Ingrese dni</label>
                    <input type="text" name="dni">
                    <label>Ingrese nombre completo</label>
                    <input type="text" name="name">
                    <label>Ingrese edad</label>
                    <input type="text" name="edad">
                    <label>Ingrese fecha de nacimiento</label>
                    <input type="text" name="fechaNacimiento">
                    <label>Ingrese numero de carnet</label>
                    <input type="text" name="numeroCarnet">
                    <label>Ingrese puesto en la cancha</label>
                    <input type="text" name="puesto">
                    <label>Ingrese club de origen</label>
                    <input type="text" name="clubOrigen">
                    <label>Ingrese numero de telefono</label>
                    <input type="text" name="telefono">
                    <label>Ingrese una foto</label>
                    <input type="text" name="foto">
                    <label>elija la categoria a la que pertenece</label>
                    <select name="categoria">
        ';

                        foreach($categorias as $categoria) 
                            echo '<option>'.$categoria->id_division.'</option>';
                        
        echo '                
                    </select>
                    <button type="submit">Enviar</button>
                </form>
        ';

        echo '
            </body>
            </html>
        ';
    }

    public function formDivisionAdd() {

        echo '
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <base href="' . BASE_URL . '">
                <title>Agregar Division</title>
                <link rel="stylesheet" href="css/estilos.css">
            </head>
            <body>
        
                <form action="guardarDivision" method="POST">
                    <label>Ingrese la categoria con numeros</label>
                    <input type="text" name="numeroCategoria">
                    <label>Ingrese la categoria con letras</label>
                    <input type="text" name="nombreCategoria">
                    <label>Ingrese edad limite</label>
                    <input type="text" name="edadLimite">
                    <label>Ingrese limite jugadores LBF</label>
                    <input type="text" name="limiteJugadores">
                    <label>Ingrese las excepciones</label>
                    <input type="text" name="excepciones">
                    <button type="submit">Enviar</button>
                    </form>
        ';

        echo '
            </body>
            </html>
        ';
    }

    
    public function keyWord() {

        echo '
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <base href="' . BASE_URL . '">
                <title>Palabra Clave</title>
                <link rel="stylesheet" href="css/estilos.css">
            </head>
            <body>
        
                <form action="formulario" method="POST">
                    <label>Ingrese la palabra clave</label>
                    <input type="text" name="palabraClave">
                    <button type="submit">Ingresar</button>
                </form>
        ';

        echo '
            </body>
            </html>
        ';
    }

    public function adminForm() {

        echo '
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <base href="' . BASE_URL . '">
                <title>Formulario Administrador</title>
                <link rel="stylesheet" href="css/estilos.css">
            </head>
            <body>
        
                <form action="enviarFormulario" method="POST">
                    <label>Ingrese su nombre</label>
                    <input type="text" name="name">
                    <label>Ingrese su usuario</label>
                    <input type="text" name="username">
                    <label>Ingrese su contraseña</label>
                    <input type="text" name="password">
                    <button type="submit">Enviar</button>
                </form>
        ';

        echo '
            </body>
            </html>
        ';
    }


}