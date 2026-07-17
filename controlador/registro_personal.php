<?php
// 1. Verificamos si se hizo clic en el botón "Registrar"
if (!empty($_POST["btnregistrar"])) {
    
    // 2. Validamos que ningún campo esté vacío
    if (!empty($_POST["nombre"]) and !empty($_POST["juego"]) and !empty($_POST["elemento"]) and !empty($_POST["rareza"]) and !empty($_POST["nivel"])) {
        
        // 3. Guardamos lo que el usuario escribió en variables de PHP
        $nombre = $_POST["nombre"];
        $juego = $_POST["juego"];
        $elemento = $_POST["elemento"];
        $rareza = $_POST["rareza"];
        $nivel = $_POST["nivel"];
        
        // 4. Ejecutamos la consulta SQL para insertar los datos en la tabla
        $sql = $conexion->query("INSERT INTO personajes(nombre, juego, elemento, rareza, nivel) VALUES ('$nombre', '$juego', '$elemento', '$rareza', $nivel)");
        
        // 5. Comprobamos si la inserción fue exitosa y mostramos una alerta
        if ($sql == 1) {
            echo '<div class="alert alert-success">Personaje registrado correctamente</div>';
        } else {
            echo '<div class="alert alert-danger">Error al registrar el personaje</div>';
        }
        
    } else {
        // Si el usuario dejó algún campo vacío, le avisamos
        echo '<div class="alert alert-warning">Algunos de los campos esta vacio</div>';
    }
}
?>