{include 'templates/header.tpl'}  
    <div>
        <b class="navbar-brand">Para REGISTRAR un Usuario/Administrador debe ingresar la PALABRA CLAVE</b>
    </div>
    <form action="formulario" method="POST">
        <label><b>PALABRA CLAVE</b></label>
        <input type="text" name="palabraClave">
        <button type="submit"><b>Ingresar</b></button>
    </form>
    <b class="navbar-brand">PALABRA CLAVE INCORRECTA. Intente nuevamente.</b>
{include 'templates/footer.tpl'}