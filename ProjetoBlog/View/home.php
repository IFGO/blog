<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="../estilo/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">
    </head>
    <body>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="../estilo/js/bootstrap.min.js"></script>

        <?php
        include("header.php");
        ?>

        <div class="container">

            <div class="jumbotron">
                <center><h1>Bem Vindo!</h1>
                    <p>Ao melhor blog de todos os tempos!</p>
                      
            </div>

        </div>

        <div class="container">

            <div class="row">
                <?php
                    include ("../persistencia/Conexao.php");
                    include ("../persistencia/ArtigoDAO.php");
                    
                    $con = new Conexao();
                    $artigoDAO = new ArtigoDAO($con->getConection());
                    
                    $lista = $artigoDAO->listarArtigos();
                    
                    foreach($lista as $artigo){
                        
                   
                ?>

                    <div class="col-md-3">

                        <h3><a href="post.php?id=<?php echo $artigo['artigo_id']?>"><?php echo $artigo['artigo_titulo'] ?></a></h3>
                        <p><?php echo $artigo['artigo_corpo'] ?></p>
                        <a href="post.php?id=<?php echo $artigo['artigo_id']?>" class="btn btn-default">Leia Mais</a>

                    </div>
                    <?php }?>
              
            </div>

        </div>

        <?php
        include("footer.php");
        ?>

    </body>
</html>


