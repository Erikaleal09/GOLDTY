<?php
include("conexion.php");
session_start();

if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit();
}

$id_usuario = $_SESSION['id'];

/* =========================
   OBTENER DATOS ACTUALES
========================= */
$query = "SELECT Nombre, Edad, Ocupacion, Correo 
          FROM usuarios 
          WHERE id_usuarios = ?";
$stmt = $conexion->prepare($query);
$stmt->bind_param("i", $id_usuario);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

/* =========================
   ACTUALIZAR SOLO SI ES POST
========================= */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $ocupacion = $_POST['ocupacion'];
    $correo = $_POST['correo'];

    $update = "UPDATE usuarios 
               SET Nombre = ?, Edad = ?, Ocupacion = ?, Correo = ?
               WHERE id_usuarios = ?";

    $stmt = $conexion->prepare($update);
    $stmt->bind_param(
        "sissi",
        $nombre,
        $edad,
        $ocupacion,
        $correo,
        $id_usuario
    );

    $stmt->execute();

    header("Location: perfil.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Editar Perfil - GOLDTY</title>
<link rel="stylesheet" href="style/editarPerfil.css">
</head>
<body>

<!-- HEADER -->
<div class="header">
    <button class="back-btn">
        <a href="perfil.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z"
                    style="color: white;" />
            </svg>
        </a>
    </button>
    <h1>GOLDTY</h1>
    <div class="logo">
        <img src="IMG/newlogo.jpeg" alt="GOLDTY">
    </div>
</div>

<!-- FORMULARIO -->
<div class="editar-perfil-container">
    <h1>Editar Perfil</h1>

    <form method="POST" class="form-editar-perfil">

        <label>Nombre</label>
        <input type="text" name="nombre"
               value="<?php echo htmlspecialchars($user['Nombre']); ?>" required>

        <label>Edad</label>
        <input type="number" name="edad"
               value="<?php echo htmlspecialchars($user['Edad']); ?>" required>

        <label>Ocupación</label>
        <input type="text" name="ocupacion"
               value="<?php echo htmlspecialchars($user['Ocupacion']); ?>" required>

        <label>Correo</label>
        <input type="email" name="correo"
               value="<?php echo htmlspecialchars($user['Correo']); ?>" required>

        <div class="buttons-container">
            <button type="submit" class="btn-guardar">Guardar Cambios</button>
            <a href="perfil.php" class="btn-cancelar">Cancelar</a>
        </div>

    </form>
</div>

</body>
</html>
