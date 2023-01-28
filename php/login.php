<?php

if(isset($_POST['email'])){

    include("conexao.php");
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql_code = "SELECT * FROM tb_produtos WHERE EMAIL = '$email' LIMIT 1";
    // LIMIT 1 só permite rodar uma vez
    $sql_exec = $mysqli->query($sql_code) or die($mysqli->error);

    $usuario = $sql_exec->fetch_assoc();
    
    if(password_verify($senha,$usuario['senha'])) {
        //verificando se a sessão está logada e startando
        if(!isset($_SESSION)) session_start();
        //capiturando o id do usuario para a session
        $_SESSION['usuario'] = $usuario['id'];
        //redirecionando para index.php
        header("Location: index.html");
        
    } else {
        echo "Falha ao logar! Senha ou e-mail incorretos";
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
    <title>Document</title>
</head>
<body>
    <
    <form action="" method="post" id="modal" class="animar"> 
        <h1>Login</h1>
        <p>
          <label for="email">E-mail</label> 
          <input type="text" name="email">
        </p>
        <p>
          <label for="senha">Senha</label>
          <input type="text" name="senha">
        </p>
        <button type="submit">Logar</button>
    </form> 
    
</body>
</html>