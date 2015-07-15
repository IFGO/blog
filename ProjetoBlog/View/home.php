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
                    <a class="btn btn-default">Clique aqui!</a>
                    <a class="btn btn-info">Compartilhe!</a></center>        
            </div>

        </div>

        <div class="container">

            <div class="row">

                <div class="col-md-3">

                    <h3><a href="#">Artigo 1 do brog</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In enim lacus, dictum in fringilla vel.</p>
                    <a href="#" class="btn btn-default">Leia Mais</a>

                </div>

                <div class="col-md-3">

                    <h3><a href="#">Artigo 2 do brog</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In enim lacus, dictum in fringilla vel.</p>
                    <a href="#" class="btn btn-default">Leia Mais</a>

                </div>

                <div class="col-md-3">

                    <h3><a href="#">Artigo 3 do brog</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In enim lacus, dictum in fringilla vel.</p>
                    <a href="#" class="btn btn-default">Leia Mais</a>

                </div>

                <div class="col-md-3">

                    <h3><a href="#">Artigo 4 do brog</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In enim lacus, dictum in fringilla vel.</p>
                    <a href="#" class="btn btn-default">Leia Mais</a>

                </div>

            </div>

        </div>

        <?php
        include("footer.php");
        ?>

    </body>
</html>


