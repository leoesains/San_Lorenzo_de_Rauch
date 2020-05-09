{include 'templates/header.tpl'}
    <form action="agregarDivision" method="POST">
        <label>Agregar Division</label>
        <button type="submit">Agregar</button>
    </form>      

    <div class="contenedorTablaDivisiones">
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
                        <a href="EliminarDivision/{$division->id_division}">Eliminar</a>    
                        </td>
                    </tr>
                {/foreach}   
            </tbody>
        </table>
    </div>
{include 'templates/footer.tpl'}