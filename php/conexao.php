<?php

$servidor   = "localhost";
$usuario    = "root";
$senha      = "";
$dbname     = "formulario";

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

if (!$conn){
    die("Falha de conexão: " . mysql_connect_error());
}

echo "<h1>Conexão bem sucedida</h1>";
?>