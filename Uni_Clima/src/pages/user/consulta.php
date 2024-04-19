<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="ICON" type="ICON" sizes="18x18" href="../../../imgs/logo.png.ico">
    <link rel="stylesheet" href="../../../css/dia.css">
    <script src="../user/caixa.js"></script>
    <title>Uni-Clima</title>
</head>
<body>
    <nav class="navbar bg-dark">
        <div class="container-fluid">
            <form method="POST"  action="../user/main.php"  class="d-flex">
                <input class="btn btn-outline-info"type="submit" value="SAIR">
            </form>
            <a class="navbar-brand text-white" href="#">
                <img src="../../../imgs/logo.png.ico" alt="" width="27" height="27" class="d-inline-block align-text-top">
                UniClima
            </a>
            <form  method="POST"  action="../clima_model.php"  class="d-flex">
                <input class="form-control me-2" type="search" name="cidade"  placeholder="Digite uma cidade">
                <input class="btn btn-outline-info" type="submit"  value="Pesquisar">
            </form>
        </div>
    </nav>
<?php
session_start();
if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true) and (!isset($_SESSION['nome']) == true))
{
    unset($_SESSION['email']);
    unset($_SESSION['senha']); 
    header('location: login.php');
}
$logado = $_SESSION['email'];
//print_r('**LOGADO** '); 
//echo" <h4>BEM-VINDO<u>$logado</u></h4>";
?>
    <footer>
    <div class="img">
       <img src="../../../imgs/Instagram_icon-icons.com_66804.ico" alt="" width="24" height="24">
       <img src="../../../imgs/Facebook_Square_icon-icons.com_49948.ico" alt="" width="24" height="24">
       <img src="../../../imgs/pinterest_19134.ico" alt="" width="24" height="24">
       <img src="../../../imgs/twitter_x_new_logo_x_rounded_icon_256078.ico" alt="" width="24" height="24">
</div>
<div class="paragrafo" >
<h4>Link</h4>
<p>Home</p>
<p>Sobre</p>
<p>Contatos</p>
</div>
<div class="roda" >
<img src= "../../../imgs/logo.png.ico" width="30%" height="30%" >
<p>Uni-Clima</p>
</div>
    </footer>
</body>
</html>