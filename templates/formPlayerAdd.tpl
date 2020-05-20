{include 'header.admin.tpl'}
    
    
        <form id="form_add_jugador" action="guardar_jugador" method="POST">
            <h1>Completar todos los datos del nuevo jugador</h1>
            <input type="text" placeholder="Ingrese DNI" name="dni">
            <input type="text" placeholder="Ingrese Nombre y Apellido" name="name">
            <input type="text" placeholder="Ingrese Edad" name="edad">
            <input type="text" placeholder="Ingrese Fecha de Nacimiento" name="fechaNacimiento">
            <input type="text" placeholder="Ingrese N° de Carnet" name="numeroCarnet">
            <select name="puesto">
                <option disabled selected>Seleccione un Puesto</option>
                <option>ARQUERO</option>
                <option>DEFENSOR</option>
                <option>VOLANTE</option>
                <option>DELANTERO</option>
            </select>
            <select name="clubOrigen">
                <option disabled selected>Club Origen del Jugador</option>
                <option>SAN LORENZO</option>
                <option>BOTAFOGO</option>
                <option>AGRARIA</option>
                <option>DEPORTIVO RAUCH</option>
            </select>
            <input type="text" placeholder="Ingrese Teléfono" name="telefono">
            <select name="categoria">
                <option disabled selected>Seleccione una División</option>
                {foreach from=$listaDivisiones item=division} 
                    <option>{$division->id_division}</option>
                {/foreach}
            </select>
            <input type="text" placeholder="Ingrese Foto" name="foto">
            <button type="submit" class="btn btn-danger"><b>Enviar</b></button>
            <a class="btn btn-danger btn-volver" href="listar_jugadores"><b>Volver</b></a>;
        </form>
    
    
{include 'templates/footer.tpl'}