
      <?php
      //agrego el menu con toda su logica
        include('header.php');
      ?>

    <div class="contenedor">
      <form class="formulariogrande" action="index.php" method="post">
        <div class="form-header">
          <h2 class="form-title">R<span>egistro</span> </h2>
        </div>
          <label class="form-label" for="nombre">Nombre:</label>
          <input class="form-input" id="nombre" type="text" name="nombre-formulario" placeholder="Ingrese su Nombre...">

          <label class="form-label" for="apellido">Apellido:</label>
          <input class="form-input" id="apellido" type="text" name="apellido-formulario" placeholder="Ingrese su Apellido...">

          <label class="form-label" for="Nacionalidad">Correo Electrónico:</label>
          <input class="form-input" id="mail" type="email" name="mail-formulario" placeholder="Ingrese su Correo Electrónico...">

          <label class="form-label" for="contrasenia">Contraseña:</label>
          <input class="form-input" id="contrasenia" type="password" name="contrasenia-formulario" placeholder="Ingrese su Contraseña...">


          <br>
          <input type="submit" class="btn-submit" name="" value="Registrarse">
      </form>
      <br>
    </div>

    <?php
      include('footer.php');
    ?>
