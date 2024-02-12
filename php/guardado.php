<?php
// Conexion a la base de datos
$db_host = 'localhost'; // Nombre del servidor
$db_user = 'root'; // Usuario
$db_pass = '2004'; // Contraseña
$db_name = 'pueba'; // La base de datos que queremos utilizar

$conn = mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error)
{
    die('Error en la conexión: ' . $conn->connect_error);
}

// Insertar valores a la tabla Datos
$Usuario = $_POST["usuario"];
$Contrasena = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);
$Contrasena  = md5($_POST['contrasena']);

$query = "INSERT INTO Datos (nombre, contrasena) VALUES ($Usuario, '$Contrasena')";

if (!mysqli_query($conn,$query)) {
    die("Error al insertar los datos");
} else {
    echo "<h1>¡Registro realizado correctamente!</h1>";
    header ("Location: IniciarSecion.html");
}
?>