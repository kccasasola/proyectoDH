  <header class="color-a">
   <nav class="navbar navbar-expand-lg navbar-light bg-light background-nav">
    <img class="logo-img"src="img/logo.png" alt="logo">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <?php if(!loginController()):
        ?>
            <li class="nav-item margin-li"><a class="nav-link color-a" href="index.php">Home</a></li>
            <li class="nav-item margin-li"><a class="nav-link color-a" href="dudas.php">FAQ</a></li>
            <li class="nav-item margin-li"><a class="nav-link color-a" href="login.php">Login</a></li>
            <li class="nav-item margin-li"><a class="nav-link color-a" href="registro.php">Registro</a></li>
        <?php endif;
        ?>
        <?php if(isset($_SESSION['email'])): ?>
        <li class="nav-item margin-li"><a class="nav-link color-a" href="home.php">Home</a></li>
        <li class="nav-item margin-li"><a class="nav-link color-a" href="perfil.php">Mi perfil</a></li>
        <li class="nav-item margin-li"><a class="nav-link color-a" href="index.php">Logout</a></li>
        <?php endif;?>
        <?php ?>
    </div>
    </nav>
    </header>
