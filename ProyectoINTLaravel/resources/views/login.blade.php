@extends('plantilla.plantilla')

@section('content')
<div class="contenedor">
  <form class="formulariogrande" action="" method="post" enctype="multipart/form-data">
    <div class="form-header">
      <h2 class "form-title">I<span>ngresar</span></h2>
    </div>

    <label class="form-label" for="email">Correo Electrónico <pre id="errorform">INGRESAR ERROR</pre></label>
    <input class="form-input" id="email" type="email" name="mail-formulario" placeholder="Ingrese su Correo Electrónico..." autofocus="autofocus" value="<?php if(isset($_COOKIE['mail-formulario'])){echo $_COOKIE['mail-formulario'];} ?>">

    <label class="form-label" for="contrasenia">Contraseña </label>
    <input class="form-input" id="contrasenia" type="password" name="contrasenia-formulario" placeholder="Ingrese su Contraseña..." autofocus="autofocus" value="">

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
      ¿No tenés usuario? <a href="registro">¡Registrate!</a>
    </div>


  </form>
  <br>
</div>


@endsection
