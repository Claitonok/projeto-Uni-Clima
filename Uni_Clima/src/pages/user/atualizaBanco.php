<?php
session_start();
    //Fazendo a verificação se existe mesmo uma Pessoa com o nome e Email no banco de dados
    if(isset($_POST['submit']) && !empty($_POST['nome']) && !empty($_POST['email']))
    {
        include_once('./config.php');
        $nome = $_POST['nome'];
        $email = $_POST['email'];
    
        $banco  = "SELECT * FROM users WHERE `name`= '[$nome]' and `email`='[$email]'";
        $xpto = $conexao->query($banco);

        if(mysqli_num_rows($xpto) < 1)
        {
            $_SESSION['nome'] = $nome;
            $_SESSION['email'] = $email;
            header('location: main.php'); 
        }
        else 
        {
            $_SESSION['nome'] = $nome;
            $_SESSION['email'] = $email;
            header('location: novasenha.php');
        }
    }
    else
    {
        header('location: main.php');
    }
    ?>