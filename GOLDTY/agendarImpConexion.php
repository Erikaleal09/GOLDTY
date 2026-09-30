<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
include("conexion.php");

if (!isset($_SESSION['id'])) {
    echo "NO HAY SESIÓN";
    exit();
}

$id_usuario = $_SESSION['id'];

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (
        !empty($_POST['titulo']) &&
        !empty($_POST['descripcion']) &&
        !empty($_POST['categoria']) &&
        !empty($_POST['fecha']) &&
        !empty($_POST['hora'])
    ) {

        $titulo = mysqli_real_escape_string($conexion, $_POST['titulo']);
        $descripcion = mysqli_real_escape_string($conexion, $_POST['descripcion']);
        $categoria = mysqli_real_escape_string($conexion, $_POST['categoria']);
        $fecha = $_POST['fecha'];
        $hora = $_POST['hora'];
        $completada = isset($_POST['completada']) ? 1 : 0;

        $sql = "INSERT INTO actividad_imp 
        (titulo, descripcion, id_categoria, fecha, hora, completada, id_usuario)
        VALUES 
        ('$titulo', '$descripcion', '$categoria', '$fecha', '$hora', '$completada', '$id_usuario')";

        if (mysqli_query($conexion, $sql)) {
            header("Location: verImp.php");
            exit();
        } else {
            echo "ERROR SQL: " . mysqli_error($conexion);
        }

    } else {
        echo "FALTAN CAMPOS";
    }
}
