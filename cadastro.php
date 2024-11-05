<?php

$nome = $_POST['nome'];
$data = $_POST['data'];
$funcao = $_POST['funcao'];
$salario = $_POST['salario'];
$cpf = $_POST['cpf'];
$senha = $_POST['senha'];

//echo "Parabéns! ";
//echo "senhor (a) ", $nome;
//echo ". Seu cadastro foi realizado com sucesso!";
include "conexao.php";

$sql = "INSERT INTO `funcionarios`(`nome`, `data_nasc`, `funcao`, `salario`, `cpf`, `senha`)
VALUES ('$nome', '$data', '$funcao', '$salario', '$cpf', '$senha')";

if (mysqli_query($con, $sql)){
    echo "Cadastro realizado com sucesso!";
    echo "<br> <a href='index.html'>Voltar</a>";
} else {
    echo "Erro no cadastro!";
}
