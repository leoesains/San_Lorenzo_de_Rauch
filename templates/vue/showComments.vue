<section id="app-comments">
    <h7><b>|COMENTARIOS|</b></h7>
    <h7 v-if="promedio > 0"><b>Promedio Puntaje: {{ promedio }} </b></h7>
    <div class="mostrar-comentarios">
        <div v-for="comentario in comentarios">
            <div class="contenedor-comentario-adm">
                <div>
                    <p class="margen-cero"><b>{{ comentario.usuario }} | {{ comentario.fecha }}</b></p>
                    <p class="margen-cero">{{ comentario.comentario }}</p>
                    <p class="margen-cero margen-botton">Puntuación: {{ comentario.puntaje }}</p>
                    <input type="hidden" name="id_coment" v-bind:value="comentario.id_comentario">
                </div>
                <div>    
                    <button v-if="admin == 1" id="eliminar-comentario" class="btn btn-danger btn-elim-com">Eliminar</button>
                </div>
            </div>
        </div>
    </div>
</section>
