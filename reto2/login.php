<?php
session_start();

// Conexión a la base de datos MySQL
$servername = "localhost";
$username = "id21997171_root";
$password = "Inicio1234.";
$dbname = "id21997171_login";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Verificacion de credenciales
if (isset($_POST['usuario']) && isset($_POST['contrasena'])) {
    $usuario = $_POST['usuario'];
    $contrasena = SHA1($_POST['contrasena']); // Convertir la contraseña a hash SHA1

    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contrasena = '$contrasena'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Inicio de sesión exitoso
        $_SESSION['usuario'] = $usuario;
        echo "success";
    } else {
        // Credenciales inválidas
        echo "Usuario o contraseña incorrectos.";
    }
}

$conn->close();
?>