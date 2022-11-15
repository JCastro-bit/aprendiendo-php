<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Sesion!</title>
</head>

<body>
    <div>
        <h1>Sesions!<a role="button" class="btn btn-primary" href="index.php">Regresar</a></h1>
        <hr>
        <div class="container">
            <p>
                <li>Sesion: Almacenar y persistir datos del usuario mientras
                    navega en un sitio web hasta que cierra sesion o cierra<br>
                    el navegador
                </li>
            </p>
            <hr>
        </div>
    </div>
</body>

</html>


<?php

/*
Sesion: Almacenar y persistir datos del usuario mientras
navega en un sitio web hasta que cierra sesion o cierra
el navegador
*/


//Iniciar la sesion
session_start();

$variable_normal= "Soy una cadena de texto";

//Variable de session
$_SESSION['variable_persistente']= "Hola soy una sesion activa";


echo $variable_normal. "<br>";
echo $_SESSION['variable_persistente']. "<br>";

?>