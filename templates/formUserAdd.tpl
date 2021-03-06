{include 'templates/header.home.tpl'}
    <form id="form_add_jugador" action="guardar_usuario" method="POST">
        <h1>DATOS DEL USUARIO</h1>
        <label>INGRESE SU NOMBRE COMPLETO</label>
        <input type="text"  class="mayuscula" placeholder="NOMBRE" name="nombre" value="{$nombre}">
        <label>INGRESE SU USUARIO (CORREO ELECTRÒNICO)</label>
        <input type="email" placeholder="EMAIL" name="email" value="{$mail}">
        <label>INGRESE SU CONTRASEÑA</label>
        <input type="password" placeholder="CONTRASEÑA" name="contraseña">
        <label>REPITA LA CONTRASEÑA</label>
        <input type="password" placeholder="REPITA CONTRASEÑA" name="repitaContraseña">
        <h1>PREGUNTAS DE SEGURIDAD</h1>
        <label>NOMBRE DE TU PRIMERA MASCOTA</label>
        <input type="password" placeholder="NOMBRE DE MASCOTA" name="mascota">
        <label>TU CIUDAD FAVORITA</label>
        <input type="password" placeholder="CIUDAD" name="ciudad">
        <button type="submit" class="btn btn-danger btn-volver"><b>Registrar</b></button>
        <a class="btn btn-danger btn-volver" href="home"><b>Salir</b></a>;
        <div class="contenedor-msg">
            {if {$error}}
                <MARQUEE loop="2">{$error}</MARQUEE>
            {/if}
        </div>
    </form>
{include 'templates/footer.tpl'}