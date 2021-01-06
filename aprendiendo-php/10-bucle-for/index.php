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
    <h1>Bucles For</h1>
    <hr>
  


<!-- INICIO PHP -->

<?php
 
   /* for (variable contador ,condicion , incremento contador){
        ·BLO DE INSTRUCCIONES 
        
    }*/

    $resultado = 0;

    for ($i=0; $i<=100 ; $i++) { 
        $resultado += $i;
            echo"<p>$resultado<p/>";
            }
        
          echo "<h1>El resultado es $resultado <h/>";

          echo"<hr/>";

          
          if (isset($_GET['numero'])) {
              $numero = (int) $_GET['numero']; //Cambiamos el tipo de variable anteponiendo al get
          }else {
              $numero = 1;
          }
          
          echo "<h3>Tabla de multiplicar del numero $numero </h3>";
          
         for ($contador=1; $contador <= 10 ; $contador++) { 
             echo "$numero x $contador = ".($numero*$contador)."<br/>";             
         }


         //BREAK         
         echo"<hr/>";          
                  
          echo "<h3>Tabla de multiplicar del numero $numero </h3>";
          
          $numero = 45 ;

         for ($contador=1; $contador <= 10 ; $contador++) { 

            if($numero == 45){
                echo " no se puede mostar estas operaciones";
                break;
            }
             echo "$numero x $contador = ".($numero*$contador)."<br/>";             
         }


?>

