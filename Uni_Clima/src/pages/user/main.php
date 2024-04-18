<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uni-Clima</title>
    <link rel="ICON" type="ICON" sizes="18x18" href="../../../imgs/logo.png.ico">
    <link rel="stylesheet" href="../../../css/main.css">
    <script src="../user/caixa.js"></script>
</head>

<body>
    <div class="header" id="header"> 
        <div class="logo_header">
            <img src="../../../imgs/logo.png.ico" class="img_logo" alt="Logo Uni_clima">
        </div>
        <div class="navegasao_header">
            <a href="../user/login.php" class="lin">Login</a>
            <a href="../user/register.php" class="lin">Register</a>
        </div>
    </div>
    <?php
    //print_r('::::CADASTRO NÃO ENCONTRADO POR FAVOR FAÇA SEU CADASTRO PRIMEIRO::::');
    ?>  
<!--FAZER A VEFIFICAÇÃO QUANDO O NOME E EMAIL FOR FALSE IMPRIMIR NA TELA-->
    <div class="cabecalho1">
            <!--Editar senha do usuario-->
            <h5>Redefinição de senha</h5> 
            <br> 
            <form class="form" action="./atualizaBanco.php" method="POST">
                <input type="hidden" name="id" required/>
                <br>
                <label>Name:</label>
                <input type="text" name="nome" placeholder="Nome" required/>
                <br><br>
                <label>E-mail:</label>
                <input type="email" name="email" placeholder="E-mail" required/>
                <br><br>
                <br><br>
                <button type="submit" name="submit">Efetuar</button>
            </form>
            <br>
    </div>
</body>

</html>