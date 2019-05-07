<?php
      session_start();
      include('header.php');
      require_once('clases/Usuario.php');

      if(!empty($_SESSION['email'])){
          header('location:exito.php');
      }

      $errorNombre='';
      $nombre='';
      $errorApellido='';
      $apellido='';
      $errorEmail='';
      $errorPass='';
      $errorConfirmarPass='';
      $errorAvatar='';
      $email='';
      $sinErrores = true;
      $errorMin= '';
      $pregunta = '';
      $errorPregunta='';
      $respuesta = '';
      $errorRespuesta = '';



      if ($_POST) {
          $nombre = $_POST['nombre-formulario'];
          if ($_POST['nombre-formulario']=='')  {
           $errorNombre = 'ERROR - Ingrese un nombre';
           $sinErrores = false;
         }  else if(!preg_match('/^[A-Za-z]*$/', $_POST['nombre-formulario'])){
             $errorNombre = 'ERROR - Simbolos o numeros detectados';
           $sinErrores = false;
            }

         $pregunta = $_POST['pregunta-formulario'];
         if ($_POST['pregunta-formulario']==0)  {
          $errorPregunta='ERROR - Elija una pregunta';
          $sinErrores = false;
        }

         $apellido = $_POST['apellido-formulario'];
         if ($_POST['apellido-formulario']==''){
          $errorApellido='ERROR - Ingrese un apellido';
          $sinErrores = false;
        }  else if(!preg_match('/^[A-Za-z]*$/', $_POST['apellido-formulario'])){
          $errorApellido = 'ERROR - Simbolos o numeros detectados';
          $sinErrores = false;
           }

        $respuesta = $_POST['respuesta-formulario'];
        if ($_POST['respuesta-formulario']==''){
         $errorRespuesta='ERROR - Ingrese una respuesta';
         $sinErrores = false;
       }

          $email= $_POST['mail-formulario'];
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
            } else if (!preg_match("/^[a-zA-Z0-9]{6}/", $_POST['contrasenia-formulario'])){
                $errorPass='Debe contener al menos 6 carácteres.';
                $sinErrores=false;
            }


          if (empty($_POST['confirmar-contrasenia-formulario'])){
              $errorConfirmarPass='ERROR - No ingresó contraseña';
              $sinErrores = false;
          }else if(!empty($_POST['contrasenia-formulario']) && $_POST['contrasenia-formulario']!=$_POST['confirmar-contrasenia-formulario']){
              $errorConfirmarPass='ERROR - Las contraseñas no coinciden!';
              $sinErrores = false;
          }

          if($sinErrores){
              $avatar='';
              if($_FILES['avatar']["error"]!=UPLOAD_ERR_OK){
                  $errorAvatar = "Seleccione un avatar por favor";
                  $sinErrores = false;
              }

              if($_FILES['avatar']["error"]===UPLOAD_ERR_OK){
                  $tipoImagen = $_FILES['avatar']['type'];
                  if( $tipoImagen == 'image/png' || $tipoImagen == 'image/jpg' || $tipoImagen == 'image/jpeg' || $tipoImagen == 'image/gif'){
                      $ext = pathinfo($_FILES['avatar']['name'],  PATHINFO_EXTENSION);
                      $avatar = 'avatars/' . $_POST['mail-formulario'] . '.' . $ext;
                      move_uploaded_file($_FILES['avatar']['tmp_name'], $avatar);
                  }else{
                      $errorAvatar = 'Seleccione una imagen con formato valido';
                      $sinErrores = false;
                  }
              }

              if ($sinErrores) {
                  $pass = password_hash($_POST['contrasenia-formulario'], PASSWORD_DEFAULT);
                  $preguntaSeguridad = $_POST['pregunta-formulario'];
                  $respuestaSeguridad = $_POST['respuesta-formulario'];
                  $usuario = new Usuario($_POST['mail-formulario'], $pass, $avatar, $preguntaSeguridad, $respuestaSeguridad);
                  $usuarioJson = json_encode($usuario);
                  file_put_contents('usuarios.json', $usuarioJson);
                  $_SESSION['email'] = $usuario->getEmail();
                  $_SESSION['avatar'] = $usuario->getAvatar();
                  header('location:exito.php');
              }
          }
      }
      ?>

    <div class="contenedor">
      <form class="formulariogrande" action="" method="post" enctype="multipart/form-data">
        <div class="form-header">
          <h2 class="form-title">R<span>egistro</span> </h2>
        </div>
          <label class="form-label" for="nombre">Nombre <pre id="errorform">  <?php echo $errorNombre;?></pre></label>
          <input class="form-input" id="nombre" type="text" name="nombre-formulario" placeholder="Ingrese su Nombre..."  minlength="3" value="<?php echo $nombre  ?>">

          <label class="form-label" for="apellido">Apellido <pre id="errorform">  <?php echo $errorApellido; ?></pre></label>
          <input class="form-input" id="apellido" type="text" name="apellido-formulario" placeholder="Ingrese su Apellido..." value="<?php echo $apellido  ?>">

          <label class="form-label" for="email">Correo Electrónico <pre id="errorform">  <?php echo $errorEmail; ?></pre></label>
          <input class="form-input" id="email" type="email" name="mail-formulario" placeholder="Ingrese su Correo Electrónico..." value="<?php echo $email  ?>">

          <label class="form-label" for="contrasenia">Contraseña <pre id="errorform"> <?php echo $errorPass; ?></pre></label>
          <input class="form-input" id="contrasenia" type="password" name="contrasenia-formulario" placeholder="Ingrese su Contraseña..." value="<?php echo $errorPass ?>">

          <label class="form-label" for="confirmar_contrasenia">Confirmar Contraseña <pre id="errorform"> <?php echo $errorConfirmarPass?> </pre> </label>
          <input class="form-input" id="confirmar_contrasenia" type="password" name="confirmar-contrasenia-formulario" placeholder="Confirme su Contraseña..." value="">

          <label class="form-label" for="pregunta">Pregunta de Seguridad<pre id="errorform">  <?php echo $errorPregunta;?></pre></label>
          <select class="form-input" name="pregunta-formulario">
            <option value="0">Click para elegir pregunta</option>
            <option value="1">¿Cómo se llamaba su escuela secundaria? </option>
            <option value="2">¿Cuantas mascotas tuvo en toda su vida? </option>
            <option value="3">¿A qué lugar le gustaría viajar? </option>
          </select>

          <!-- <?php
          //$array = ["Click para elegir pregunta","¿Cómo se llamaba su escuela secundaria?","¿Cuantas mascotas tuvo en toda su vida?","¿A qué lugar le gustaría viajar?"];
           ?> -->

          <label class="form-label" for="respuesta">Respuesta de Seguridad<pre id="errorform">  <?php echo $errorRespuesta;?></pre></label>
          <input class="form-input" type="text" name="respuesta-formulario" placeholder="Ingrese una Respuesta..." value="">

          <label class="form-label" for="avatar">Avatar:<pre id="errorform"> <?php echo $errorAvatar?> </pre></label>
          <input class="form-input" id="avatar" type="file" name="avatar" value=""><?= $errorAvatar?>

          <br>
          <input type="submit" class="btn-submit" name="" value="Registrarse">
      </form>
      <br>
    </div>

    <?php
      include('footer.php');
    ?>
