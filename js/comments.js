"use strict"

// App Vue Mostrar comentarios
// Para eliminarlo, si es adm agrego botón eliminar
// Ese botón ejecuta delCommet
let app = new Vue({
    el: "#app-comments",
    data: {
        comentarios: [],
        promedio: 0,
        admin: 0,
    },
    methods: {
        delComment: function (id_com){
            fetch('api/comentario/' + id_com, {
                method: 'DELETE',
            })
            .then(response => {
                printComments();
            })
            .catch(error => console.log(error));
        }
    }
})

// App Vue para mostrar form para agregar comentario
// Lo mustra si es un usuario registrado
// El botón ejecuta la función addComment
let app_form = new Vue({
    el: "#app-form-comments",
    data: {
        usuario_reg: 0,
        nombre_usuario: "",
        id_jugador: 0
    },
    methods: {
        addComment: function () {
            if(document.querySelector("select[name=puntuacion]").value == 0
                || document.querySelector("textarea[name=comentario]").value == ""){
                alert("Para publicar un comentario debe completar sendos campos Comentario y Puntaje");
            }
            else
            {
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
                    printComments();
                })
                .catch(error => console.log(error));
            } 
        }
    }
})

printComments();
printFormAddComment();

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
        printComments();
    })
    .catch(error => console.log(error));
}

function printComments() {
    
    let id_jug = document.querySelector("input[name=jugador]").value;
    let tipo_usuario = document.querySelector("input[name=usuario]").value;
    //alert(tipo_usuario);
    let suma = 0;
    let cont = 0;
    
    //fetch('api/comentarios/' + id_jug)
    fetch('api/jugadores/' + id_jug + '/comentarios' )
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

//setInterval(printComments, 1000);

function printFormAddComment(){
    let tipo_usuario = document.querySelector("input[name=tipo_usuario]").value;
    let nombre_usuario = document.querySelector("input[name=nombre_usuario]").value;
    let id_jugador = document.querySelector("input[name=id_jugador]").value;
    if(tipo_usuario == "usuario"){
        app_form.usuario_reg = 1;
        app_form.nombre_usuario = nombre_usuario;
        app_form.id_jugador = id_jugador;
    }
}




