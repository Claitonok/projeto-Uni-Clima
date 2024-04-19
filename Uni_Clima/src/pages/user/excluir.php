<?php
session_start();
if (isset($_POST['submit']) && !empty($_POST['email'])) {
    include_once('config.php');
    $email = $_POST['email'];
    $excluir = mysqli_query($conexao, "DELETE FROM `users` WHERE `email`='[$email]'");
    
    if($excluir == false){
        //FALSO
        unset($_SESSION['email']);
        //header('location: login.php');
        header('location: register.php');
    } else {
        //VERDADEIRO
        $_SESSION['email'] = $email;
       // header('location: register.php');
        header('location: login.php');
    }
} else {
    header('location: login.php');
}

/* // Uma Outra logica 

//Verificação se existe um Email no banco de dados
if (isset($_POST['submit']) && !empty($_POST['email'])) {
    include_once('./config.php');
    $email = $_POST['email'];

    $excluir = "DELETE FROM `users` WHERE `email`='[$email]'";
    $loh = $conexao->query($excluir);

    if (mysqli_num_rows($loh) < 1) {//FALSO
        $_SESSION['email'] = $email;
        header('location: src/pages/user/login.php');
    } else {
        //VERDADEIRO
        //$_SESSION['email'] = $email;
        header('location: src/pages/user/register.php');
    }
} else {
    header('location: src/pages/user/login.php');
}
*/