<!DOCTYPE html>
<html  lang="pt-br">
    <head>
        <title>TODO supply a title</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap -->
        <link href="assets/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">    
        <script src="assets/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    </head>

        
    <body>

<?php 
        header( 'Content-Type: text/html; charset=UTF-8' );
        include './views/menu.php'; ?>        
        <br><br><br><br><br><br><br>
<center>
    <form method="post" action="validaLogin.php">        
        <label id="table-responsive-md">Usuário</label>    
        <input type="text" name="login" value="">
        <br>
        <label>Senha</label>    
        <input type="password" name="senha" value=""><br>
        <input type="submit" value="Entrar">
    </form>
</center>
        
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    </body>
</html>
