{include 'templates/header.home.tpl'}
    <form id="form_add_jugador" action="cambiar_contraseña" method="POST">
        <h1>DATOS DEL USUARIO</h1>
        <label>INGRESE SU NUEVA CONTRASEÑA</label>
        <label>INGRESE SU CONTRASEÑA</label>
        <input type="password" placeholder="CONTRASEÑA" name="contraseña">
        <label>REPITA LA CONTRASEÑA</label>
        <input type="password" placeholder="REPITA CONTRASEÑA" name="repitaContraseña">
        <input type="hidden" name="id_usuario" value="{$id_usuario}">
        <button type="submit" class="btn btn-danger btn-volver"><b>Registrar</b></button>
        <div class="contenedor-msg">
            {if {$error}}
                <MARQUEE loop="2">{$error}</MARQUEE>
            {/if}
        </div>
    </form>
    
{include 'templates/footer.tpl'}