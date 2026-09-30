<?php
session_start();
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: login.php");
    exit();
}

$email = trim($_POST["email"]);
$password = $_POST["password"];

$sql = "SELECT id_usuarios, contraseña FROM usuarios WHERE correo = ?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $usuario = $result->fetch_assoc();

    if (password_verify($password, $usuario['contraseña'])) {
        $_SESSION['id'] = $usuario['id_usuarios'];
        header("Location: bienvenido.php");
        exit();
    } else {
        echo "Contraseña incorrecta";
    }
} else {
    echo "El usuario no existe";
}
