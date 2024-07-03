<?php
include("conexao.php");

// Receber os dados do formulário via POST
$senha = $_POST['senha']; // Lembre-se de implementar hash de senha seguro em produção
$usuario = $_POST['usuario'];

if(isset($_POST['usuario']) || isset($_POST['senha'])) {

    if(strlen($_POST['usuario']) == 0) {
        echo "Preencha seu usuario";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {

        $usuario = $conn->real_escape_string($_POST['usuario']);
        $senha = $conn->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuario WHERE usuario = '$usuario' AND senha = '$senha'";
        $sql_query = $conn->query($sql_code) or die("Falha na execução do código SQL: " . $conn->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usu = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id_usu'] = $usu['id_usu'];
            $_SESSION['nome'] = $usu['nome'];

            header("Location: ../index.php");

        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }

    }

}