<?php

include("conexion.php");
session_start();
if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit();

}

$id_usuario = $_SESSION['id'];

$query = "SELECT Nombre, Edad, Ocupacion, Correo FROM usuarios WHERE id_usuarios = ?";
$stmt = $conexion->prepare($query);
$stmt->bind_param("i", $id_usuario);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Perfil - GOLDTY</title>
<link rel="stylesheet" href="style/perfil.css">
</head>
<body>

<!-- HEADER --> <div class="header"> <a href="homepage.php" class="back-btn" aria-label="Volver"> <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 1 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z" style="color: white;" /> </svg> </a>
<h1>GOLDTY</h1>

<div class="logo">
    <img src="IMG/newlogo.jpeg" alt="Logo GOLDTY">
</div>

</div>

<!-- PERFIL -->
<div class="perfil-container">

    <h2 class="titulo">Mi Perfil</h2>

    <div class="datos-perfil">
        <p><strong>Nombre:</strong> <?php echo htmlspecialchars($user['Nombre']); ?></p>
        <p><strong>Edad:</strong> <?php echo htmlspecialchars($user['Edad']); ?></p>
        <p><strong>Ocupación:</strong> <?php echo htmlspecialchars($user['Ocupacion']); ?></p>
        <p><strong>Correo:</strong> <?php echo htmlspecialchars($user['Correo']); ?></p>
    </div>

    <div class="acciones">
        <a href="editarPerfil.php" class="btn-editar">Editar Perfil</a>
    </div>

</div>

</body>
</html>