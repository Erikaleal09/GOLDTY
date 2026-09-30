<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Acerca de GOLDTY</title>

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <!-- CSS -->
  <link rel="stylesheet" href="style/sobreNosotros.css">
</head>
<body>

  <!-- HEADER -->
  <div class="header">
    <button class="back-btn">
      <a href="homepage.php">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
          viewBox="0 0 16 16">
          <path fill-rule="evenodd"
            d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z"
            style="color:white;" />
        </svg>
      </a>
    </button>

    <h1>GOLDTY</h1>

    <div class="logo">
      <img src="IMG/newlogo.jpeg" alt="GOLDTY">
    </div>
  </div>

  <!-- MAIN -->
  <main>

    <!-- IMAGEN -->
    <section class="logo-section">
      <img src="IMG/newtablet.png" alt="Goldty App">
    </section>

    <!-- DESCRIPCIÓN -->
    <section class="description">
      <p>
        En <strong>GOLDTY</strong> creemos que muchas personas tienen dificultades para organizar su tiempo.
        Por eso creamos esta plataforma para ayudarte a priorizar lo realmente importante.
        <br><br>
        <strong>GOLDTY</strong> te acompaña a cumplir tus metas porque tu tiempo es oro.
      </p>
    </section>

    <!-- CARDS -->
    <section class="card-row">

      <div class="card">
        <img src="IMG/reminder-note-1-27.png" class="card-img" alt="Misión">
        <h5 class="card-title">
          <i class="fa-solid fa-bullseye icon-card"></i> Misión
        </h5>
        <p class="card-text">
          Ayudar a las personas a organizar, priorizar y gestionar sus actividades
          de forma simple y efectiva.
        </p>
      </div>

      <div class="card">
        <img src="IMG/time-91.png" class="card-img" alt="Visión">
        <h5 class="card-title">
          <i class="fa-solid fa-eye icon-card"></i> Visión
        </h5>
        <p class="card-text">
          Ser una plataforma confiable que ayude a estudiantes y profesionales
          a mejorar su productividad.
        </p>
      </div>

    </section>

    <!-- INFO EXTRA -->
    <section class="extra-info">
      <h2>
        <i class="fa-solid fa-circle-info icon-section"></i>
        ¿Qué es Goldty?
      </h2>
      <p>
        Goldty es un sitio web para gestionar tu tiempo, organizar tus metas
        y mejorar tu productividad diaria.
      </p>

      <h2>
        <i class="fa-solid fa-rocket icon-section"></i>
        ¿Qué ofrece Goldty?
      </h2>
      <p>
        <strong>Agenda inteligente:</strong> planificación clara.<br>
        <strong>Gestión de tareas:</strong> organización por prioridad.<br>
        <strong>Recordatorios:</strong> notificaciones útiles.
      </p>

      <h2>
        <i class="fa-solid fa-users icon-section"></i>
        ¿Para quién es Goldty?
      </h2>
      <p>
        Estudiantes, profesionales ocupados y personas
        que desean mejorar sus hábitos.
      </p>
    </section>

  </main>

  <?php include("footer.php"); ?>

  <script src="index.js"></script>
  <script src="Scrip/notificaciones.js"></script>
</body>
</html>
