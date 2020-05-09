{include 'templates/header.tpl'}
    <div class="contenedorTablaDivisiones">
        <table class="table">
            <caption>LISTA DE DIVISIONES TEMPORADA 2020</caption>
            <thead>
                <tr>
                    <th class="thDivision">NOMBRE</th>
                    <th class="thDivision">EDAD LIMITE</th>
                    <th class="thDivision">CANTIDAD JUGADORES</th>
                    <th class="thDivision">ALGUNAS OBSERVACIONES</th>
                    <th class="thDivision">JUGADORES</th>
                </tr>
            </thead>
            <tbody>
                {foreach from=$listaDivisiones item=division} 
                    <tr>
                        <td>
                            <b>{$division->nombre_div}</b>
                        </td>
                        <td>
                            {$division->edad_limite}
                        </td>
                        <td>
                            {$division->limite_jugadores_LBF}
                        </td>
                        <td>
                            {$division->excepciones}
                        </td>
                        <td>
                            <a href="divisiones_jugadores/{$division->id_division}">Ver</a>    
                        </td>
                     </tr>
                {/foreach}   
            </tbody>
        </table>
    </div>
{include 'templates/footer.tpl'}