<?php
    session_start();
    include('header.php');
    require_once('clases/Usuario.php');

    if(isset($_SESSION['email'])){
        header('Location:index.php');
    }

    $datos=file_get_contents("usuarios.json");
    $dataDecode=json_decode($datos,true);
    $errorPass='';
    $errorConfirmarPass='';
    $sinErrores = true;

    if ($_POST) {
      if (empty($_POST['contrasenianueva-formulario'])){
          $errorPass='ERROR - Ingrese una contraseña nueva';
          $sinErrores = false;
        } else if (!preg_match("/^[a-zA-Z0-9]{6}/", $_POST['contrasenianueva-formulario'])){
            $errorPass='Debe contener al menos 6 carácteres.';
            $sinErrores=false;
        }

      if (empty($_POST['confirmar-contrasenianueva-formulario'])){
          $errorConfirmarPass='ERROR - No ingresó contraseña nueva';
          $sinErrores = false;
      }    else if(!empty($_POST['contrasenianueva-formulario']) && $_POST['contrasenianueva-formulario']!=$_POST['confirmar-contrasenianueva-formulario']){
          $errorConfirmarPass='ERROR - Las contraseñas nuevas no coinciden!';
          $sinErrores = false;
      }

      if ($sinErrores) {
          $pass = password_hash($_POST['contrasenianueva-formulario'], PASSWORD_DEFAULT);
          $usuario = new Usuario($dataDecode['email'], $pass, $dataDecode['avatar'], $dataDecode['preguntaSeguridad'], $dataDecode['respuestaSeguridad']);
          $usuarioJson = json_encode($usuario);
          file_put_contents('usuarios.json', $usuarioJson);
          $_SESSION['email'] = $usuario->getEmail();
          $_SESSION['avatar'] = $usuario->getAvatar();
          header('location:exito.php');
      }

    // if ($sinErrores) {
    //     $pass = password_hash($_POST['contrasenianueva-formulario'], PASSWORD_DEFAULT);
    //     $usuario -> setPassword($pass);
    //     $usuarioJson = json_encode($usuario);
    //     file_put_contents('usuarios.json', $usuarioJson);
    //     $_SESSION['email'] = $usuario->getEmail();
    //     $_SESSION['avatar'] = $usuario->getAvatar();
    //     header('location:exito.php');
    // }
    }

    //

?>

<div class="contenedor">
  <form class="formulariogrande" action="" method="post" enctype="multipart/form-data">
    <div class="form-header">
      <h2 class "form-title">C<span>ambio de Contraseña</span></h2>
    </div>

    <label class="form-label" for="contrasenianueva">Contraseña Nueva<pre id="errorform"> <?php echo $errorPass; ?></pre></label>
    <input class="form-input" id="contrasenianueva" type="password" name="contrasenianueva-formulario" placeholder="Ingrese su Nueva Contraseña..." value="<?php echo $errorPass ?>">

    <label class="form-label" for="confirmar_contrasenianueva">Confirmar Contraseña Nueva <pre id="errorform"> <?php echo $errorConfirmarPass?> </pre> </label>
    <input class="form-input" id="confirmar_contrasenianueva" type="password" name="confirmar-contrasenianueva-formulario" placeholder="Confirme su nueva Contraseña..." value="">

    <input type="submit" class="btn-submit" name="" value="Cambiar">

  </form>
  <br>
</div>
<?php
  include('footer.php');
?>
