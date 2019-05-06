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

    $respuestaSeguridad2 = $_POST['respuesta2-formulario'];
    if($respuestaSeguridad2 == $dataDecode['respuestaSeguridad']){
      header("Location:olvideContrasenia3.php");
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

    <label class="form-label" for="email">Pregunta de Seguridad seleccionada:<pre id="errorform"><?php echo $errorLogin ?></pre></label>
    <div class="form-input"> <?php echo $dataDecode['preguntaSeguridad'] ?>    </div>

    <label class="form-label" for="respuestaSeguridad2">Respuesta de Seguridad</label>
    <input class="form-input" id="respuestaSeguridad2" type="text" name="respuesta2-formulario" placeholder="Ingrese su respuesta..." value="">

    <input type="submit" class="btn-submit" name="" value="Enviar">

  </form>
  <br>
</div>
<?php
  include('footer.php');
?>
