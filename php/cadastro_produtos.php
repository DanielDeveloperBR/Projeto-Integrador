<?php


function limpar_texto($str){
    return preg_replace("/[^0-9]/", "", $str);
}


if(count($_POST) > 0) {

    include('conexao.php');
   
    $erro = false;
    $nome = $_POST['nome'];
    $preço = $_POST['preço'];
    $quantidade = $_POST['quantidade'];   

//Campos que nao podem ser cadastrados em branco!
 if(empty($nome)) {
    $erro = "Preencha o nome";   
} else if(empty($preço)) {
    $erro = "Preencha o preço";
} else if(empty($quantidade)) {
    $erro = "Preencha a quantidade";
}
if(!empty($preço)) {
    $pedacos = explode(',', $preço);
    $preço = implode ('.', $pedacos);
}

    if($erro) {
        echo "<p><b>ERRO: $erro</b></p>";
    } else {
        $sql_code = "INSERT INTO produtos (nome, preço, quantidade)
        VALUES ('$nome','$preço','$quantidade')";
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
    <link rel="stylesheet" href="login.css">
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
            <label>Preço:</label>
            <input value="<?php if(isset($_POST['preço'])) echo $_POST['preço']; ?>" name="preço" type="text">
        </p>
        <p>
            <label>Quantidade:</label>
            <input value="<?php if(isset($_POST['quantidade'])) echo $_POST['quantidade']; ?>"  name="quantidade" type="text">
        </p>
        <p>
            <button type="submit">Cadastrar produto</button>
        </p>
    </form>
</body>
</html>