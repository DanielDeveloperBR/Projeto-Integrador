<?php


function limpar_texto($str){
    return preg_replace("/[^0-9]/", "", $str);
}


if(count($_POST) > 0) {


    include('conexao.php');
   
    $erro = false;
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
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
} else if(empty($complemento)) {
    $erro = "Preencha o complemento";   
} else if(empty($bairro)) {
    $erro = "Preencha o bairro";
} else if(empty($cidade)) {
    $erro = "Preencha a cidade";
}
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    if($erro) {
        echo "<p><b>ERRO: $erro</b></p>";
    } else {
        $sql_code = "INSERT INTO tb_cadastros (nome, senha, numero, complemento, bairro, cidade, email)
        VALUES ('$nome','$senha','$numero','$complemento','$bairro','$cidade','$email')";
        $deu_certo = $mysqli->query($sql_code) or die($mysqli->error);
        if($deu_certo) {
            echo "<p><b>Cliente cadastrado com sucesso!!!</b></p>";
            unset($_POST); //limpa o conteudo do $_POST
        }
    }

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Cliente</title>
    <link rel="stylesheet" href="../css/user.css">
</head>
<body>
    <a href="login.php">Fazer login</a>
    <form action="" method="post" id="modal" class="animar">
        <p>
            <h1>Cadastre-se</h1>
            <label>Nome:</label>
            <input value="<?php if(isset($_POST['nome'])) echo $_POST['nome']; ?>" name="nome" type="text">
        </p>
        <p>
            <label>Senha:</label>
            <input value="<?php if(isset($_POST['senha'])) echo $_POST['senha']; ?>" name="senha" type="text">
        </p>
        <p>
            <label>Email:</label>
            <input value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>"  name="email" type="text">
        </p>
      
        <p>
            <label>Número:</label>
            <input value="<?php if(isset($_POST['numero'])) echo $_POST['numero']; ?>"  name="numero" type="text">
        </p>
        <p>
            <label>Complemento:</label>
            <input value="<?php if(isset($_POST['complemento'])) echo $_POST['complemento']; ?>"  name="complemento" type="text">
        </p>
        <p>
            <label>Bairro:</label>
            <input value="<?php if(isset($_POST['bairro'])) echo $_POST['bairro']; ?>"  name="bairro" type="text">
        </p>
        <p>
            <label>Cidade:</label>
            <input value="<?php if(isset($_POST['cidade'])) echo $_POST['cidade']; ?>"  name="cidade" type="text">
        </p>
        <p>
            <button type="submit">Cadastrar Cliente</button>
        </p>
    </form>
</body>
</html>