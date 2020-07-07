{include 'templates/header.home.tpl'}
    <form id="form_add_jugador" action="verificar_respuestas" method="POST">
        <h1>RECUPERO DE CONTRASEÑA</h1>
        <label>¿CUÁL ES EL NOMBRE DE TU PRIMER MASCOTA?</label>
        <input type="password" name="resp1">
        <input type="hidden" name="respuesta1" value="{$respuesta1}">
        <label>¿CUÁL ES TU CIUDAD FAVORITA?</label>
        <input type="password" name="resp2">
        <input type="hidden" name="respuesta2" value="{$respuesta2}">
        <input type="hidden" name="id_usuario" value="{$id_usuario}">
        <button type="submit" class="btn btn-danger btn-volver"><b>Enviar</b></button>
        <div class="contenedor-msg">
            {if {$error}}
                <MARQUEE loop="2">{$error}</MARQUEE>
            {/if}
        </div>
    </form>
    
{include 'templates/footer.tpl'}
