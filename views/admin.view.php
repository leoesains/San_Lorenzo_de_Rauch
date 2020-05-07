<?php

class AdminView{

    //**************************************************************************************************************** */

    public function keyWord() {

        echo '
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <base href="' . BASE_URL . '">
                <title>Palabra Clave</title>
                <link rel="stylesheet" href="css/estilos.css">
            </head>
            <body>
        
                <form action="formulario" method="POST">
                    <label>Ingrese la palabra clave</label>
                    <input type="text" name="palabraClave">
                    <button type="submit">Ingresar</button>
                </form>
        ';

        echo '
            </body>
            </html>
        ';
    }

    public function adminForm() {

        echo '
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <base href="' . BASE_URL . '">
                <title>Formulario Administrador</title>
                <link rel="stylesheet" href="css/estilos.css">
            </head>
            <body>
        
                <form action="enviarFormulario" method="POST">
                    <label>Ingrese su nombre</label>
                    <input type="text" name="name">
                    <label>Ingrese su usuario</label>
                    <input type="text" name="username">
                    <label>Ingrese su contraseña</label>
                    <input type="text" name="password">
                    <button type="submit">Enviar</button>
                </form>
        ';

        echo '
            </body>
            </html>
        ';
    }


}