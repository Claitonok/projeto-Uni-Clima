<?php
$db_host = 'Localhost';
$db_name = 'sistemadb';
$db_user = 'root';
$db_pass = '';


try {
  $conexao = new mysqli($db_host, $db_user, $db_pass, $db_name);
  //echo "Connected a $db_name em $db_host com success.";
} catch (\Throwable $th) {
  throw $th;
}
?>