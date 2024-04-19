<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uni-Clima</title>
    <link rel="ICON" type="ICON" sizes="18x18" href="../../../imgs/logo.png.ico">
    <link rel="stylesheet" href="../../../css/register.css">
    <link rel="stylesheet" href="../../../css/login.css">
  <script src="../user/caixa.js"></script>
</head>

<body>
  <div class="header">
    <div class="logo_header">
      <div class="bta">
        <a href="./main.php">HOME</a>
      </div>
      <img src="../../../imgs/logo.png.ico" class="img_logo" alt="Logo Uni_clima">
    </div>
  </div>
  <?php
    
    if(isset($_POST['submit']))
    {
      include_once('config.php'); 
      $nome = $_POST['nome']; 
      $email = $_POST['email'];
      $senha = $_POST['senha'];
      $data_cadastro = $_POST['data_cadastro'];
      
      $result = mysqli_query($conexao, "INSERT INTO `users`(`id`,`name`, `email`, `senha`, `data_cadastro`) VALUES ('[value-1]','[$nome]','[$email]','[$senha]','[$data_cadastro]')");
    }
    ?>
  <div class="register">
    <form action="register.php" method="POST">
      <div class="mb-3">
        <label class="form-label">Nome:</label>
        <input type="text" class="form-control" name="nome" placeholder="Nome" required>
      </div><br>
      <div class="mb-3">
        <label class="form-label">Email:</label>
        <input type="email" class="form-control" name="email" placeholder="E-mail" required>
      </div><br>
      <br>
      <div class="mb-3">
        <label class="form-label">Senha:</label>
        <input type="password" class="form-control" name="senha" placeholder="Senha" required>
      </div>
      <br>
      <div class="mb-3 1.5px">
        <label class="form-label">Data:</label>
        <input type="date" class="form-control" name="data_cadastro" placeholder="Data" required>
      </div>
      <br>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
        <label class="form-check-label">Termos & Condições</label>
      </div>
      <br>
      <button type="submit" name="submit" class="botao" onclick="register()">Cadastrar-se</button>
    </form>
  </div>
</body>

</html>