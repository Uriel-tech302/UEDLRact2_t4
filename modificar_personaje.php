<?php
include "modelo/conexion.php";

// Obtenemos el ID del personaje desde la URL (lo mandaremos desde el index)
$id = $_GET["id"];

// Consultamos a la base de datos solo por ESE personaje específico
$sql = $conexion->query("SELECT * FROM personajes WHERE id_personaje = $id");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Personaje</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1 class="text-center p-3">Modificar Personaje</h1>
    
    <div class="container-fluid row m-auto d-flex justify-content-center">
        <form class="col-4 p-3" method="POST">
            <h3 class="text-center p-2 bg-light text-secondary border">Modificar Personaje</h3>

            <input type="hidden" name="id" value="<?= $_GET['id'] ?>">

            <?php

            include "controlador/modificar_personaje.php";

            while ($datos = $sql->fetch_object()) {
            ?>
            
            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" value="<?= $datos->nombre ?>">
            </div>
            
            <div class="mb-3">
                <label class="form-label">Juego</label>
                <input type="text" class="form-control" name="juego" value="<?= $datos->juego ?>">
            </div>
            
            <div class="mb-3">
                <label class="form-label">Elemento</label>
                <input type="text" class="form-control" name="elemento" value="<?= $datos->elemento ?>">
            </div>
            
            <div class="mb-3">
                <label class="form-label">Rareza</label>
                <input type="text" class="form-control" name="rareza" value="<?= $datos->rareza ?>">
            </div>
            
            <div class="mb-3">
                <label class="form-label">Nivel Actual</label>
                <input type="text" class="form-control" name="nivel" value="<?= $datos->nivel ?>">
            </div>

            <?php }  ?>

            <button type="submit" class="btn btn-primary" name="btnmodificar" value="ok">Guardar Cambios</button>
        </form>
    </div>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>