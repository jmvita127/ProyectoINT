<?php
    session_start();
    include('header.php');
    require_once('clases/Usuario.php');

    if(isset($_SESSION['email'])){
        header('Location:index.php');
    }

    $datos=file_get_contents("usuarios.json");
    $dataDecode=json_decode($datos,true);
    $errorLogin = '';

    if ($_POST) {

    $emailSeguridad2 = $_POST['emailSeguridad-formulario'];
    if($emailSeguridad2 == $dataDecode['email']){
      header("Location:olvideContrasenia2.php");
  }else{
      $errorLogin='Respuesta incorrecta';
    }
  }
?>

<div class="contenedor">
  <form class="formulariogrande" action="" method="post" enctype="multipart/form-data">
    <div class="form-header">
      <h2 class "form-title">C<span>ambio de Contraseña</span></h2>
    </div>

    <label class="form-label" for="emailSeguridad">Ingrese su Email</label>
    <input class="form-input" id="emailSeguridad" type="email" name="emailSeguridad-formulario" placeholder="Ingrese su email..." value="">

    <input type="submit" class="btn-submit" name="" value="Enviar">

  </form>
  <br>
</div>
<?php
  include('footer.php');
?>
