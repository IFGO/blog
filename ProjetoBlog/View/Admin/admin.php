<!DOCTYPE html>
<?php
    session_start();
    if(!isset($_SESSION["user"])){
        header("Location:../Login.php?erro");
    }
?>
<html>
    <head>
        <title>Administração Brog</title>
        <meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../../estilo/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">
    </head>
    <body>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="../../estilo/js/bootstrap.min.js"></script>
        <script src="js/padrao.js"></script>
        
        <div class="container-fluid display-table">
            <div class="row display-table-row">
                <!-- menu lateral -->
                <div class="col-md-2 col-sm-1 hidden-xs display-table-cell valign-top" id="side-menu">
                     <h1 class="hidden-xs hidden-sm">Painel</h1>  
                     <ul>
                         <li class="link active">
                             <a href="admin.php">
                                 <span class="glyphicon glyphicon-th" aria-hidden="true"></span>
                                 <span class="hidden-sm hidden-xs">Painel</span>
                             </a>
                         </li>

                         <li class="link">
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

                    <div class="row">
                        <footer id="admin-footer" class="clearfix">
                            <div class="pull-left"><b>Copyright</b>&copy; 2015</div>
                            <div class="pull-right">Equipe Blog</div>  
                        </footer>
                    </div>
                </div>  
            </div>
        </div>
    </body>
</html>


