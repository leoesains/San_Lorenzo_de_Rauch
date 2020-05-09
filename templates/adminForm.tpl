{include 'templates/header.tpl'}
    <form action="enviarFormulario" method="POST">
        <label>Ingrese su nombre</label>
        <input type="text" name="name">
        <label>Ingrese su usuario</label>
        <input type="text" name="username">
        <label>Ingrese su contraseña</label>
        <input type="text" name="password">
        <button type="submit">Enviar</button>
    </form>
{include 'templates/footer.tpl'}