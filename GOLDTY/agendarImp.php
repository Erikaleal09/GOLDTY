<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>AGENDA TU ACTIVIDAD IMPORTANTE</title>
  <link rel="stylesheet" href="style/agendar.css" />
</head>
<body>

  <div class="header">
    <button class="back-btn">
      <a href="homepage.php">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
             class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
          <path fill-rule="evenodd"
            d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 0 0 1 16 0
            m-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708
            l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z"
            style="color:white;" />
        </svg>
      </a>
    </button>

    <h1>GOLDTY</h1>

    <div class="logo">
      <img src="IMG/newlogo.jpeg" alt="GOLDTY" />
    </div>
  </div>

  <main>
    <!-- 🔴 ESTE ES EL ÚNICO CAMBIO -->
    <form class="forms" method="POST" action="agendarImpConexion.php">

        <div class="input-wrapper">
            <label>Titulo</label><br>
            <input type="text" name="titulo" placeholder="Escribe el titulo" />
        </div>

        <div class="input-wrapper">
            <label>Descripción</label><br>
            <textarea name="descripcion" placeholder="Escribe la descripción"></textarea>
        </div>

        <div class="input-wrapper">
            <label>Categoria</label><br>
            <select name="categoria">
                <option value="">Selecciona la categoria</option>
                <option value="1">Trabajo</option>
                <option value="2">Estudio</option>
                <option value="3">Ocio</option>
                <option value="4">Recreacion</option>
                <option value="5">Deportiva</option>
                <option value="6">Relajación</option>
                <option value="7">Otro</option>
            </select>
        </div>

        <div class="input-wrapper">
            <label>Fecha y Hora</label><br>
            <div class="datetime">
                <input type="date" name="fecha" />
                <input type="time" name="hora" />
            </div>
        </div>

        <div class="input-wrapper">
             <label>Completada o no</label><br>
             <label class="switch">
               <input type="checkbox" name="completada">
               <span class="slider"></span>
             </label>
        </div>

        <button type="submit" class="btn" name="agendar">
            Agendar actividad
        </button>

    </form>
  </main>

  <!-- ⚠️ ESTE SCRIPT INTERFIERE CON EL POST
       Déjalo comentado por ahora -->
  <!--
  <script>
  document.querySelector(".forms").addEventListener("submit", function(e) {
      ...
  });
  </script>
  -->

  <script src="Script/notificaciones.js"></script>

</body>
</html>
