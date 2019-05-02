<?php
session_start();
?>
<link rel="stylesheet" href="estilo/estilo.css">
<link rel="stylesheet" href="estilo/estiloform.css">
<?php
include('header.php');
?>
<h3><img class="avatar2"  src="<?php echo $_SESSION['avatar']; ?>" alt="">Bienvenido <?php echo $_SESSION['email']; ?> <img class="avatar2"  src="<?php echo $_SESSION['avatar']; ?>" alt=""></h3>

<h3><a href="index.php">Ir al home</a> <br> </h3>
  <h3><a href="cerrarSession.php">Salir</a></h3>
  <?php
  include('footer.php');
  ?>
