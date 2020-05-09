{include 'templates/header.tpl'}
    <div class="contenedorPerfil">
        <div>
            <img src="{$datosJug->imagen}">
        </div>
        <div class="datosJugador">
            <h3><b>PERFIL DEL JUGADOR</b></h3>
            <p>{$datosJug->nombre}</p>
            <h4><b>EDAD</b></h4>
            <h3>{$datosJug->edad} años</h3>
            <h4><b>FECHA DE NACIMIENTO</b></h4>
            <h3>{$datosJug->fecha_nac}</h3>
            <h4><b>CARNET</b></h4>
            <h3>{$datosJug->carnet}</h3>
            <h4><b>PUESTO</b></h4>
            <h3>{$datosJug->puesto}</h3>
            <h4><b>CLUB AL QUE PERTENECE EL PASE</b></h4>
            <h3>{$datosJug->club_origen}</h3>
            <h4><b>TELÉFONO DE CONTACTO</b></h4>
            <h3>{$datosJug->telefono}</h3>
        </div>
    </div>
{include 'templates/footer.tpl'}