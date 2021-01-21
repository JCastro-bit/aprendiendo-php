<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Funciones!</title>
</head>

<body>
    <div>
        <h1>Funciones!<a role="button" class="btn btn-primary" href="index.php">Regresar</a></h1>
        <hr>
        <div class="container">
            <p>
                <li>Un array, es un tipo de dato estructurado que permite almacenar un conjunto de datos homogeneo, es
                    decir, todos ellos del mismo tipo y relacionados. Cada uno de los elementos que componen un vector
                    pueden ser de tipo simple como caracteres, entero o real, o de tipo compuesto o estructurado como
                    son vectores, estructuras, listas...<br>
                </li>
            </p>            
        </div>
        <hr>
    </div>
</body>

</html>

<!-- INICIO PHP -->

<?php

    $pelicula= "Batman";
    $peliculas = array('Batman' , 'Spider' , 'lord' , 'superman');

    var_dump($peliculas[3]);
    
    echo ($peliculas[2]);
 
    $cantantes = ['Batman' , 'Spider' , 'lord' , 'superman'];

    //Orden alfabetico
    sort($peliculas);
    var_dump($peliculas);

    //Orden inverso
    arsort($peliculas);
    var_dump($peliculas); 

?>