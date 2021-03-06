<!DOCTYPE html>
<?php
    session_start();
    if(!isset($_SESSION["user"])){
        header("Location:../Login.php?erro");
    }
?>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/styles.css" rel="stylesheet">
        <title>Artigos</title>

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
                            <h2 class="page_title pull-left">Todos os Artigos</h2>
                            <button  type="button" class="btn btn-xs btn-primary pull-right"><a href="novo-artigo.php">Adicionar Novo Artigo</a></button>
                        </header>
                        
                        <div class="content-inner">
                            <div class="row search-row">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <input type="text" class="form-control search-field" id="search" placeholder="Pesquisar">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-primary">Ok!</button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            
                            <?php
                            include ("../../persistencia/ArtigoDAO.php");
                            include ("../../persistencia/Conexao.php");
                                $con = new Conexao();
                                $artigoDAO = new ArtigoDAO($con->getConection());
                                $artigos = $artigoDAO->listarArtigosPorIdUser($_SESSION["user"]);
                                
                                foreach($artigos as $artigo){
                            ?>
                            <div class="row">
                               
                                <div class="col-md-8">
                                    <p> <b><?php echo $artigo['artigo_titulo'] ?></b></p>
                                    <small>Adicionado em  <?php 
                                $date = date_create($artigo['artigo_datacriacao']);
                                echo date_format($date, 'd/m/Y');?></small>
                                </div>
                                 <div class="col-md-3">
                                    <div class="article-actions">
                                        <a class="btn btn-xs btn-default" href="../post.php?id=<?php echo $artigo['artigo_id']?>" role="button">
                                            <span class="glyphicon glyphicon-folder-open" aria-hidden="true">&nbsp;Visualizar</span>
                                        </a>
                                        <a class="btn btn-xs btn-default" href="#" role="button">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true">&nbsp;Editar</span>
                                        </a>
                                        <a class="btn btn-xs btn-default" href="#" role="button">
                                            <span class="glyphicon glyphicon-remove" aria-hidden="true">&nbsp;Excluir</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <hr>
                                <?php } ?>
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


