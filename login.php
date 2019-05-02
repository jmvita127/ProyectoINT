
      <?php
          session_start();
          include('header.php');

          if(!empty($_SESSION['email'])){
              header('location:index.php');
          }
      ?>



    <div class="contenedor">
      <form class="formulariogrande" action="index.php" method="post">
        <div class="form-header">
          <h2 class "form-title">I<span>ngresar</span> </h2>
        </div>
          <label class="form-label" for="mail">Correo Electrónico:</label>
          <input class="form-input" id="mail" type="email" name="mail-formulario" placeholder="Ingrese su Correo Electrónico...">

          <label class="form-label" for="contrasenia">Contraseña:</label>
          <input class="form-input" id="contrasenia" type="password" name="contrasenia-formulario" placeholder="Ingrese su Contraseña...">

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
