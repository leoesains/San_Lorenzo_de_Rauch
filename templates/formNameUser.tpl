{include 'templates/header.home.tpl'}
    <form id="form_add_jugador" action="viewIsUser" method="POST">
        <h1>RECUPERO DE CONTRASEÑA</h1>
        <label>INGRESE SU DIRECCIÓN DE MAIL</label>
        <input type="email" placeholder="Mail" name="mail">
        <button type="submit" class="btn btn-danger centrar btn_alta"><b>Enviar</b></button>
        <div class="contenedor-msg">
            {if {$error}}
                <MARQUEE loop="2">{$error}</MARQUEE>
            {/if}
        </div>
    </form>
{include 'templates/footer.tpl'}
