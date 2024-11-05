<?php

if ($_SERVER ["REQUEST_METHOD"] == "POST") {
    $cpf = $_POST ["cpf"];
    $senha = $_POST ["senha"];

    include "conexao.php";

    $sql = "SELECT * FROM funcionarios
            WHERE cpf = '$cpf'
            AND senha = '$senha'";

$resultado = mysqli_query($con, $sql);

if (mysqli_num_rows($resultado) > 0) {
    echo "Liberado!";
    header('location: delfinotech.html');
} else {
    echo "Usuário ou senha invalidos!<br><br>";
    echo "<a href='index.html'>Voltar</a>";
    }
}