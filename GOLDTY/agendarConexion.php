<?php
session_start();
include("conexion.php");

if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: agendar.php");
    exit();
}

$id_usuario = $_SESSION['id'];

$titulo = trim($_POST['titulo']);
$descripcion = trim($_POST['descripcion']);
$categoria = (int) $_POST['categoria'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$completada = isset($_POST['completada']) ? 1 : 0;

if (
    empty($titulo) ||
    empty($descripcion) ||
    empty($categoria) ||
    empty($fecha) ||
    empty($hora)
) {
    echo "⚠️ Llena todos los campos.";
    exit();
}

$sql = "INSERT INTO actividad_urge
(titulo, descripcion, id_categoria, fecha, hora, completada, id_usuario)
VALUES (?, ?, ?, ?, ?, ?, ?)";

$stmt = $conexion->prepare($sql);
$stmt->bind_param(
    "ssissii",
    $titulo,
    $descripcion,
    $categoria,
    $fecha,
    $hora,
    $completada,
    $id_usuario
);

if ($stmt->execute()) {
    header("Location: verUrg.php");
    exit();
} else {
    echo "❌ Error al guardar la actividad.";
}
