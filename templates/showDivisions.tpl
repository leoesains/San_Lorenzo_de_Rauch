{include 'templates/header.tpl'}
    <div class="titulo_mostrar_jugadores">
        <p><b>DIVISIONES</b> DEL CLUB PARA LA TEMPORADA 2020</p>
    </div>
    <div class="conteiner contenedor_divisiones">
        {foreach from=$listaDivisiones item=division} 
            <div class="contenedor_show_division">
                <div class="centrar">
                    <b class="fuente_nombre">{$division->nombre_div} DIVISIÓN</b>
                </div>
                <div class="centrar">
                    <p>Edad Máxima {$division->edad_limite} años</p>
                </div>
                <div class="centrar">
                    <p>Cantidad Máxima de jugadores en <b>Lista de Buena Fe</b>: {$division->limite_jugadores_LBF}</p>
                </div>
                <div class="centrar alto_excepciones">
                    Observaciones: {$division->excepciones}
                </div>
                <div class="centrar">
                    <a class="btn btn-danger" href="divisiones_jugadores/{$division->id_division}">Ver Jugadores</a>
                </div>          
            </div>    
        {/foreach}   
    </div>
{include 'templates/footer.tpl'}