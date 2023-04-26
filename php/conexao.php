<?php
 
$host = "localhost";
$user = "root";
$pass = "";
$bd = "cardapio";
 
$mysqli = new mysqli($host, $user, $pass, $bd);
 
/* check connection */
if ($mysqli->connect_errno) {
   echo "Falha de conexão: " . $mysqli->connect_error;
   exit();
}

?>
