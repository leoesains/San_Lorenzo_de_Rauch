{include 'templates/header.admin.tpl'}
    <div>
        <b class="navbar-brand">Completar TODOS LOS CAMPOS</b>
    </div>
    <form class="form-row form-group col-md-6" action="guardar_jugador" method="POST">
        <div>
            <label><b>DNI</b></label>
            <input type="text" name="dni">
        </div>
        <div>
            <label><b>NOMBRE Y APELLIDO</b></label>
            <input type="text" name="name">
        </div>
        <div>
            <label><b>EDAD</b></label>
            <input type="text" name="edad">
        </div>
        <div>
            <label><b>FECHA DE NACIMIENTO</b></label>
            <input type="text" name="fechaNacimiento">
        </div>
        <div>
            <label><b>N° DE CARNET</b></label>
            <input type="text" name="numeroCarnet">
        </div>
        <div>
            <label><b>PUESTO</b></label>
            <select name="puesto">
                <option>ARQUERO</option>
                <option>DEFENSOR</option>
                <option>VOLANTE</option>
                <option>DELANTERO</option>
            </select>
        </div>
        <div>
            <label><b>CLUB DUEÑO DEL PASE</b></label>
            <select name="clubOrigen">
                <option>SAN LORENZO</option>
                <option>BOTAFOGO</option>
                <option>AGRARIA</option>
                <option>DEPORTIVO RAUCH</option>
            </select>
        </div>
        <div>
            <label><b>TELEFONO</b></label>
            <input type="text" name="telefono">
        </div>
        <div>
            <label><b>DIVISION</b></label>
            <select name="categoria">
                {foreach from=$listaDivisiones item=division} 
                    <option>{$division->id_division}</option>
                {/foreach}
            </select>
        </div>
        <div>
            <label><b>FOTOGRAFIA</b></label>
            <input type="text" name="foto">
        </div>
        <button type="submit"><b>Enviar</b></button>
    </form>
    <a class="nav-link" href="jugadores"><b>Volver sin Confirmar Cambios</b></a>;
{include 'templates/footer.tpl'}