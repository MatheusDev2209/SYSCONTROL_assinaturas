<?php
include("conexao.php");

// Receber os dados do formulário via POST
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$servivo = $_POST['servico'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha']; 
$plano = $_POST['plano'];
$valorplano = $_POST['valorplano'];


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
$sql = "INSERT INTO clientes (nome, email, telefone, servico, usuario_serv, senha, plano, valorplano, datacadastro) VALUES ('$nome', '$email', '$telefone', '$servivo', '$usuario', '$senha', '$plano', '$valorplano', now())";

if ($conn->query($sql) === TRUE) {
    
    //echo 'sucess';
    
    $cadastro_sucesso = true;
    if ($cadastro_sucesso) {
        header("refresh:3;url=../login.html");
    }

} else {
    echo "Erro ao cadastrar: " . $conn->error;
    //echo 'error';
   // http_response_code(500);
}

// Fechar a conexão com o banco de dados
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro com Sucesso</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <?php if ($cadastro_sucesso): ?>
                    
                <?php else: ?>
                    <div class="alert alert-danger" role="alert">
                        <h4 class="alert-heading">Erro no cadastro!</h4>
                        <p>Ocorreu um erro ao processar seu cadastro. Por favor, tente novamente mais tarde.</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and jQuery (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>