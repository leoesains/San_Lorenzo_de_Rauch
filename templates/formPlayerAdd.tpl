{include 'templates/header.tpl'}
    <form action="guardarJugador" method="POST">
        <label>Ingrese dni</label>
        <input type="text" name="dni">
        <label>Ingrese nombre completo</label>
        <input type="text" name="name">
        <label>Ingrese edad</label>
        <input type="text" name="edad">
        <label>Ingrese fecha de nacimiento</label>
        <input type="text" name="fechaNacimiento">
        <label>Ingrese numero de carnet</label>
        <input type="text" name="numeroCarnet">
        <label>Ingrese puesto en la cancha</label>
        <input type="text" name="puesto">
        <label>Ingrese club de origen</label>
        <input type="text" name="clubOrigen">
        <label>Ingrese numero de telefono</label>
        <input type="text" name="telefono">
        <label>Ingrese una foto</label>
        <input type="text" name="foto">
        <label>elija la categoria a la que pertenece</label>
        <select name="categoria">
            {foreach from=$listaDivisiones item=division} 
                <option>{$division->id_division}</option>
            {/foreach}
        </select>
        <button type="submit">Enviar</button>
    </form>
{include 'templates/footer.tpl'}