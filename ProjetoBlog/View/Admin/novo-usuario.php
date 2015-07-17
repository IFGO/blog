    <!DOCTYPE html>
    <?php
    include ("../../persistencia/UsuarioDAO.php");
    include ("../../model/Usuario.php");
    include ("../../persistencia/Conexao.php");
    session_start();
    if(isset($_REQUEST["nome"])){
        $con = new Conexao();
        $usuarioDAO = new UsuarioDAO($con->getConection());
        
        $usuario = new Usuario(0, $_REQUEST["nome"], $_REQUEST["email"], $_REQUEST["aniversario"] ,$_REQUEST["apelido"],  $_REQUEST["senha"]);
        $usuarioDAO->inserirUsuario($usuario);
       header("Location:usuarios.php");
    }
    ?>
    <html lang="pt-br">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1" />
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href="css/styles.css" rel="stylesheet">
            <title>Novo Usuário</title>

            <!-- Bootstrap CSS -->
            <link href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
            <![endif]-->
        </head>
        <body>
            <div class="container-fluid display-table">
                <div class="row display-table-row">
                    <!-- menu lateral -->
                    <div class="col-md-2 col-sm-1 hidden-xs display-table-cell valign-top" id="side-menu">
                         <h1 class="hidden-xs hidden-sm">Painel</h1>  
                         <ul>
                             <li class="link">
                                 <a href="admin.php">
                                     <span class="glyphicon glyphicon-th" aria-hidden="true"></span>
                                     <span class="hidden-sm hidden-xs">Painel</span>
                                 </a>
                             </li>

                             <li class="link active">
                                 <a href="#collapse-post" data-toggle="collapse" aria-controls="collapse-post">
                                     <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                                     <span class="hidden-sm hidden-xs">Artigos</span>
                                     <span class="label label-success pull-right hidden-xs hidden-sm">10</span>
                                 </a>
                                 <ul class="collapse collapseable" id="collapse-post">
                                    <li><a href="novo-artigo.php">Adicionar Novo Artigo</a></li>
                                    <li><a href="artigos.php">Listar Artigos</a></li>   
                                 </ul>
                             </li>
                             <li class="link">
                                 <a href="#collapse-user" data-toggle="collapse" aria-controls="collapse-user">
                                     <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                     <span class="hidden-sm hidden-xs">Usuários</span>
                                     <span class="label label-success pull-right hidden-xs hidden-sm">3</span>
                                 </a>
                                 <ul class="collapse collapseable" id="collapse-user">
                                    <li><a href="novo-usuario.php">Adicionar Novo Usuário</a></li>
                                    <li><a href="usuarios.php">Listar Usuários</a></li>   
                                 </ul>
                             </li>
                         </ul>
                    </div>
                    <!-- área principal -->
                    <div class="col-md-10 col-sm-11 display-table-cell valign-top">
                        <div class="row">
                            <header id="nav-header" class="clearfix">
                                <div class="col-md-5">
                                <nav class="navbar-default pull-left">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="#side-menu" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </nav>
                                    <input type="text" class="hidden-sm hidden-xs"id="header-search-field" placeholder="Pesquisar..."> 
                                </div>
                                <div class="col-md-7">
                                    <ul class="pull-right">
                                        <li id="bemvindo" class="hidden-xs">Bem vindo ao Painel de Administração.</li>
                                        <li class="fixed-width">
                                            <a href="#">
                                                <span class="glyphicon glyphicon-bell" aria-hidden="true"></span>
                                                <span class="label label-warning">3</span>
                                            </a>
                                        </li>
                                        <li class="fixed-width">
                                            <a href="#">
                                                <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                                                <span class="label label-message">3</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="logout">
                                                <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
                                                log out
                                            </a>
                                        </li>
                                    </ul>
                                </div>    
                            </header> 
                        </div>

                        <div id="content">
                            <header class="clearfix">
                                <h2 class="page_title pull-left">Adicionar Novo Usuário</h2>
                            </header>
                            
                            <div class="content-inner">
                               




                                        <form class="form-horizontal">
                <fieldset>


                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="textinput">Nome de Usuário</label>  
                      <div class="col-md-4">
                      <input id="textinput" name="nome" type="text" placeholder="" class="form-control input-md" required="">
                        
                      </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="textinputNome">Nome</label>  
                      <div class="col-md-5">
                      <input id="textinputNome" name="apelido" type="text" placeholder="" class="form-control input-md" required="">
                        
                      </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="textinputEmail">Email</label>  
                      <div class="col-md-5">
                      <input id="textinputEmail" name="email" type="text" placeholder="" class="form-control input-md" required="">
                        
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-md-4 control-label" for="textinput">Data de Nascimento</label>  
                      <div class="col-md-4">
                      <input id="textinput" name="aniversario" type="text" placeholder="" class="form-control input-md" required="">
                        
                      </div>
                    </div>

                    <!-- Password input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="passwordinput1">Senha</label>
                      <div class="col-md-4">
                        <input id="passwordinput1" name="senha" type="password" placeholder="" class="form-control input-md" required="">
                        
                      </div>
                    </div>

                    <!-- Password input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="passwordinput2">Repetir Senha</label>
                      <div class="col-md-4">
                        <input id="passwordinput2" name="senhaRepetir" type="password" placeholder="" class="form-control input-md" required="">
                        
                      </div>
                    </div>

                    </fieldset>
                    <div class="clearfix">
                                        <button type="submit" class="btn btn-primary pull-right">Adicionar</button>
                                    </div>
                    </form>
                    








                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <nav>
                                            <ul class="pagination">
                                                <li><a href="#">&laquo;</a></li>
                                                <li><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#">4</a></li>
                                                <li><a href="#">5</a></li>
                                                <li><a href="#">&raquo;</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <footer id="admin-footer" class="clearfix">
                                <div class="pull-left"><b>Copyright</b>&copy; 2015</div>
                                <div class="pull-right">Equipe Blog</div>  
                            </footer>
                        </div>
                    </div>  
                </div>
            </div>

            <!-- jQuery -->
            <script src="//code.jquery.com/jquery.js"></script>
            <!-- Bootstrap JavaScript -->
            <script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        </body>
    </html>


