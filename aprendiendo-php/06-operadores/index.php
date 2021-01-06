<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Operadores!</title>
  </head>
  <body>
    <h1>Operadores!</h1>
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

//Operadores Aritmeticos
$numero1 = 55;
$numero2 = 33;

echo '<h2>Suma: '.($numero1+$numero2).'<br></h2>';
echo '<h2>Resta: '.($numero1-$numero2).'<br></h2>';
echo '<h2>Multiplicacion: '.($numero1*$numero2).'<br></h2>';
echo '<h2>Division: '.($numero1/$numero2).'<br></h2>';
echo '<h2>Residuo: '.($numero1%$numero2).'<br></h2>';

//Operadores de incremento y decremento
$year = 2020;
$year--;//decremento de 1
++$year; //Incremento de 1
echo "<h1>$year</h1>";

//Operadores de asignacion
$edad = 55;

echo '<h3>';
echo $edad.'<br>';
echo ($edad+=5);//Edad = edad + 5
echo ($edad-=5);//Edad = edad - 5
echo ($edad*=5);//Edad = edad * 5
echo ($edad/=5);//Edad = edad / 5
echo '</h3>';




?>