<!DOCTYPE html>
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
        
        <div class="container-fluid display-table">
            <div class="row display-table-row">
                <!-- menu lateral -->
                <div class="col-md-2 display-table-cell valign-top" id="side-menu">
                     <h1>Navegação</h1>
                </div>
                <!-- área principal -->
                <div class="col-md-10  display-table-cell valign-top">
                    <div class="row">
                        <header id="nav-header" class="clearfix">
                            <div class="col-md-5">
                                <input type="text" id="header-search-field" placeholder="Pesquisar..."> 
                            </div>
                            <div class="col-md-7">
                                <ul class="pull-right">
                                    <li id="bemvindo">Bem vindo ao Painel de Administração.</li>
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


