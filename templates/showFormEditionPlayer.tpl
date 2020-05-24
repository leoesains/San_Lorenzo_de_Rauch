{include 'templates/header.admin.tpl'}
    <form id="form_add_jugador" action="guardar_edicion_jugador" method="POST">
        <h1>MODIFIQUE</h1>
        <input type="hidden" name="dni" value="{$jugador->id_jugador}">
        <label>NOMBRE COMPLETO</label>
        <input type="text" name="nombre" value="{$jugador->nombre}">
        <label>EDAD</label>
        <input type="number" name="edad" value="{$jugador->edad}">
        <label>FECHA DE NACIMIENTO</label>
        <input type="text" name="fechaNacimiento" value="{$jugador->fecha_nac}">
        <label>N° DE CARNET</label>
        <input type="text" name="numeroCarnet" value="{$jugador->carnet}">
        <label>PUESTO</label >
        <input type="text" name="puesto" value="{$jugador->puesto}">
        {*<select name="puesto" value="{$jugador->puesto}">
            <option disabled selected>{$jugador->puesto}</option>
            <option>ARQUERO</option>
            <option>DEFENSOR</option>
            <option>VOLANTE</option>
            <option>DELANTERO</option>
        </select>*}
        <label>CLUB AL QUE PERTENECE EL PASE</label>
        <input type="text" name="clubOrigen" value="{$jugador->club_origen}">
        {*<select name="clubOrigen" value="{$jugador->club_origen}">
            <option disabled selected>{$jugador->club_origen}</option>
            <option>SAN LORENZO</option>
            <option>BOTAFOGO</option>
            <option>AGRARIA</option>
            <option>DEPORTIVO RAUCH</option>
        </select>
        <label>TELÉFONO</label>
        <input type="text" name="telefono" value="{$jugador->telefono}">*}
        <label>DIVISIÓN</label>
        <input type="text" name="categoria" value="{$jugador->id_division}">
        {*<select name="categoria" value="{$jugador->id_division}">
            <option disabled selected>{$jugador->id_division}</option>
            {foreach from=$listaDivisiones item=division} 
                <option>{$division->id_division}</option>
            {/foreach}
        </select>*}
        <label>FOTO</label>
        <input type="text" name="foto" value="{$jugador->imagen}">
        <button type="submit" class="btn btn-danger"><b>Enviar</b></button>
        <a class="btn btn-danger btn-volver" href="listar_jugadores"><b>Volver</b></a>;
        </div>
    </form>
{include 'footer.tpl'}    
