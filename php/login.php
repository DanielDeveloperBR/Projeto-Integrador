<?php

if (isset($_GET['sair'])) {
    echo "Você foi cadastrado com sucesso!";
}

if (isset($_POST['email'])) {

    include("conexao.php");
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql_code = "SELECT * FROM tb_cadastros WHERE email = '$email' LIMIT 1";
    // LIMIT 1 só permite rodar uma vez
 
    $sql_exec = $mysqli->query($sql_code) or die($mysqli->error());

    $usuario = $sql_exec->fetch_assoc();

    if(!is_null($usuario)) {
        $erro = false;
      if(empty($email)) {
          $erro =  1;
      } else if (empty($senha)) {
          $erro =  1;
      }
      if ($erro){
          echo "<script type='text/javascript'>alert('Email ou senha em branco')</script>";
      }else if(password_verify($senha, $usuario['senha'])) {
          if(!isset($_SESSION)) session_start();
          $_SESSION['usuario'] = $usuario['id'];
          header('location: ../index.php');
      } else {
          echo "<script type='text/javascript'>alert('Email ou senha incorretos')</script>";
      }
    } else {
        echo "<script type='text/javascript'>alert('Usuário não encontrado')</script>";
    }
 }


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/user.css">
    <!-- Ícone da logo-->
  <link rel="shortcut icon" href="../img/favicon3.ico" type="image/x-icon">
    <title>Login</title>
</head>
<body>
<form action="" method="post" id="modal" class="animar">     
<h1>Login</h1>
        <p>
          <label for="email">E-mail</label> 
          <input type="text" name="email">
        </p>
        <p>
          <label for="senha">Senha</label>
          <input type="password" name="senha">
        </p>
        <button type="submit" class="log" id="logar" style="display: inline-block;">Prosseguir</button>
        <a href="../index.html" class="log" id="logar" style="display: inline-block;">voltar</a>
    
    </form> 
    
</body>
</html>