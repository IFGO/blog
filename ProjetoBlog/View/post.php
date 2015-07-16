<!DOCTYPE html>
<?php
include ("../persistencia/ArtigoDAO.php");
include ("../model/Comentario.php");
include ("../persistencia/ComentarioDAO.php");
include ("../persistencia/Conexao.php");
if(isset($_REQUEST["id"])){
$idArtigo = $_REQUEST["id"];

$con = new Conexao();
$artigoDAO = new ArtigoDAO($con->getConection());
$artigo = $artigoDAO->getArtigoPorId($_REQUEST["id"]);

$comentarioDAO = new ComentarioDAO($con->getConection());

if(isset($_REQUEST["comentario"])){
  
    $comentario = new Comentario(0,$idArtigo, $_REQUEST["nome"],date('Y-m-d'), $_REQUEST["comentario"]);
    
    $comentarioDAO->inserirComentario($comentario);
    
}

$comentarios = $comentarioDAO->listarComentariosPorArtigo($idArtigo);
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
                                echo date_format($date, 'd/m/Y');?></small></h3>
                            </div>

                            <p><?php echo $artigo['artigo_corpo'] ?> </p>
                            
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="list-group">
                        <a href="#" class="list-group-item">
                            <h4 class="list-group-item-heading">Parceiros</h4>
                             <p class="list-group-item-text">
                                 <img width="200px" height="50px" style="background: #32acbf" src="images/mentaismapas.png"/>
                                 <img width="200px" height="50px" style="background: #32acbf" src="images/mentaismapas.png"/>
                                 <img width="200px" height="50px" style="background: #32acbf" src="images/mentaismapas.png"/>
                                 <img width="200px" height="50px" style="background: #32acbf" src="images/mentaismapas.png"/>
                                 <img width="200px" height="50px" style="background: #32acbf" src="images/mentaismapas.png"/>
                                 <img width="200px" height="50px" style="background: #32acbf" src="images/mentaismapas.png"/>
                                 <img width="200px" height="50px" style="background: #32acbf" src="images/mentaismapas.png"/>
                                 
                             </p
                             
                             ></a>
                             </div>
                </div>
                <h4>Comentários</h4>
                <hr></hr>
                <h4>Novo</h4>
                 <div class="container">
                <form class="form-login" method="POST" action="post.php?id=<?php echo $idArtigo ?>">
                
                <div class="form-group">
                   Nome
                   <div class="input-group">
                      <input type="text" name="nome" class="form-control" placeholder="Seu nome...">
                    </div>
                </div> 
                <div class="form-group">
                   Comentário
                   <div class="input-group">
                       <input type="text" name="comentario" class="form-control" placeholder="Comentario...">
                    </div>
                </div>
                   
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    
                </form>
                 </div>
                <div class="col-lg-3" style="margin-top: 20px">
                    <?php
                     foreach($comentarios as $comentario){?>
                      <div class="list-group">
                        <div class="list-group-item">
                            <h4 class="list-group-item-heading"><?php echo $comentario['comentario_autor'] ?> disse ás <?php 
                                $date = date_create($comentario['comentario_data']);echo date_format($date, 'd/m/Y');?>:</h4>
                             <p class="list-group-item-text"><?php echo $comentario['comentario_conteudo']?></p>
                        </div>
                    </div>
                    <?php
                     }
                    ?>
                   
                    
                </div>  
           
          
            </div>
        </div>

            </div>
        </div>


       






    </body>
</html>
