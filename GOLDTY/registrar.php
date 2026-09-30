<?php
session_start();
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: register.php");
    exit();
}

$name = trim($_POST['name']);
$age = (int) $_POST['age'];
$ocupacion = trim($_POST['ocupacion']);
$email = trim($_POST['email']);
$password = $_POST['password'];

// verificar correo
$check = $conexion->prepare(
    "SELECT id_usuarios FROM usuarios WHERE correo = ?"
);
$check->bind_param("s", $email);
$check->execute();
$check->store_result();

if ($check->num_rows > 0) {
    echo "El correo ya está registrado";
    exit();
}

// encriptar contraseña
$hash = password_hash($password, PASSWORD_DEFAULT);

// insertar usuario
$sql = "INSERT INTO usuarios (nombre, edad, ocupacion, correo, contraseña)
        VALUES (?, ?, ?, ?, ?)";

$stmt = $conexion->prepare($sql);
$stmt->bind_param("sisss", $name, $age, $ocupacion, $email, $hash);

if ($stmt->execute()) {
    $_SESSION['id'] = $stmt->insert_id;
    header("Location: bienvenido.php");
    exit();
} else {
    echo "Error al registrar";
}
