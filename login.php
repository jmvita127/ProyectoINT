
<?php
session_start();
require_once('bd/conexion.php');
require_once('clases/Usuario.php');

if(isset($_SESSION['email'])){
  header('Location:index.php');
}

// $datos=file_get_contents("usuarios.json");
// $dataDecode=json_decode($datos,true);
$errorEmail='';
$errorLogin='';

if ($_POST) {

  $email = $_POST['mail-formulario'];
  $pass = $_POST['contrasenia-formulario'];

  $validator = $conex->query("SELECT * FROM Usuario WHERE email = '{$email}'");
  $cantidad = $validator->rowCount();



  if($cantidad==0){
    $errorEmail = 'Email o Password Incorrectos';

  } else {
    $usuario = $validator->fetch(PDO::FETCH_ASSOC);
    // var_dump($usuario);exit;
    if(!password_verify($pass, $usuario['contrasena'])){
      $errorLogin = 'Email o Contraseña Incorrectos';
      $invalidError = 'is-invalid';
    }else{

      $_SESSION['email'] = $usuario['email'];
      $_SESSION['avatar'] = $usuario['avatar'];
      header('location:exito.php');
    }
  }

  }


// if(isset($_POST['recordarme'])){
//   setcookie('mail-formulario', $email, time()+60*60*24);
// }

include('header.php');

?>

<div class="contenedor">
  <form class="formulariogrande" action="" method="post" enctype="multipart/form-data">
    <div class="form-header">
      <h2 class "form-title">I<span>ngresar</span></h2>
    </div>

    <label class="form-label" for="email">Correo Electrónico <pre id="errorform"><?php echo $errorLogin ?></pre></label>
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
      ¿No tenés usuario? <a href="registro.php">¡Registrate!</a>
    </div>


  </form>
  <br>
</div>

<?php
include('footer.php');
?>
