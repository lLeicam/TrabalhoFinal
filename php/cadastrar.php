<?php

include('conexao.php');

$nome           = $_POST["nome"];
$genero         = $_POST["genero"];
$user           = $_POST["user"];
$email          = $_POST["email"];
$senha          = $_POST["senha"];
$date           = $_POST["date"];
$cpf            = $_POST["cpf"];
$telefone       = $_POST["telefone"];
$cep            = $_POST["cep"];
$uf             = $_POST["uf"];
$cidade         = $_POST["cidade"];
$logradouro     = $_POST["logradouro"];
$numero         = $_POST["numero"];
$complemento    = $_POST["complemento"];


$cadastra = "INSERT INTO infousers (nome, genero, user, email, senha, data, cpf, telefone, cep, uf, cidade, logradouro, numero, complemento) VALUES ('$nome', '$genero', '$user', '$email', '$senha', '$date', '$cpf', '$telefone', '$cep', '$uf', '$cidade', '$logradouro', '$numero', '$complemento')";

if (mysqli_query($conn, $cadastra)){
    echo "<h1>Novo cadastro realizado</h1></br>";
} else {
    echo "Erro: " . $cadastra . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>