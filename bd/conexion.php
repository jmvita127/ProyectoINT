<?php
try{

  $opt= [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"];

  $conex = new PDO('mysql:host=localhost;dbname=nisa_db', 'root', 'root', $opt);

}catch(PDOException $e){
  echo 'No me pude conectar a la BD <br>';
  echo $e->getMessage();
}

?>
