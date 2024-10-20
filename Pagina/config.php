<?php

$host = "localhost";
$port = "5432";
$user = "postgres";
$password = "1234";
$dbname = "paginalogin";

$conexao = pg_pconnect("host=$host port=$port dbname=$dbname user=$user password=$password");

//if ($conexao) {
  //echo("deu certo");
//} else {
   //echo("errado");
//}
