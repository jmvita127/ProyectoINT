<?php

$esAdmin = false;

class Usuario implements \JsonSerializable {

    private $email;
    private $password;
    private $avatar;
    private $preguntaSeguridad;
    private $respuestaSeguridad;
    private $esAdmin;

    public function __construct($email, $password, $avatar, $preguntaSeguridad, $respuestaSeguridad){
        $this->email = $email;
        $this->password = $password;
        $this->avatar = $avatar;
        $this->preguntaSeguridad = $preguntaSeguridad;
        $this->respuestaSeguridad = $respuestaSeguridad;

    }



    public function getEmail(){
        return $this->email;
    }
    public function getAvatar(){
        return $this->avatar;
    }

    public function setPassword($nuevoPass)
    {
        $this->password = $nuevoPass;
    }


    public function jsonSerialize()
    {
        $vars = get_object_vars($this);

        return $vars;
    }
}


 ?>
