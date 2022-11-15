<?php include ("../modulos/header.php"); ?>
    <h1>Funciones!<a role="button" class="btn btn-primary" href="index.php">Regresar</a></h1>
    <hr>
    <div>
        <p>Son un grupo de ordenes(instrucciones) agrupadas por un nombre en concreto y
            que pueden reutilizarce solamente invocando a la función<br>
        </p>
        <hr>
</body>

</html>

<!-- INICIO PHP -->

<?php

/*

    funtion nameFuntion ($parametros)
        {
            bloque de instrucciones
        }

*/ 
        //Declarar function
        function muestranombre (){
            echo"javier <br>";
            echo"javier <br>";
            echo"javier <br>";
            echo"javier <br>";
            echo"<hr>";
        }

        //invocar funcion
        muestranombre();


        //Ejemplo 2
        function tabla($numero){
            echo "Tabla de multiplicar del numero: $numero";

            for ($i=1; $i <=10 ; $i++) {
                
                $operacion = $numero * $i;
                echo "$numero x $i = $operacion <br>";                
            }
        }

        if (isset($_GET['numero'])) {
            tabla($_GET['numero']);
        }else{
            echo'No hay numero para hacer la tabla';
        }


        for ($i=0; $i <=10 ; $i++) { 
            tabla($i);
        }
        

        //Varios Parametros a una funcion

        function calculadora($numero1,$numero2,$negrita = false){

            //Conjuto de instrucciones a ejecutar
            
            $suma = $numero1 + $numero2;
            $resta = $numero1 - $numero2;
            $multi = $numero1 * $numero2;
            $div = $numero1 / $numero2;

            $cadena_texto = "";

            if ($negrita) {
                $cadena_texto .= "<strong>";
            }

            echo"<hr>";
            echo"<h2> C A L C U L A D O R A</h2><br>";

             $cadena_texto .="Suma: $suma <br>";
             $cadena_texto .="Resta: $resta <br>";
             $cadena_texto .="Multiplicacion: $multi <br>";
             $cadena_texto .="Division: $div <br>";

            

            if ($negrita) {
                $cadena_texto .= "</strong>";
            }

            $cadena_texto .="<hr/>";
            var_dump($cadena_texto);
            return $cadena_texto;

        }

        
        echo calculadora(10 , 30, true);
        echo calculadora(45 , 70);
        echo calculadora(5 , 10);


        //Funcion dentro de otra

        function getNombre($nombre){
            $texto  = "El nombre es: $nombre";
            return $texto;
        }

        //Retorno "Return"
        function devuelveNombre($nombre , $apellidos){
            $texto = getNombre($nombre)
            ."<br>".
            "los apellidos son: $apellidos";
            return $texto;
        }

        echo devuelveNombre("Javier Alejandro" , "Castro Velazquez");
        

        

?>