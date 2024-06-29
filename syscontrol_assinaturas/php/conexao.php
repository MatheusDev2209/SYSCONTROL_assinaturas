<?php
// Configuração de conexão com o banco de dados
$servername = "localhost"; // normalmente 'localhost' se estiver rodando localmente
$username = "root"; // seu nome de usuário do MySQL
$password = ""; // sua senha do MySQL
$dbname = "sc_assinatura"; // nome do banco de dados que você criou

// Conectar ao banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_errno) {
    echo  "Falha ao conectar (" . $conn->connect_errno . ")" . $conn->connect_error;
}



