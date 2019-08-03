<?php
  require_once("autoload.php");
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light background-nav">
  <img class="logo-img"src="img/logo.png" alt="logo">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
    <ul class="navbar-nav">
      <?php if(!loginController()): ?>
      <li class="nav-item margin-li"><a class="nav-link color-a" href="index.php">Home</a></li>
      <li class="nav-item margin-li"><a class="nav-link color-a" href="dudas.php">Preguntas frecuentes</a></li>
      <li class="nav-item margin-li"><a class="nav-link color-a" href="registro.php">Registrarme</a></li>
      <li class="nav-item margin-li"><a class="nav-link color-a" href="login.php">Login</a></li>
      <?php elseif(loginController()): ?>
      <li class="nav-item margin-li"><a class="nav-link color-a" href="index.php">Home</a></li>
      <li class="nav-item margin-li"><a class="nav-link color-a" href="perfil.php">Mi perfil</a></li>
      <li class="nav-item margin-li"><a class="nav-link color-a" href="logout.php">Logout</a></li>
      <?php endif;?>
    </ul>
  </div>
</nav>
