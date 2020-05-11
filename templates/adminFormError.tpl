{include 'templates/header.tpl'}
    <div>
        <b class="navbar-brand">Ingrese los datos para REGISTRAR un Usuario/Administrador</b>
    </div>
    <form action="enviarFormulario" method="POST">
        <label><b>NOMBRE COMPLETO</b></label>
        <input type="text" name="name">
        <label><b>NOMBRE DE USUARIO</b></label>
        <input type="text" name="username">
        <label><b>CONTRASEÑA</b></label>
        <input type="text" name="password">
        <button type="submit">Enviar Registro</button>
    </form>
    <b class="navbar-brand">TODOS LOS CAMPOS DEBEN COMPLETARSE. Intente nuevamente.</b>
{include 'templates/footer.tpl'}