{include 'templates/header.admin.tpl'}
    <div>    
        <h1>ABM DE DIVISIONES</h1>
        <b class="navbar-brand">En esta sección usted podrá hacer ALTAS, BAJAS y MODIFICACIONES de Divisiones.</b><br>
        <b class="navbar-brand">Seleccione una OPCIÓN.</b>
    </div>
    <form action="agregarDivision" method="POST">
        <label><b>Dar de Alta a una Division</b></label>
        <button type="submit"><b>Alta</b></button>
    </form>      

    <div class="contenedorTablaDivisionesCrud">
        <table class="table">
            <caption>LISTA DE DIVISIONES TEMPORADA 2020</caption>
            <thead>
                <tr>
                    <th class="thDivision">NOMBRE</th>
                    <th class="thDivision">EDITAR</th>
                    <th class="thDivision">ELIMINAR</th>
                </tr>
            </thead>
            <tbody>
                {foreach from=$listaDivisiones item=division}
                    <tr>
                        <td>
                            <b>{$division->nombre_div}</b>
                        </td>
                        <td>
                            <a href="editarDivision/{$division->id_division}">Editar</a>    
                        </td>
                        <td>
                        <a href="eliminarDivision/{$division->id_division}">Eliminar</a>    
                        </td>
                    </tr>
                {/foreach}   
            </tbody>
        </table>
    </div>
    <a class="nav-link" href="elegir_tarea"><b>Volver</b></a>;
{include 'templates/footer.tpl'}