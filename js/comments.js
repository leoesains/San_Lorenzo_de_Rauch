"use strict"

//definimos la app Vue

let app = new Vue({
    el: "#app-comments",
    data: {
        comentarios: [],
        promedio: 0,
        admin: 0
    }
})


printComments();


document.querySelector("#form-comentario").addEventListener('submit', addComment);
//document.querySelector("#eliminar-comentario").addEventListener('click', delComment);



function addComment(e) {
    e.preventDefault();
    let data = {
        comentario: document.querySelector("textarea[name=comentario]").value,
        usuario: document.querySelector("input[name=usuario]").value,
        fecha: document.querySelector("input[name=fecha]").value,
        puntaje: document.querySelector("select[name=puntuacion]").value,
        id_jugador: document.querySelector("input[name=jugador]").value
    } 
    fetch('api/comentario', {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},
        body: JSON.stringify(data)
    })
    .then(response => {
        
    })
    .catch(error => console.log(error));
}

function printComments() {
    
    let id_jug = document.querySelector("input[name=jugador]").value;
    let tipo_usuario = document.querySelector("input[name=usuario]").value;
    let suma = 0;
    let cont = 0;
    console.log(tipo_usuario);
    fetch('api/comentarios/' + id_jug)
        .then(response => response.json())
        .then(comentarios => {
            
            // asigno los comentarios de un jugador que me devuelve la API
            app.comentarios = comentarios; // es como el $this->smarty->assign("comentarios", comentarios);
            for(let comentario of comentarios){
                suma += parseInt(comentario.puntaje, 10);
                cont ++;
            }
            app.promedio = parseFloat(suma/cont).toFixed(2);
            if(tipo_usuario == "administrador"){
                app.admin = 1;
            }
        });
}

setInterval(printComments, 1000);

