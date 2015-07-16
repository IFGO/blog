<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="ISO-8859-1">
        <title></title>
        <link href="estilo/css/bootstrap.min.css" rel="stylesheet">
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
	<link href="estilo/css/styles.css" rel="stylesheet">
        
        <style>
            .col-sm-12{
                background: red;
            }
            
        </style>
    </head>
    <body>
        <?php
        include "../persistencia/Conexao.php";
        include "../model/Usuario.php";
        include "../persistencia/UsuarioDAO.php";
        $con = new Conexao();
        
       $usuario = new Usuario(2,"João", "diego_ta", "1999-03-24", "jao", "123");
       $usuarioDAO = new UsuarioDAO($con->getConection());
       //$usuarioDAO->inserirUsuario($usuario);
       $lista = $usuarioDAO->listarUsuarios();
       
        ?>
        
         <div class="col-md-5">.
        <div class="well well-lg"> 
            <?php
            
            foreach($lista as $v) {
                              
            }
            
         
            ?>
            <div class="row">
                    <div class="col-sm-12">

                    </div>
                  </div>  
        </div>
      </div>
    </div> 
    </body>
</html>
