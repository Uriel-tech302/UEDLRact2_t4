<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/78c9fb3d56.js" crossorigin="anonymous"></script>
    <title>Crud en php mysql</title>
</head>

<body>
<script>
    function eliminar(){
        var respuesta=confirm("Estas seguro que deseas eliminar");
        return respuesta;
    }

</script>
    <h1 class="text-center p-3">Hola, este es mi CRUD</h1>
    <div class="container-fluid row">
        <form class="col-4 p-3" method="POST" action="index.php">
            <?php
            include "modelo/conexion.php";
            include "controlador/registro_personal.php";
            include "controlador/eliminar_personaje.php";
            ?>
            <h3 class="text-center p-2 bg-light text-secondary border">Personaje</h3>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Juego</label>
                <input type="text" class="form-control" name="juego">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Elemento</label>
                <input type="text" class="form-control" name="elemento">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Rareza</label>
                <input type="text" class="form-control" name="rareza">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nivel Actual</label>
                <input type="text" class="form-control" name="nivel">
            </div>

            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
        </form>
        <div class="col-8 p-4">
            <table class="table">
                <thead class="table-info">
                    <tr>
                        <th scope="col">Personaje</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Juego</th>
                        <th scope="col">Elemento</th>
                        <th scope="col">Rareza</th>
                        <th scope="col">Nivel</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "modelo/conexion.php";
                    $sql = $conexion->query("SELECT * FROM personajes");
                    while ($datos = $sql->fetch_object()) {
                    ?>
                        <tr>
                            <td><?= $datos->id_personaje ?></td>
                            <td><?= $datos->nombre ?></td>
                            <td><?= $datos->juego ?></td>
                            <td><?= $datos->elemento ?></td>
                            <td><?= $datos->rareza ?></td>
                            <td><?= $datos->nivel ?></td>
                            <td>
                                <a href="modificar_personaje.php?id=<?= $datos->id_personaje ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a onclick="return eliminar()" href="index.php?id=<?= $datos->id_personaje ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>