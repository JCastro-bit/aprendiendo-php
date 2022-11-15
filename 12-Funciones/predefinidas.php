<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Predefinidas!</title>
</head>

<body>
    <h1>Predefinidas!<a role="button" class="btn btn-primary" href="index.php">Regresar</a></h1>
    <hr>
    <div>
        <p> Funciones Pre-definidas por el lenguaje
        </p>
        <hr>
</body>

</html>

<!-- INICIO PHP -->

<?php

    //debug
    $nombre = "Javier Castro";
    var_dump($nombre);

    //fecha
    echo date('d-m-y');
    echo date('D-M-Y');
    echo "<hr>";
    echo "<br>";

    echo time();

    //matematicas
    echo "<br> Raiz cuadrada de 10 ".sqrt(10);
    echo "<br> Aleatorio de  de 10 y 40 ".rand(10,40);
    echo "<br> El valor de Pi es = ".pi();
    echo "<br> Redondear numero ".round(7.8956146 , 1);
    echo "<hr>";
    //Generales
    echo gettype($nombre);

    if (is_string($nombre)) {
        echo "<br>La varaible es una cadena";
    }
    
    echo "<br>";
    $frase  ="           contenido             ";
    //Borra espacios
    echo trim($frase);

    //Eliminar variables o indices de Array
    $year = 2020;
    unset($year);

    //Comprobar variable vacia
    $texto = "";

    if (empty($texto)) {
        echo "<br> La variable texto esta vácia";
    }else{
        echo "<br> La variable texto Tiene contenido";
    }

    //Contar caracteres String
    echo "<br>";
    $cadena = "123456789";
    echo strlen($cadena);

    //Encontrar caracter determinado o palabra
    echo "<br>";
    $frase = "La vida es bella";
    echo strpos($frase , "vida");

    //Remplazar palabras
    echo "<br>";
    $frase = "La vida es bella";
    echo str_replace("vida" , "moto" , $frase);

    //Mayusculas a minusculas 
    echo "<br>";    
    echo strtolower($frase);
    echo "<br>";
    echo strtoupper($frase);


?>