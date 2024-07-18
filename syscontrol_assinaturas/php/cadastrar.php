<?php
include_once 'conexao.php';

// Receber os dados do formulário via POST
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$servivo = filter_input(INPUT_POST, 'servico', FILTER_SANITIZE_STRING);
$usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$plano = filter_input(INPUT_POST, 'plano', FILTER_SANITIZE_STRING);
$valorplano = filter_input(INPUT_POST, 'valorplano', FILTER_SANITIZE_STRING);

$query_usuario = "INSERT INTO clientes (nome, email) VALUES ('$nome', '$email')";
mysqli_query($conn, $query_usuario);

if(mysqli_insert_id($conn)){
	echo true;
}else{
	echo false;
}


//$nome = "João Henrique";
//$email = "teste@gmail.com";
//$telefone = "88996723053";
//$servivo = "IPTV";
//$usuario = "094933801";
//$senha = "506708930"; 
//$plano = "Mensal";
//$valorplano = "30,00";
//$datacad = now();

// Inserir os dados na tabela do banco de dados
//$sql = "INSERT INTO clientes (nome, email, telefone, servico, usuario_serv, senha, plano, valorplano, datacadastro) VALUES ('$nome', '$email', '$telefone', '$servivo', '$usuario', '$senha', '$plano', '$valorplano', now())";
//mysqli_query($conn, $sql);
//if(mysqli_insert_id($conn)){
//	echo true;
//}else{
//	echo "Erro ao cadastrar: " . $conn->error;
//}

// Fechar a conexão com o banco de dados

