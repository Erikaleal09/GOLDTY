<?php
include("conexion.php");
session_start();

if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit();
}

$id_usuario = intval($_SESSION['id']);

if (isset($_POST['agendar'])) {

    if (
        !empty($_POST['titulo']) &&
        !empty($_POST['descripcion']) &&
        !empty($_POST['categoria']) &&
        !empty($_POST['fecha']) &&
        !empty($_POST['hora'])
    ) {

        $titulo = mysqli_real_escape_string($conexion, $_POST['titulo']);
        $descripcion = mysqli_real_escape_string($conexion, $_POST['descripcion']);
        $categoria = intval($_POST['categoria']);
        $fecha = $_POST['fecha'];
        $hora = $_POST['hora'];
        $completada = isset($_POST['completada']) ? 1 : 0;

        $sql = "INSERT INTO actividad_noimp 
                (titulo, descripcion, id_categoria, fecha, hora, completada, id_usuario)
                VALUES 
                ('$titulo', '$descripcion', $categoria, '$fecha', '$hora', $completada, $id_usuario)";

        if (mysqli_query($conexion, $sql)) {
            header("Location: verNoimp.php");
            exit();
        } else {
            echo "❌ Error al guardar: " . mysqli_error($conexion);
        }

    } else {
        echo "⚠️ Completa todos los campos";
    }
}
?>
