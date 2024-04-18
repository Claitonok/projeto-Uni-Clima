<?php
session_start();
//FAZENDO A TROCA DA SENHA DO USUARIO
if (isset($_POST['submit']) && !empty($_POST['senhanova']) == true) 
{
    include_once('config.php');
    $senhanova = $_POST['senhanova'];
    $email = $_SESSION['email'];
    $nome = $_SESSION['nome'];
    $usuario = "UPDATE `users` SET `senha`='[$senhanova]' WHERE `name`='[$nome]' and `email`='[$email]'";
    $uss = $conexao->query($usuario);
    header('location: login.php');
}
else
{
    header('location: novasenha.php');
}
?>