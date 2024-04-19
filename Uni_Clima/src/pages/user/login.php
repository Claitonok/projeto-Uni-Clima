<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uni-Clima</title>
    <link rel="ICON" type="ICON" sizes="18x18" href="../../../imgs/logo.png.ico">
    <link rel="stylesheet" href="../../../css/login.css">
    <script src="../user/caixa.js"></script>
</head>

<body>
    <div class="header">
        <div class="logo_header">
            <div class="bta">
                <a href="../../pages/user/main.php">HOME</a>
            </div>
            <img src="../../../imgs/logo.png.ico" class="img_logo" alt="Logo Uni_clima">
        </div>
    </div>
    <?php
    session_start();
    if ((!isset($_SESSION['email']) == false) and (!isset($_SESSION['senha']) == false)) {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        print_r("<h3>CADASTRO NÂO ENCONTRADO POR FAVOR SE CADASTRE</h3>");
    }

    if ((!isset($_SESSION['email']) == false)) {
        unset($_SESSION['email']);
        print_r("<h3>CADASTRO NÂO ENCONTRADO POR FAVOR SE CADASTRE</h3>");
     
    }
    ?>
    <div class="login">
        <div class="login_main">
            <form action="./testeLogin.php" method="POST">
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control-plaintext" name="email" placeholder="E-mail">
                    </div>
                </div><br>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Senha</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="senha" placeholder="Senha">
                    </div>
                </div><br>
                <button type="submit" class="DDF" name="Entrar">Entrar</button>
            </form>
            <div class="col-auto">
                <!-- Delete da conta do usuario-->
                <form class="form" action="./excluir.php" method="POST">
                    <br>
                    <br>
                    <h5>Exluir o cadastro digite seu e-mail</h5><br>
                    <label>E-mail</label>
                    <input type="hidden" name="id" required />
                    <input type="text" name="email" placeholder="E-mail">
                    <br>
                    <br>
                    <button type="submit" class="DDF" name="submit">SIM</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>