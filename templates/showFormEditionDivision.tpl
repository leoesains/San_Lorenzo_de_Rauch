{include 'templates/header.admin.tpl'}
    <h1>MODIFIQUE LOS DATOS QUE DESEA CAMBIAR</H1>
    <form action="guardarEdicionDivision" method="POST">
        <input type="hidden" name="id_division" value="{$division->id_division}">
        <label>nombre</label>
        <input type="text" name="nombre_div" value="{$division->nombre_div}">
        <label>edad limite</label>
        <input type="text" name="edad_limite" value="{$division->edad_limite}">
        <label>cantidad de jugadores en LBF</label>
        <input type="text" name="limite_jugadores_LBF" value="{$division->limite_jugadores_LBF}">
        <label>observaciones/excepciones</label>
        <input type="text" name="excepciones" value="{$division->excepciones}">
        <button type="submit">Modificar datos</button>
    </form>
    <a class="nav-link" href="categorias"><b>Volver sin Confirmar Cambios</b></a>;
{include 'templates/footer.tpl'}