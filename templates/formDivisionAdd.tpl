{include 'templates/header.admin.tpl'}
    <form id="form_add_jugador" action="guardar_division" method="POST">
        <h1>DATOS DE LA NUEVA DIVISIÓN</h1>
        <label>INGRESE LA DIVISIÓN EN NÚMEROS</label>
        <input type="number" placeholder="N° DE DIVISIÓN" name="numeroCategoria">
        <label>INGRESE LA DIVISIÓN EN LETRAS</label>
        <input type="text" class="mayuscula" placeholder="NOMBRE DE LA DIVISIÓN" name="nombreCategoria">
        <label>INGRESE EDAD LÍMITE DE LA DIVISIÓN</label>
        <input type="number" placeholder="EDAD LÍMITE" name="edadLimite">
        <label>CANTIDAD MÁX DE JUGADORES EN  LBF</label>
        <input type="number" placeholder="CANTIDAD MAX DE JUGADORES" name="limiteJugadores">
        <label>INGRESE OBSERVACIONES</label>
        <textarea name="excepciones" placeholder="OBSERVACIONES"></textarea>
        <button type="submit" class="btn btn-danger btn-volver"><b>Enviar</b></button>
        <a class="btn btn-danger btn-volver" href="listar_divisiones"><b>Volver</b></a>
        <div class="contenedor-msg">
            {if {$error}}
                <MARQUEE loop="2">{$error}</MARQUEE>
            {/if}
        </div>
    </form>
{include 'templates/footer.tpl'}

