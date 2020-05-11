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
        <input type="password" name="password" placeholder="12 caracteres máximo" maxlength="12">
        <label><b>CONFIRME CONTRASEÑA</b></label>
        <input type="password" name="confirmPassword" placeholder="12 caracteres máximo" maxlength="12">
        <button type="submit">Enviar Registro</button>
    </form>
{include 'templates/footer.tpl'}