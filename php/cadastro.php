<?php
function limpar_texto($str){
    return preg_replace("/[^0-9]/", "", $str);
}
if(count($_POST) > 0) {
    include('conexao.php');

    $erro = false;
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $reptir_senha = $_POST['repetir_senha'];
    $email = $_POST['email'];
    $numero = $_POST['numero'];
    $complemento = $_POST['complemento'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
//Campos que nao podem ser cadastrados em branco!
if(empty($nome)) {
    $erro = "Preencha o nome";
} else if(empty($senha) || strlen($senha)<7){
    $erro = "A senha precisa ter pelo menos 8 caracteres";
} else if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $erro = "Preencha o e-mail corretamente: Exemplo@gmail.com";
} else if(empty($numero) || strlen($numero)<0) {
    $erro = "Preencha o número";
} else if(empty($bairro)) {
    $erro = "Preencha o bairro";
} else if(empty($cidade)) {
    $erro = "Preencha a cidade";
} else {
    $senha = $_POST['senha'];
    $repetir_senha = $_POST['repetir_senha'];

    if ($senha != $repetir_senha) {
        $erro = "As senhas digitadas não são iguais";
    } else {
        $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
        $sql_code = "INSERT INTO tb_cadastros (nome, senha, numero, complemento, bairro, cidade, email)
        VALUES ('$nome','$senha','$numero','$complemento','$bairro','$cidade','$email')";
        $deu_certo = $mysqli->query($sql_code) or die($mysqli->error);
        if($deu_certo) {
            echo "<p><b>Cliente cadastrado com sucesso!!!</b></p>";
            unset($_POST); //limpa o conteudo do $_POST
            header("Location: login.php?sair='sair'");
        }
    }
}

if($erro) {
    echo "<p><b>ERRO: $erro</b></p>";
}
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Cliente</title>
    <link rel="stylesheet" href="../css/user.css">
    <!-- Ícone da logo-->
  <link rel="shortcut icon" href="../img/favicon3.ico" type="image/x-icon">
</head>
<body>
    
    <form action="" method="post" id="modal" class="animar">
        <p>
            <h1>Cadastre-se</h1>
            <label>Nome:</label>
            <input value="<?php if(isset($_POST['nome'])) echo $_POST['nome']; ?>" name="nome" type="text">
        </p>
        <p>
            <label>Senha:</label>
            <input value="<?php if(isset($_POST['senha'])) echo $_POST['senha']; ?>" name="senha" type="password">
        </p>
        <p>
            <label>Repetir Senha:</label>
            <input value="<?php if(isset($_POST['repetir_senha'])) echo $_POST['repetir_senha']; ?>" name="repetir_senha" type="password">
        </p>
        <p>
            <label>Email:</label>
            <input value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>"  name="email" type="text">
        </p>
      
        <p>
        <p>
            <label>Endereço:</label>
            <input value="<?php if(isset($_POST['complemento'])) echo $_POST['complemento']; ?>"  name="complemento" type="text">
        </p>
            <label>Número:</label>
            <input value="<?php if(isset($_POST['numero'])) echo $_POST['numero']; ?>"  name="numero" type="number">
        </p>
        <p>
            <label>Cidade:</label>
            <input value="<?php if(isset($_POST['cidade'])) echo $_POST['cidade']; ?>"  name="cidade" type="text">
        </p>
        <p>
            <label>Bairro:</label>
            <input value="<?php if(isset($_POST['bairro'])) echo $_POST['bairro']; ?>"  name="bairro" type="text">
        </p>
       
        <p>
        <button type="submit" class="log" id="logar" style="display: inline-block;">Prosseguir</button>
        <a href="../index.html" class="log" id="logar" style="display: inline-block;">voltar</a>
</p>
    </form>
</body>
</html>