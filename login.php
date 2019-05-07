
      <?php
          session_start();
          include('header.php');
          require_once('clases/Usuario.php');

          if(isset($_SESSION['email'])){
              header('Location:index.php');
          }


          $datos=file_get_contents("usuarios.json");
          $dataDecode=json_decode($datos,true);
          $errorLogin='';

      if ($_POST) {

        $email = $_POST['mail-formulario'];
        $pass = $_POST['contrasenia-formulario'];

        if($email == $dataDecode['email'] && password_verify($pass,$dataDecode['password'])){

          if(isset($_POST['recordarme'])){
              setcookie('mail-formulario', $email, time()+60*60*24);
          }
          $_SESSION["email"]=$dataDecode["email"];
          $_SESSION["avatar"]=$dataDecode["avatar"];

          header("Location:exito.php");
      }else{
          $errorLogin='Email y/o contraseña incorrectos';
      }
  }

     ?>

    <div class="contenedor">
      <form class="formulariogrande" action="" method="post" enctype="multipart/form-data">
        <div class="form-header">
          <h2 class "form-title">I<span>ngresar</span></h2>
        </div>

        <label class="form-label" for="email">Correo Electrónico <pre id="errorform"><?php echo $errorLogin ?></pre></label>
        <input class="form-input" id="email" type="email" name="mail-formulario" placeholder="Ingrese su Correo Electrónico..." value="<?php if(isset($_COOKIE['mail-formulario'])){echo $_COOKIE['mail-formulario'];} ?>">

        <label class="form-label" for="contrasenia">Contraseña </label>
        <input class="form-input" id="contrasenia" type="password" name="contrasenia-formulario" placeholder="Ingrese su Contraseña..." value="">

          <div class="">
              <input type="checkbox" name="recordarme" id="recordarme">
              <label for="recordarme">Recordarme</label>
          </div>

          <div class="olvide">
              <a href="olvideContrasenia1.php">Olvidé mi contraseña</a>
          </div>

          <br>
          <input type="submit" class="btn-submit" name="" value="Ingresar">

          <div class="noTengo">
              ¿No tenés usuario? <a href="registro.php">¡Registrate!</a>
          </div>


      </form>
      <br>
    </div>

    <?php
      include('footer.php');
    ?>
