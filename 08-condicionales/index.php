<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Condicionales!</title>
  </head>
  <body>
    <h1>Condicionales!</h1>
    <hr>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>

<!-- INICIO PHP -->

<?php

/*
    IF:
        if(condicion){
            instrucciones
        }else{
            otras instrucciones
        }

    Operadores de comparacion:

    == igual
    === identico
    != diferente
    <> diferente
    !== NO identico
    < Menor que
    > Mayo que 
    <= Menor o igual que 
    >= Mayor o igual que
    
    Operadores Logicos:

    && AND 
    || OR
    !  NOT
    and , or 

*/
echo "<br><h3> Ejemplo 1 </h3>";
$color = 'rojo';

if($color == 'rojo'){
    echo "El color es Rojo";
    }else{
        echo 'El color no es Rojo';
    }

    echo '<br>';
 
//Ejemplo 2 
echo '<hr>'; 
echo "<br><h3> Ejemplo 2 </h3>";

$year = 2019;
if($year < 2019){
    echo "Es un año anterior a 2019";
    }else{
        echo 'Es un año posterior a 2019';
    }

    echo '<br>';

//Ejemplo 3
echo '<hr>';
echo "<br><h3> Ejemplo 3 </h3>";
$nombre = 'Javier Castro';
$edad = 20;
$mayoria_edad = 18;
$continente = 'Americano';

if ($edad >= $mayoria_edad) {
    echo 'Es mayor de edad';
    echo "<br><h4>$nombre Es de Jalisco </h4>";
    echo "<br><h4> Es  $continente </h4>";
}else {
    echo "<h2>$nombre NO es mayor de edad</h2>";
}

//Ejemplo 4
/*
echo '<hr>';
$dia = 3;
if ($dia == 1) {
    echo 'Es Lunes';    
}else{
    if ($dia == 2) {
        echo 'Es Martes';
    }else {
        if ($dia == 3) {
            echo 'Es Miercoles';
        }
    }
    
}*/
//Ejemplo 4
$dia = 3;
echo '<hr>';
echo "<br><h3> Ejemplo 4 </h3>";
if ($dia == 1) {
    echo 'LUNES';
}elseif ($dia == 2) {
    echo 'Martes';
}elseif ($dia == 3) {
    echo 'Miercoles';
}


//Ejemplo 5 
echo '<hr>';
echo "<br><h3> Ejemplo 5 </h3>";
$edad1 = 18;
$edad2 = 64;
$edad_oficial = 20;


if ($edad_oficial >= $edad1 && $edad_oficial <= $edad2) {
    echo 'Puede Trabajar';
}else {
    echo 'No puede trabajar';
}

//Ejemplo 6 
echo '<hr>';
echo "<br><h3> Ejemplo 6 </h3>";

$pais = 'Mexico';
if ($pais == 'Mexico' || $pais == 'España ' || $pais == 'Colombia') {
    echo 'En este pais se habla español';
}else {
    echo 'No se habla español';
}

//Switch
echo '<hr>';
echo "<br><h3> Ejemplo Switch </h3>";

switch ($dia) {
    case 1:
        echo 'Lunes';
        break;
    case 2:
        echo 'Martes';
        break;  
    default:
        echo 'Es un dia ';

}

//GOTO
goto marca;
echo "<hr>";
echo "<br><h3> Ejemplo de GOTO </h3>";
echo "<br><h4> Esto es una instruccion </h4>";
echo "<br><h4> Esto es una instruccion </h4>";
echo "<br><h4> Esto es una instruccion </h4>";
echo "<br><h4> Esto es una instruccion </h4>";

marca:
echo "<br><h4> Me salte 4 echos </h4>";



?>