<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    
<head>	
    <title>Brogão› Login</title>
	<link href="estilo/css/bootstrap.min.css" rel="stylesheet">
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
	<link href="estilo/css/styles.css" rel="stylesheet">
</head>
	<body class= "login">
	
	<div id="login">
		<h1><a href="http://brogao.96.lt/" title="Brogão" tabindex="-1">Brogão</a></h1>
	
	<form name="loginform" class="loginform" action="./Mentais Mapas › Login_files/Mentais Mapas › Login.html" method="post">
	<p>
		<label for="user_login">Nome de usuário<br>
		<input type="text" name="log" id="user_login" class="input" value="" size="20"></label>
	</p>
	<p>
		<label for="user_pass">Senha<br>
		<input type="password" name="pwd" id="user_pass" class="input" value="" size="20"></label>
	</p>
		<p class="forgetmenot"><label for="rememberme"><input name="rememberme" type="checkbox" id="rememberme" value="forever"> Lembrar-me</label></p>
	<p class="submit">
		<input type="submit" name="brogao-submit" id="brogao-submit" class="button button-primary button-large" value="Login">
		<input type="hidden" name="redirect_to" value="http://brogao.96.lt/">
		<input type="hidden" name="testcookie" value="1">
	</p>
    </form>
                
            

    </div>
</html>
