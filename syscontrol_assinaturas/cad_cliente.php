<?php
    if(!isset($_SESSION)){
        session_start();
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SYSCONTROL - Assinaturas - Cad.Clientes</title>
  <!-- Incluindo Bootstrap CSS -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
  <link href="css/styles.css" rel="stylesheet" />
  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
          
<style>
  td,tr{
    text-align: center;
  }
</style>
</head>
<body class="sb-nav-fixed">
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">SYSCONTROL</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Perfil</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="/syscontrol_assinaturas/php/logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Administrativo</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Clientes
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Cadastro</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Renovações</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Cancelamentos</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Adesão</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Relatórios
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Servidores 
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.html">P2P</a>
                                            <a class="nav-link" href="register.html">IPTV</a>
                                            <a class="nav-link" href="password.html">OTS</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Finaceiro
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">Vendas</a>
                                            <a class="nav-link" href="404.html">Planos</a>
                                            <a class="nav-link" href="500.html">Cancelamento</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Finanças</div>
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Financeiro
                            </a>
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Vendas
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Planos
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Usuário:</div>
                        <?php echo $_SESSION['nome']; ?>
                    </div>
                </nav>
            </div>

            <div id="layoutSidenav_content">
                
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Cadastro de Clientes</h1>
<!--<div class="container mt-5">-->  
  <!-- Botão para adicionar novo cliente -->
  <div class="text-right mb-3">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addUsuarioModal">Novo Cliente</button>
  </div>
  	<span id="msg"></span>
    <span id="conteudo"></span><br>
  <!-- Tabela de Clientes -->
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>WhatsApp</th>
        <th>Serviço</th>
        <th>Plano</th>
        <th>Valor do Plano R$</th>
        <th>Data de Cadastro</th>
        <th>Ações</th>
      </tr>
    </thead>
    
    <tbody>
      <tr>
        <td>1</td>
        <td>Rinaldo Henrique</td>
        <td>(11) 98765-4321</td>
        <td>P2P</td>
        <td>Mensal</td>
        <td>30,00</td>
        <td>01/07/2024</td>
        <td>
          <!-- Botões de ação para editar e excluir -->
          <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalEditarCliente">Editar</button>
          <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalExcluirCliente">Excluir</button>
        </td>
      </tr>
      <tr>
      <td>2</td>
        <td>Luciana Henrique</td>
        <td>(11) 98765-4321</td>
        <td>IPTV</td>
        <td>Mensal</td>
        <td>30,00</td>
        <td>01/06/2024</td>
        <td>
          <!-- Botões de ação para editar e excluir -->
          <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalEditarCliente">Editar</button>
          <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalExcluirCliente">Excluir</button>
        </td>
       
      </tr>
      
      <!-- Adicione mais linhas conforme necessário -->
    </tbody>
  </table>
</div>

<!-- Modal Novo Cliente -->
<div class="modal fade" id="addUsuarioModal" tabindex="-1" role="dialog" aria-labelledby="modalNovoClienteLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addUsuarioModalLabel">Novo Cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Formulário para adicionar novo cliente -->
        <span id="msg-error"></span>
        <form id="insert_form" method="post" action="php/registercliente.php">
          <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" class="form-control" name="nome" placeholder="Digite o nome do cliente" >
          </div>
          <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" id="email" class="form-control" name="email" placeholder="Digite o e-mail do cliente" >
          </div>
          <div class="form-group">
            <label for="telefone">Telefone</label>
            <input type="text" class="form-control" id="telefone" class="form-control" name="telefone" placeholder="Digite o telefone do cliente" >
          </div>
          <div class="form-group">
            <label for="servico">Serviço</label>
            <select class="form-select" aria-label="Default select example" id="servico" class="form-control" name="servico">
             <option selected>Selecione.</option>
             <option value="IPTV">IPTV</option>
             <option value="P2P">P2P</option>
             <option value="OTS">OTS</option>
             <option value="SSIPTV">SSIPTV</option>
             </select>
          </div>
          <div class="form-group">
            <label for="usuario">Usuário</label>
            <input type="text" class="form-control" id="usuario" class="form-control" name="usuario" placeholder="Digite o usuario do cliente" >
          </div>
          <div class="form-group">
            <label for="senha">Senha</label>
            <input type="text" class="form-control" id="senha" class="senha" name="senha" placeholder="Digite a senha do cliente" >
          </div>
          <div class="form-group">
            <label for="servico">Planos</label>
            <select class="form-select" aria-label="Default select example" id="plano" name="plano" class="form-control">
             <option selected class="plano">Selecione.</option>
             <option value="Mensal">Mensal</option>
             <option value="Bimestral">Bimestral</option>
             <option value="Trimestral">Trimestral</option>
             <option value="Semestral">Semestral</option>
             <option value="Anual">Anual</option>
            </select>
          </div>

          <div class="form-group">
            <label for="valorplano">Valor do Plano</label>
            <input type="text" class="form-control" id="valorplano" class="valorplano" name="valorplano" placeholder="Digite o Valor do plano do cliente" >
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            <input type="submit" name="CadUser" id="CadUser" value="Cadastrar" class="btn btn-outline-success">
           </div>
        </form>
      </div>
      
    </div>
  </div>
</div>  

<div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-success text-white">
        <h5 class="modal-title" id="successModalLabel">
          <i class="fas fa-check-circle mr-2"></i> Cadastro Realizado com Sucesso
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Parabéns! Seu cadastro foi realizado com sucesso.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Editar Cliente -->
<div class="modal fade" id="modalEditarCliente" tabindex="-1" role="dialog" aria-labelledby="modalEditarClienteLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalEditarClienteLabel">Editar Cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Formulário para editar cliente -->
        <form>
          <div class="form-group">
            <label for="nomeEdit">Nome</label>
            <input type="text" class="form-control" id="nomeEdit" value="João Silva">
          </div>
          <div class="form-group">
            <label for="emailEdit">E-mail</label>
            <input type="email" class="form-control" id="emailEdit" value="joao@example.com">
          </div>
          <div class="form-group">
            <label for="telefoneEdit">Telefone</label>
            <input type="tel" class="form-control" id="telefoneEdit" value="(11) 98765-4321">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Salvar Alterações</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Excluir Cliente -->
<div class="modal fade" id="modalExcluirCliente" tabindex="-1" role="dialog" aria-labelledby="modalExcluirClienteLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalExcluirClienteLabel">Excluir Cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Tem certeza que deseja excluir o cliente?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-danger">Excluir</button>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<!-- Incluindo Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/chart-area-demo.js"></script>
<script src="assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
<script src="js/datatables-simple-demo.js"></script>

<script>
			var qnt_result_pg = 50; //quantidade de registro por página
			var pagina = 1; //página inicial
			$(document).ready(function () {
				listar_usuario(pagina, qnt_result_pg); //Chamar a função para listar os registros
			});
			
			function listar_usuario(pagina, qnt_result_pg){
				var dados = {
					pagina: pagina,
					qnt_result_pg: qnt_result_pg
				}
				$.post('listar_usuario.php', dados , function(retorna){
					//Subtitui o valor no seletor id="conteudo"
					$("#conteudo").html(retorna);
				});
			}
			//Até aqui faz listar usuarios
			
			$(document).ready(function(){
				$(document).on('click','.view_data', function(){
					var user_id = $(this).attr("id_cli");
					//alert(user_id);
					//Verificar se há valor na variável "user_id".
					if(user_id !== ''){
						var dados = {
							user_id: user_id
						};
						$.post('php/visualizar.php', dados, function(retorna){
							//Carregar o conteú do para o usuário
							$("#visul_usuario").html(retorna);
							$('#visulUsuarioModal').modal('show'); 
						});
					}
				});
				
				$('#insert_form').on('submit', function(event){
					event.preventDefault();
					if($('#nome').val() == ""){
						//Alerta de campo nome vazio
						$("#msg-error").html('<div class="alert alert-danger" role="alert">Necessário prencher o campo nome!</div>');
					}else if($('#email').val() == ""){
						//Alerta de campo email vazio
						$("#msg-error").html('<div class="alert alert-danger" role="alert">Necessário prencher o campo e-mail!</div>');						
          }else if($('#telefone').val() == ""){
						//Alerta de campo telefone vazio
						$("#msg-error").html('<div class="alert alert-danger" role="alert">Necessário prencher o campo telefone!</div>');						
					}else if($('#servico').val() == "Selecione."){
						//Alerta de campo servico nao selecionado
						$("#msg-error").html('<div class="alert alert-danger" role="alert">Necessário selecionar um serviço!</div>');						
					}else if($('#usuario').val() == ""){
						//Alerta de campo usuario vazio
						$("#msg-error").html('<div class="alert alert-danger" role="alert">Necessário prencher o campo usuário!</div>');						
					}else if($('#senha').val() == ""){
						//Alerta de campo senha vazio
						$("#msg-error").html('<div class="alert alert-danger" role="alert">Necessário prencher o campo senha!</div>');						
					}else if($('#plano').val() == "Selecione."){
						//Alerta de campo plano nao selecionado
						$("#msg-error").html('<div class="alert alert-danger" role="alert">Necessário selecionar um plano!</div>');						
					}else if($('#valorplano').val() == ""){
						//Alerta de campo valor do plano nao selecionado
						$("#msg-error").html('<div class="alert alert-danger" role="alert">Necessário preencher o valor do plano!</div>');						
					}else{
						//Receber os dados do formulário
						var dados = $("#insert_form").serialize();
						$.post("php/registercliente.php", dados, function (retorna){
							if(retorna){
								//Alerta de cadastro realizado com sucesso
								$("#msg").html('<div class="alert alert-success" role="alert">Usuário cadastrado com sucesso!</div>');
								
								//Limpar os campo
								$('#insert_form')[0].reset();
								
								//Fechar a janela modal cadastrar
								$('#addUsuarioModal').modal('hide');
								
								//Limpar mensagem de erro
								$("#msg-error").html('');	
								
								listar_usuario(1, 50);
							}else{
								
							}
							
						});
					}
				});
			});
		</script>
</body>
</html>
