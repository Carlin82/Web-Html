<?php
// Datos de conexión a la base de datos
$servidor = "localhost";
$usuario = "root";
$password = "";
$base_datos = "mi_base_datos";

// Crear la conexión
$conexion = mysqli_connect($servidor, $usuario, $password, $base_datos);

// Verificar la conexión
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Recoger los datos del formulario HTML
$nombre = $_POST['nombre'];
$email = $_POST['email'];

// Insertar datos en la tabla
$sql = "INSERT INTO usuarios (nombre, email) VALUES ('$nombre', '$email')";

if (mysqli_query($conexion, $sql)) {
    echo "Datos guardados con éxito.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}

// Cerrar conexión
mysqli_close($conexion);
?>
