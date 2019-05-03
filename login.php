
      <?php
          session_start();
          include('header.php');

          if(!empty($_SESSION['email'])){
              header('location:index.php');
          }

      $errorEmail='';
      $errorPass='';
      $email='';

      if ($_POST) {

      if($_POST['mail-formulario']==''){
          $errorEmail='ERROR - Ingrese un mail';
          $sinErrores = false;
      } else if (!filter_var($_POST['mail-formulario'], FILTER_VALIDATE_EMAIL)){
          $errorEmail = 'ERROR - Ingrese un mail valido';
          $sinErrores = false;
      }

      if (empty($_POST['contrasenia-formulario'])){
          $errorPass='ERROR - Ingrese una contraseña';
          $sinErrores = false;
      }
}


     ?>

    <div class="contenedor">
      <form class="formulariogrande" action="" method="post" enctype="multipart/form-data">
        <div class="form-header">
          <h2 class "form-title">I<span>ngresar</span></h2>
        </div>

        <label class="form-label" for="email">Correo Electrónico <pre id="errorform">  <?php echo $errorEmail; ?></pre></label>
        <input class="form-input" id="email" type="email" name="mail-formulario" placeholder="Ingrese su Correo Electrónico..." value="<?php echo $email  ?>">

        <label class="form-label" for="contrasenia">Contraseña <pre id="errorform"> <?php echo $errorPass; ?></pre></label>
        <input class="form-input" id="contrasenia" type="password" name="contrasenia-formulario" placeholder="Ingrese su Contraseña..." value="">

          <div class="">
              <input type="checkbox" name="recordarme" id="recordarme">
              <label for="recordarme">Recordarme</label>
          </div>

          <div class="olvide">
              <a href="#">Olvidé mi contraseña</a>
          </div>

          <br>
          <input type="submit" class="btn-submit" name="" value="Ingresar">

          <div class="noTengo">
              ¿No tenés usuario? <a href="#">¡Registrate!</a>
          </div>


      </form>
      <br>
    </div>

    <?php
      include('footer.php');
    ?>
