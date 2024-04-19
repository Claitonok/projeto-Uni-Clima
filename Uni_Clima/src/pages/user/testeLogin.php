<?php
session_start();
    if(isset($_POST['Entrar']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];
       
        $sql = "SELECT * FROM users WHERE `email`= '[$email]' and `senha`='[$senha]'";
        $result = $conexao->query($sql);
      
       if(mysqli_num_rows($result) < 1)
       {
        //unset($_SESSION['email']);
        //unset($_SESSION['senha']);
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha; 
        header('location: login.php');
        //print_r('NAO EXISTE');
       }
       else
       {
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('location: consulta.php');
        //print_r('EXITE');
       }
    }
    else
    {
        header('location: login.php');
    }
?>