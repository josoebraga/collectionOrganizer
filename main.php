<!DOCTYPE html>
<html  lang="pt-br">
    <head>
        <title>TODO supply a title</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap -->
        <link href="assets/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">    
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    </head>
        
<?php     
    $get = filter_input_array(INPUT_GET, FILTER_DEFAULT);
    $post = filter_input_array(INPUT_POST, FILTER_DEFAULT); 
 ?> 
        
<?php include './views/menu.php'; ?>        

    <body>


        
        <div id="conteudo" style="	position: absolute; left: 90px; top: 70px; ">

    <?php
    
    if(isset($get['colecao'])){
        include './colecoes/'.$get['colecao'];
    }
    
    
    ?>
    
</div>
        
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    </body>
</html>