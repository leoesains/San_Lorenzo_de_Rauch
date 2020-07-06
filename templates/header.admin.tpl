<!DOCTYPE html>
    <html lang="en">
        <head>
            <base href="{BASE_URL}">
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>San Lorenzo de Rauch</title>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
            <link rel="stylesheet" href="css/styles.css">
            <!-- development version, includes helpful console warnings -->
            <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        </head>
        <body>
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
                        
                        <li class="nav-item active dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                JUGADORES
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="ver_arqueros">ARQUEROS</a>
                                <a class="dropdown-item" href="ver_defensores">DEFENSORES</a>
                                <a class="dropdown-item" href="ver_volantes">VOLANTES</a>
                                <a class="dropdown-item" href="ver_delanteros">DELANTEROS</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="listar_jugadores">TODOS</a>
                            </div>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="listar_divisiones">DIVISIONES</a>
                        </li>
                        {if {$type == "administrador"}}
                            <li class="nav-item active dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    MAS...
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item"  href="listar_usuarios">USUARIOS</a>
                                    <a class="dropdown-item"  href="mostrar_abm_publicidades">PUBLICIDADES</a>
                                </div>
                            </li>
                        {/if}
                    </ul>

                    <div>
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active dropdown">
                            
                                <a id="nombre-usuario" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg class="bi bi-person-square" width="1.2em" height="1.2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                        <path fill-rule="evenodd" d="M2 15v-1c0-1 1-4 6-4s6 3 6 4v1H2zm6-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                    </svg> 
                                    {$nameUser} ({$type})
                                </a>
                                <div class="dropdown-menu derecha" aria-labelledby="navbarDropdown">
                                    <div class="dropdown-divider"></div>
                                    <a id="menu-usuario" class="dropdown-item" href="cerrar_sesion">
                                        <svg class="bi bi-x-circle-fill" width="1.2em" height="1.2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.146-3.146a.5.5 0 0 0-.708-.708L8 7.293 4.854 4.146a.5.5 0 1 0-.708.708L7.293 8l-3.147 3.146a.5.5 0 0 0 .708.708L8 8.707l3.146 3.147a.5.5 0 0 0 .708-.708L8.707 8l3.147-3.146z"/>
                                        </svg> Cerrar Sesión
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="hacete-socio-header">
                    <h5><MARQUEE>¡Hacete Socio!</MARQUEE></h5>
                    <a class="socio-header" href="asociarse">¡Asociate!</a>
                </div>


                
            </nav>