<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style/login.css">
</head>
<body>

<div class="header">
    <a href="index.php" class="back-btn">
  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
       fill="currentColor" class="bi bi-arrow-left-circle"
       viewBox="0 0 16 16">
    <path fill-rule="evenodd"
      d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8
         m15 0A8 8 0 1 1 0 8
         a8 8 0 0 1 16 0
         m-4.5-.5a.5.5 0 0 1 0 1
         H5.707l2.147 2.146
         a.5.5 0 0 1-.708.708
         l-3-3a.5.5 0 0 1 0-.708
         l3-3a.5.5 0 1 1 .708.708
         L5.707 7.5z" />
  </svg>
</a>


    <h1>GOLDTY</h1>

    <div class="logo">
      <img src="IMG/newlogo.jpeg" alt="GOLDTY" />
    </div>
</div>

<form method="POST" action="loginConex.php">
    <div class="form-container">

        <h1 class="goldty">GOLDTY</h1><br>
        <h3>Iniciar sesión</h3><br>

        <div class="input-wrapper">
            <label>Email</label>
            <input type="email" name="email" placeholder="Email" required>
        </div>

        <div class="input-wrapper">
            <label>Contraseña</label>
            <input type="password" name="password" placeholder="Contraseña" required>
        </div>

        <button class="btn" type="submit" name="login">Enviar</button>

        <p class="no">
            ¿No tienes una cuenta?
            <a href="register.php">Regístrate ahora!</a>
        </p>

    </div>
</form>

</body>
</html>
