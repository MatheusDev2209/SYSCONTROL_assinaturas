<?php
    if(!isset($_SESSION)){
        session_start();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SYSCONTROL - Assinaturas - Cad.Clientes</title>
  <!-- Incluindo Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        
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
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalNovoCliente">Novo Cliente</button>
  </div>
  
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
<div class="modal fade" id="modalNovoCliente" tabindex="-1" role="dialog" aria-labelledby="modalNovoClienteLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalNovoClienteLabel">Novo Cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Formulário para adicionar novo cliente -->
        <form id="formcadastro" method="post" action="php/registercliente.php">
          <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" class="nome" name="nome" placeholder="Digite o nome do cliente" required>
          </div>
          <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" id="email" class="email" name="email" placeholder="Digite o e-mail do cliente" required>
          </div>
          <div class="form-group">
            <label for="telefone">Telefone</label>
            <input type="text" class="form-control" id="telefone" class="telefone" name="telefone" placeholder="Digite o telefone do cliente" required>
          </div>
          <div class="form-group">
            <label for="servico">Serviço</label>
            <select class="form-select" aria-label="Default select example">
             <option selected id="servico" class="servico">Selecione.</option>
             <option value="1">IPTV</option>
             <option value="2">P2P</option>
             <option value="3">OTS</option>
             <option value="4">SSIPTV</option>
             </select>
          </div>
          <div class="form-group">
            <label for="usuario">Usuário</label>
            <input type="text" class="form-control" id="usuario" class="usuario" name="ususario" placeholder="Digite o usuario do cliente" required>
          </div>
          <div class="form-group">
            <label for="senha">Senha</label>
            <input type="text" class="form-control" id="senha" class="senha" name="senha" placeholder="Digite a senha do cliente" required>
          </div>
          <div class="form-group">
            <label for="servico">Planos</label>
            <select class="form-select" aria-label="Default select example">
             <option selected id="plano" class="plano">Selecione.</option>
             <option value="1">Mensal</option>
             <option value="2">Bimestral</option>
             <option value="3">Trimestral</option>
             <option value="4">Semestral</option>
             <option value="5">Anual</option>
            </select>
          </div>

          <div class="form-group">
            <label for="valorplano">Valor do Plano</label>
            <input type="text" class="form-control" id="valorplano" class="valorplano" name="valorplano" placeholder="Digite o Valor do plano do cliente" required>
          </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Salvar</button>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/chart-area-demo.js"></script>
<script src="assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
<script src="js/datatables-simple-demo.js"></script>
</body>
</html>
