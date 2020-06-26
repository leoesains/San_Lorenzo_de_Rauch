
<section id="app-comments">
    <h7><b>|COMENTARIOS|</b></h7>
    <h7 v-if="promedio > 0"><b>Promedio Puntaje: {{ promedio }} </b></h7>
    <div class="mostrar-comentarios">
        <div v-for="comentario in comentarios">
            <p class="margen-cero"><b>{{ comentario.usuario }} | {{ comentario.fecha }}</b></p>
            <p class="margen-cero">{{ comentario.comentario }}</p>
            <p class="margen-cero margen-botton">Puntuación: {{ comentario.puntaje }}</p>
        </div>
    </div>
</section>
