<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servidor = "localhost";   
$usuarioBD = "root";        
$passwordBD = "";        
$base_datos = "login_cafeteria";   
$conn = "";

$conn = mysqli_connect($servidor, $usuarioBD, $passwordBD, $base_datos);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre_usuario = $_POST['nombre_usuario'] ?? '';
    $contraseña = $_POST['contraseña'] ?? '';

    $stmt = $conn->prepare("SELECT contraseña FROM usuario WHERE nombre_usuario = ?");

    $stmt->bind_param("s", $nombre_usuario);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {
        $fila = $resultado->fetch_assoc();
        if ($contraseña === $fila['contraseña']) {
            $_SESSION['nombre_usuario'] = $nombre_usuario;
            header("Location: session.php");
            exit();
        } else {
            echo "Contraseña incorrecta.<br><a href='index.html'>Intentar nuevamente</a>";
        }
    } else {
        echo "Usuario no encontrado.<br><a href='index.html'>Intentar nuevamente</a>";
    }
    $stmt->close();
}
$conn->close();
?>
