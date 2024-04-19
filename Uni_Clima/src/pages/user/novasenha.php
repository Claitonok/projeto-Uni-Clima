<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Uni-clima</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="ICON" type="ICON" sizes="18x18" href="../../../imgs/logo.png.ico">
    <link rel='stylesheet' href='../../../css/nova.css'>
    <script src='caixa.js'></script>
</head>

<body>
    <div class="header">
        <div class="logo_header">
            <div class="bta">
                <a href="../../pages/user/main.php">HOME</a>
            </div>
            <img src="../../../imgs/logo.png.ico" class="img" alt="Logo Uni_clima">
        </div>
    </div>
    <?php
    session_start();
    if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['nome']) == true)) {
        unset($_SESSION['email']);
        unset($_SESSION['nome']);
        header('location: main.php');
    }
    $login = $_SESSION['email'];
    $Req = $_SESSION['nome'];
    ?>

    <div class="cliente">
        <h3 class="title">******LOGADO******</h3><br><br>
        <label><b>BEM VINDO - </b><?= $Req ?></label><br><br>
        <label><b>E-mail: </b><?= $login ?></label>
    </div>

    <div class="login">
        <h5>DIGITAR NOVA SENHA</h5>
        <br>
        <form action="./redsenha.php" method="POST">
            <br><br>
            <label>Nova senha:</label>
            <input type="password" name="senhanova" placeholder="nova senha" required/><br>
            <br><br>
            <button class="DDF" type="submit" name="submit" onclick="salva()">Save</button>
        </form>
    </div>
</body>

</html>