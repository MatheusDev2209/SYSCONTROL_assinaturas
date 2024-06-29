<?php
include("conexao.php");

// Receber os dados do formulário via POST
//$nome = $_POST['nome'];
//$sobrenome = $_POST['sobrenome'];
//$email = $_POST['email'];
//$senha = $_POST['senha']; // Lembre-se de implementar hash de senha seguro em produção

$nome = "matheus";
$sobrenome = "Henrique";
$email = "amhenrique157@gmail.com";
$senha = "@Srvsa2022";

// Inserir os dados na tabela do banco de dados
$sql = "INSERT INTO usuario (nome, sobrenome, email, senha) VALUES ('$nome', '$sobrenome', '$email', '$senha')";

if ($conn->query($sql) === TRUE) {
    echo "Cadastro realizado com sucesso!";
} else {
    echo "Erro ao cadastrar: " . $conn->error;
}

// Fechar a conexão com o banco de dados
$conn->close();
