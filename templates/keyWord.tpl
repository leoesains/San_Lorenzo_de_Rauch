{include 'templates/header.tpl'}  
    <div>
        <b class="navbar-brand">Para REGISTRAR un Usuario/Administrador debe ingresar la PALABRA CLAVE</b>
    </div>
    <form action="formulario" method="POST">
        <label><b>PALABRA CLAVE</b></label>
        <input type="password" name="palabraClave">
        <button type="submit"><b>Ingresar</b></button>
    </form>
{include 'templates/footer.tpl'}