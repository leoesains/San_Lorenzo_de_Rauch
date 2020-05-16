{include 'templates/header.tpl'}
    <div class="conteiner contenedor_divisiones">
        {foreach from=$listaDivisiones item=division} 
            <div class="contenedor_show_division">
                <div>
                    <b>{$division->nombre_div}</b>
                </div>
                <div>
                    {$division->edad_limite}
                </div>
                <div></div>
                    {$division->limite_jugadores_LBF}
                </div>
                <div>
                    {$division->excepciones}
                </div>
                <div></div>
                    <a href="divisiones_jugadores/{$division->id_division}">Ver</a>
                </div>          
            </div>    
        {/foreach}   
    </div>
{include 'templates/footer.tpl'}