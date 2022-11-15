<?php include ("../modulos/header.php"); ?>
    <h1>Subir archivos al servidor!</h1>
    <hr>
    <div class="container">
        <p>
            <li>Subir diferentes archivos al servidor para almacenarlos.<br>
            </li>
        </p>
    </div>
    <hr>
    <hr>
    <div class="container">
    <h2>Formulario para subir imagenes al servidor!</h2>
        <form action="upload.php" method="POST" enctype="multipart/form-data" >
            <div class="mb-3">
                <label for="archivo" class="form-label">Seleccione archivo:</label>
                <input class="form-control" type="file"  name="archivo">                
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" required>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Subir</button>
        </form>
    </div>
    <hr>
    <div class="container">
        <div>
        <h2>Listado de imagenes</h2>
        <?php
        
            $gestor = opendir('./images');
            if($gestor){
                while (($image = readdir($gestor)) !== false) {
                    if($image != '.' && $image != '..'){
                       echo"<img class='img-thumbnail border border-secondary' src='images/$image' width='150px'/>&nbsp&nbsp"; 
                    }
                }
            }

        ?>
        </div>        
    </div>
</body>

</html>

