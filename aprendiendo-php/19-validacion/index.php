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
        <h1>19-Validacion!<a role="button" class="btn btn-primary" href="index.php">Regresar</a></h1>
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
        <div class="container">
            <div class="mb-3">
                <h1>Validar formulario en PHP</h1>

                <?php
                
                    if(isset($_GET['error'])){
                        $error = $_GET['error'];
                        if($error == 'faltan datos') {
                            echo '<strong style="color:red">
                            Indroduce todos los datos en todos los campos del formulario
                            </strong>';
                        }
                    }

                ?>
                <form method="POST" action="procesar_formulario.php">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" class="form-control" name="nombre" required="required" autofocus="autofocus">
                    </div>
                    <div class="mb-3">
                        <label for="apellido" class="form-label">Apellido:</label>
                        <input type="text" class="form-control" name="apellido" required="required">
                    </div>
                    <div class="mb-3">
                        <label for="edad" class="form-label">Edad:</label>
                        <input type="number" class="form-control" name="edad" required="required">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-Mail:</label>
                        <input type="email" class="form-control" name="email"required="required">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" required="required">
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>

<!-- INICIO PHP -->

<?php


 
?>