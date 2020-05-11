{include 'templates/header.admin.tpl'}
    <form action="guardarDivision" method="POST">
        <label>Ingrese la categoria con numeros</label>
        <input type="text" name="numeroCategoria">
        <label>Ingrese la categoria con letras</label>
        <input type="text" name="nombreCategoria">
        <label>Ingrese edad limite</label>
        <input type="text" name="edadLimite">
        <label>Ingrese limite jugadores LBF</label>
        <input type="text" name="limiteJugadores">
        <label>Ingrese las excepciones</label>
        <input type="text" name="excepciones">
        <button type="submit">Enviar</button>
    </form>
    <a class="nav-link" href="categorias"><b>Volver sin Confirmar Cambios</b></a>;
{include 'templates/footer.tpl'}