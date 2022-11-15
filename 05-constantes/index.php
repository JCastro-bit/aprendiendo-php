<?php include ("../modulos/header.php"); ?>
    <h1>Constantes!</h1>
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

    //Constante (contenedor de información que no puede variar )
    define('nombre','Javier Castro');
    define('nombre2','Natalia Berumen');
    //define('nombre de constante ','valor');
    define('web','javiercastro.com');

    echo '<h1>'.nombre.'</h1>';
    echo web;
    echo '<br>';
    echo nombre2;

    //Constantes predefinidas

    echo PHP_OS;       
    echo '<br>';    
    echo PHP_VERSION;    
    echo '<br>';
    echo __DIR__;

?>