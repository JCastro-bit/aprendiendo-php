<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>19-validacion!</title>
</head>

<body>
    <div>
        <h1>Datos Procesados!<a role="button" class="btn btn-primary" href="index.php">Regresar</a></h1>
        <hr>
        <div class="container">
            <p>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi et perspiciatis neque eum
                    perferendis, cumque repellendus nulla mollitia aperiam corporis? Dolorum iusto asperiores autem<br>
                    placeat, nisi tempore hic facilis quos?
                </li>
            </p>            
        </div>
        <hr>
        <div>
            <?php if($error == 'ok'): ?>
            <p><?=$nombre?></p>
            <p><?=$apellido?></p>
            <p><?=$eadad?></p>
            <p><?=$email?></p>
            <p><?=$password?></p>
            <?php endif; ?>
        </div>
    </div>
</body>

</html>

<!-- INICIO PHP -->

<?php

    $error = 'faltan_valores';
    if(!empty($_POST['nombre']) && !empty($_POST['apellidos']) &&
       !empty($_POST['edad']) &&  !empty($_POST['email']) &&
       !empty($_POST['password'])){

          $error = "ok";

          $nombre  = $_POST['nombre'];
          $apellidos = $_POST['apellidos'];
          $edad = $_POST['edad'];
          $email = $_POST['email'];
          $password = $_POST['password'];

      }else{
          $error = true;
          header("Location:index.php?error= $error");
      }
 

      
?>