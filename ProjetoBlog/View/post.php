<!DOCTYPE html>
<?php
if(isset($_REQUEST["id"])){
include ("../persistencia/ArtigoDAO.php");
include ("../persistencia/Conexao.php");
$con = new Conexao();
$artigoDAO = new ArtigoDAO($con->getConection());
$artigo = $artigoDAO->getArtigoPorId($_REQUEST["id"]);
}
?>
<html>
    <head>
        <title>Post</title>
        <meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="../estilo/css/bootstrap.min.css" rel="stylesheet">
        <link href="../estilo/css/post.css" rel="stylesheet">
    </head>
    <body>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <?php
        include("header.php");
        ?>


        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="panel panel-default"> 
                        <div class="panel-body">

                            <div class="page-header">
                                <h3><?php echo $artigo['artigo_titulo'] ?> 
                                    <small>Postado em 
                                        <?php 
                                $date = date_create($artigo['artigo_datacriacao']);
                                echo date_format($date, 'd/m/Y  H:i:s');?></small></h3>
                            </div>

                            <p><?php echo $artigo['artigo_corpo'] ?> </p>
                            
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="list-group">
                        <a href="#" class="list-group-item active">
                            <h4 class="list-group-item-heading">Loren Ipsum</h4>
                            <p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In enim lacus, dictum in fringilla vel, sagittis et sem. Nam gravida leo quam, eu ultricies diam</p>
                        </a>
                       
                       
                    </div>
                </div>

            </div>
        </div>


        <?php
        include("footer.php");
        ?>






    </body>
</html>
