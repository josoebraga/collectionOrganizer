<?php   session_start();
        header( 'Content-Type: text/html; charset=UTF-8' );
        include_once './conecta.php';
        $post = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        $get = filter_input_array(INPUT_GET, FILTER_DEFAULT);

        include_once './class/Usuario.php';