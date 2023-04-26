<?php

if (isset($_FILES['nome'])) {
  $arquivo = $_FILES['nome'];
  if ($arquivo['size'] > 2097152)
    die("Arquivo muito grande!! Max: 2MB");

  if ($arquivo['error'])
    die("Falha ao enviar arquivo");

  $pasta = "img";
  $nomeDoArquivo = $arquivo['name'];
  $novoNomeDoArquivo = uniqid();
  $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));

  $path = $pasta . $novoNomeDoArquivo . "." . $extensao;
  $deu_certo = move_uploaded_file($arquivo["tmp_name"], $path);

  if ($deu_certo) {
    $conn = new mysqli("localhost", "root", "", "cardapio");
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    $nomeDoArquivo = mysqli_real_escape_string($conn, $nomeDoArquivo);
    $sql = "INSERT INTO imagens (nome, caminho) VALUES ('$nomeDoArquivo', '$path')";
    if ($conn->query($sql) === TRUE) {
      echo "<p> Arquivo enviado com sucsso! Para acessá-lo clique aqui <a target='_blank' href='$path'>clique aqui</a></p>";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
  } else {
    echo "<p> Falha ao enviar arquivo </p>";
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Upload de arquivo</title>
</head>
<body>
  <form enctype="multipart/form-data" method="post" action="">
    <p><label for=""> Selecione o arquivo</label>
    <input type="file" name="nome"></p>
    <button type="submit">Enviar arquivo</button>
  </form>
</body>
</html>