@extends('plantilla.plantilla')

@section('content')
<div class="contenedor">
  <form class="formulariogrande" action="" method="post" enctype="multipart/form-data">
    <div class="form-header">
      <h2 class="form-title">R<span>egistro</span> </h2>
    </div>
    <label class="form-label" for="nombre">Nombre <pre id="errorform">INGREAR ERROR</pre></label>
    <input class="form-input" id="nombre" type="text" name="nombre-formulario" placeholder="Ingrese su Nombre..." autofocus="autofocus" minlength="3" value="">

    <label class="form-label" for="apellido">Apellido <pre id="errorform">INGRESAR ERRPR</pre></label>
    <input class="form-input" id="apellido" type="text" name="apellido-formulario" placeholder="Ingrese su Apellido..." autofocus="autofocus" value="">

    <label class="form-label" for="email">Correo Electrónico <pre id="errorform">INGRESAR ERROR</pre></label>
    <input class="form-input" id="email" type="email" name="mail-formulario" placeholder="Ingrese su Correo Electrónico..." autofocus="autofocus" value="">

    <label class="form-label" for="contrasenia">Contraseña <pre id="errorform">INGRESAR ERROR</pre></label>
    <input class="form-input" id="contrasenia" type="password" name="contrasenia-formulario" placeholder="Ingrese su Contraseña..." autofocus="autofocus" value="">

    <label class="form-label" for="confirmar_contrasenia">Confirmar Contraseña <pre id="errorform">INGRESAR ERROR</pre> </label>
    <input class="form-input" id="confirmar_contrasenia" type="password" name="confirmar-contrasenia-formulario" placeholder="Confirme su Contraseña..." autofocus="autofocus" value="">

    <label class="form-label" for="pregunta">Pregunta de Seguridad<pre id="errorform">INGRESAR ERROR</pre></label>
    <select class="form-input" name="pregunta-formulario">
      <option value = 0 >Click para elegir pregunta</option>
      <option value = 1 >¿Cómo se llamaba su escuela secundaria? </option>
      <option value = 2 >¿Cuantas mascotas tuvo en toda su vida? </option>
      <option value = 3 >¿A qué lugar le gustaría viajar? </option>
    </select>

    <!--
    //$array = ["Click aqui para elegir pregunta","¿Cómo se llamaba su escuela secundaria?","¿Cuantas mascotas tuvo en toda su vida?","¿A qué lugar le gustaría viajar?"];
     -->

    <label class="form-label" for="respuesta">Respuesta de Seguridad<pre id="errorform">INGRESAR ERROR</pre></label>
    <input class="form-input" type="text" name="respuesta-formulario" placeholder="Ingrese una Respuesta..." value="">

    <label class="form-label" for="avatar">Avatar:<pre id="errorform">INGRESAR ERROR</pre></label>
    <input class="form-input" id="avatar" type="file" name="avatar" value="">INGRESAR ERROR

    <br>
    <input type="submit" class="btn-submit" name="" value="Registrarse">
  </form>
  <br>
</div>


@endsection
