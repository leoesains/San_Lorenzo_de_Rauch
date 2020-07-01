<section id="app-comments">
    <div class="coment-punt">
        <h5 class="letra"><b>COMENTARIOS</b></h5>
        <h5 v-if="promedio > 0" class="letra"><b>|Promedio Puntaje: {{ promedio }}|</b></h5>
    </div>
    <div class="mostrar-comentarios">
        <h3 v-if="!comentarios.length"><b>No hay comentarios para este jugador!</b></h3>
        <div v-for="comentario in comentarios">
            <div class="contenedor-comentario-adm">
                <div>
                    <p class="margen-cero"><b>{{ comentario.usuario }} | {{ comentario.fecha }}</b></p>
                    <p class="margen-cero">{{ comentario.comentario }}</p>
                    <p class="margen-cero margen-botton">Puntuación: {{ comentario.puntaje }}</p>
                </div>
                <div>
                    <button v-if="admin == 1" v-on:click="delComment(comentario.id_comentario)" class="btn btn-danger btn-elim-com">Eliminar</button>
                </div>
            </div>
        </div>
    </div>
</section>
