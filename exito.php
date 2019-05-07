<?php
session_start();

include('header.php');

if(!isset($_SESSION['email'])){
    header('Location:index.php');
}
?>



<h3 class="bienvenida">Bienvenido,<?php echo " " . $_SESSION['email'];?> <img src="<?php echo $_SESSION['avatar']; ?>" alt="" class="avatar2">
<br><a class="perfil" href="index.php" style="margin: auto ">INICIO</a><br>
<a class="perfil" href="cerrarSession.php" style="margin: auto">CERRAR SESION</a></h3>

<div class="alert alert-success alert-dismissible fade show" id="cartel" role="alert" style=" margin: auto;">
  <strong>El registro se ha completado de forma exitosa! <br>
          Gracias por confiar en Negocios Informaticos SA.</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>



  <?php
  include('footer.php');
  ?>
