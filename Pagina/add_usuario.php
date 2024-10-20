<?php
include("config.php");

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];

$queryAddUsuario = pg_query($conexao, "insert into usuarios (nome,email,senha) values ('$nome','$email','$senha')");

//Este método chama outra página.
header("Location: index.php");
//este outro método garante que este arquivo será fechado.
exit();
