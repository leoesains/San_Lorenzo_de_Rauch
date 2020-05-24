{include 'templates/header.admin.tpl'}
    <form id="form_add_jugador" action="guardar_division" method="POST">
        <h1>Completar todos los datos de la nueva división</h1>
        <label>Ingrese la división con numeros</label>
        <input type="number" placeholder="N° DE DIVISIÓN" name="numeroCategoria">
        <label>Ingrese la división con letras</label>
        <input type="text" class="mayuscula" placeholder="NOMBRE DE LA DIVISIÓN" name="nombreCategoria">
        <label>Ingrese edad limite</label>
        <input type="number" placeholder="EDAD LÍMITE" name="edadLimite">
        <label>Ingrese limite jugadores LBF</label>
        <input type="number" placeholder="CANTIDAD MAX DE JUGADORES" name="limiteJugadores">
        <label>Ingrese observaciones</label>
        <textarea name="excepciones" placeholder="OBSERVACIONES"></textarea>
        <button type="submit" class="btn btn-danger btn-volver"><b>Enviar</b></button>
        <a class="btn btn-danger btn-volver" href="categorias"><b>Volver</b></a>;
    </form>
    
{include 'templates/footer.tpl'}

