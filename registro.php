<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo/estiloform.css">
    <link rel="stylesheet" href="estilo/estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagenes/logo.jpg"/>

    <title>Negocios Informático</title>
  </head>
  <body>

    <header class="header">
      <?php
      //agrego el menu con toda su logica
        include('menu.php');
      ?>
    </header>

    <div class="contenedor">
      <form class="formulariogrande" action="index.php" method="post">
        <div class="form-header">
          <h1 class "form-title">R<span>egistro</span> </h1>
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

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
