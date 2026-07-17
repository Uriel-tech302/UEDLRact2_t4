<?php
if (!empty($_GET["id"])) {
    
    $id = $_GET["id"];
    
    $sql = $conexion->query("DELETE FROM personajes WHERE id_personaje = $id");
    
    if ($sql == 1) {
        echo '<div class="alert alert-success m-3">Personaje eliminado correctamente</div>';
    } else {
        echo '<div class="alert alert-danger m-3">Error al eliminar el personaje</div>';
    }
}
?>