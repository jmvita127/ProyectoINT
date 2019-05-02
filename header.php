<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Bangers" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Fascinate+Inline" rel="stylesheet">
  <link rel="stylesheet" href="estilo/estilo.css">
  <link rel="stylesheet" href="estilo/estiloform.css">
  <link rel="shortcut icon" href="imagenes/logo.jpg"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <title>Negocios Informático</title>
</head>
<body>

  <header>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="NISA" href="index.php"></a><h1>NISA <a href="index.php"><img class="logo" src="imagenes/logo.jpg" alt="logo" witdh="100" height="110"></a></h1>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation" >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ml-auto">

          <li class="nav-item active">
            <a class="nav-link" href="index.php" style="color:orange;">HOME <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:orange;">PRODUCTOS</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="equipos.php" style="color:orange;">EQUIPOS</a>
              <a class="dropdown-item" href="consolas.php" style="color:orange;">CONSOLAS</a>
            </div>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="preguntas.php" style="color:orange;">¿QUIENES SOMOS? <span class="sr-only">(current)</span></a>
          </li>

        </ul>
        <form class="form-inline my-2 my-lg-0" id="buscador">
          <input class="form-control mr-sm-2" type="search" placeholder="Buscar Producto" aria-label="Search">
        </form>
        <li class="carrito">
          <img class="carrito" src="imagenes/carrito.png" alt="" witdh="30" height="30">
        </li>
        
        <li class="boton">
          <button class="btn" type="submit"></button><br>
          <a class="botonreg" href="registro.php"><button type="button" class="btn btn-outline-danger">REGISTRARSE</button></a>
          <a href="login.php"> <button type="button" class="btn btn-outline-warning">LOG-IN</button></a>


        </li>


      </div>


    </nav>
  </header>
