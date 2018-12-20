<?php

$pdo = new PDO('mysql:host=localhost;dbname=comics', 'root', '');

$qsTipoDeusuario = "select id_tipo_de_usuario, tipo_de_usuario from comics.usuarios_tipo;";

$query = $pdo->prepare($qsTipoDeusuario);
$query->execute();

for ($i = 0; $escrever = $query->fetch(); $i++) {
    @$idTipoDeUsuario[$i] = $escrever['id_tipo_de_usuario'];
    @$tipoDeUsuario[$i] = $escrever['tipo_de_usuario'];
}

