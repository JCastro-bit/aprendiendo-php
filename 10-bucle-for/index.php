<?php include ("../modulos/header.php"); ?>
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

