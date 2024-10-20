<?php

$host = "localhost";
$port = "5432";
$user = "postgres";
$password = "1234";
$dbname = "paginalogin";

$conexao = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

//pg_connect -> faz a conexão com o banco de dados (postgres)

//if ($conexao) {
  //echo("deu certo");
//} else {
   //echo("errado");
//}