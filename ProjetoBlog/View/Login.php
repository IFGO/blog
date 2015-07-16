<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
include "../persistencia/UsuarioDAO.php";
include "../persistencia/Conexao.php";
    if(isset($_POST["email"])){
         $login = $_POST["email"];
        $password = $_POST["password"];
        $con = new Conexao();
        $usuarioDAO = new UsuarioDAO($con->getConection());
        $idUser = $usuarioDAO->verificaUsuario($login, $password);
        echo $idUser;
        if($idUser>0){
            session_start();
            $_SESSION["user"] = $idUser;
            header("Location:Admin/admin.php");
        }else{
            session_destroy();
             $erro = "Usuário e senha inválidos!!";
        }
        
    }
    if(isset($_REQUEST["erro"])){
       $erro =  "É necessário fazer o login";
    }
   
   
    
?>


<html>
    <head>	
        <title>Brogão› Login</title>
        <link href="../estilo/css/bootstrap.min.css" rel="stylesheet">
        <link href="../estilo/css/login.css" rel="stylesheet">
        <meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1" />


    </head>
    <body  style="background: #eee;">
        <div class="container">
            <div class="page-header">
            </div>
            <form class="form-login" method="POST" action="Login.php">
                <h3 class="text-center">Login</h3>
                <div class="form-group">
                    <label for="exampleInputEmail1">Usuário</label>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Senha</label>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-star"></span></span>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="">
                    </div>
                </div>
                
                
                <span style="color: red">
                    <?php if(isset($_POST["email"]) || isset($_REQUEST["erro"])){
                        echo $erro;
                    }
                    ?>
                    
                </span>
                    
                    
                
                <hr/>
                <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-lock"></span>Login</button>
                <p></br></p>
            </form>
        </div>   
</body>
</html>
