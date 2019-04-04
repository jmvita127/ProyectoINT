<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo/estilo.css">
    <title>Negocio Informatico</title>
  </head>
  <body>

    <header class="header">

      <?php
      //agrego el menu con toda su logica
        include('menu.php');
      ?>


    </header>


    <form class="register"  method="GET">
      <h4>CUENTA</h4>
      <label for="email">Email Personal</label>
      <input type="text" name="Email" id="email" value="<?php echo $_GET['Email']; ?>">
      <span style="color:red;font-size:20px;"><?php echo $erroremail; ?></span><br>

      <label for="name">Nombre Completo</label>
      <input type="text" name="Nombre" id="name" value="<?php echo $_GET['Nombre'];?>">
      <span style="color:red;font-size:20px;"><?php echo $errornombre; ?></span><br>

      <label for="contrasenia">Contrasenia</label>
      <input type="password" name="contrasenia" value="">
      <hr>
      <label for="age">Edad</label>
      <input type="number" name="Edad" id="age" value="<?php $_GET['Edad']; ?>">
      <span style="color:red;font-size:20px;"><?php echo $erroredad; ?></span><br>

      <label for="gen">Genero</label>
      <input type="text" name="Genero" id="gen"><br>

      <label for="nation">Nacionalidad</label>
      <input type="text" name="Nacionalidad" id="nation"><br>

      <input type="submit" name="Validar">
    </form>

    <?php
      include('footer.php');
    ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
