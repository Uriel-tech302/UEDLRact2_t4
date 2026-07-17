<?php
if (!empty($_POST["btnmodificar"])) {
    
    if (!empty($_POST["nombre"]) and !empty($_POST["juego"]) and !empty($_POST["elemento"]) and !empty($_POST["rareza"]) and !empty($_POST["nivel"])) {
        
        $id = $_POST["id"]; 
        $nombre = $_POST["nombre"];
        $juego = $_POST["juego"];
        $elemento = $_POST["elemento"];
        $rareza = $_POST["rareza"];
        $nivel = $_POST["nivel"];
        
        $sql = $conexion->query("UPDATE personajes SET nombre='$nombre', juego='$juego', elemento='$elemento', rareza='$rareza', nivel=$nivel WHERE id_personaje=$id");
        
        if ($sql == 1) {
            header("location:index.php");
        } else {
            echo '<div class="alert alert-danger m-3">Error al modificar el personaje</div>';
        }
        
    } else {
        echo '<div class="alert alert-warning m-3">Campos Vacíos</div>';
    }
}
?>