<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Bucles!</title>
</head>

<body>
    <h1>Bucles!</h1>
    <hr>
    <div>
        <h2>Instragram</h2>
        <!-- LightWidget WIDGET -->
        <script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script>
        <iframe
            src="//lightwidget.com/widgets/8974aba2b14b5107ae1c158cad29bfcc.html" scrolling="no"
            allowtransparency="true" class="lightwidget-widget" style="width:20%;border:0;overflow:hidden;">
        </iframe>
</body>

</html>

<!-- INICIO PHP -->

<?php
/*
Estructura de control que itera o repite la ejecucion 
de instrucciones tantas veces sea requerido

    While 

    while(Condicion){
        Bloque de instrucciones
    }

*/  

//Ejemplo While

echo '<h3>Ejemplo de While</h3><br>';
$numero = 0;

while ($numero <= 100) {
    echo "$numero";
    

    if ($numero != 100) {
        echo ", ";
    }
    $numero++;
}

echo '<hr>';
if (isset($_GET['numero'])) {
    $numero = (int) $_GET['numero']; //Cambiamos el tipo de variable anteponiendo al get
}else {
    $numero = 500;
}

echo "<h3>Tabla de multiplicar del numero $numero </h3>";

$contador = 0;

while ($contador <= 10) {
    echo "$numero x $contador = ".($numero*$contador)."<br>";
    $contador++;
}

//Ejemplo Do While


?>