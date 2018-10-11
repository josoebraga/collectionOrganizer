<?php

#http://rberaldo.com.br/pdo-mysql/
#include_once './conecta.php';
include './includesPadrao.php';

$login = $post['login'];
$senha = sha1($post['senha']);

/*
  $query = "select * from mis.usuario where login = 4583";
  $result = $pdo->query( $query );
  $rows = $result->fetchAll();
 */
#print_r( $rows );
#print_r( $rows[0] );

@$query = $pdo->prepare("select * from comics.usuarios where login = '$login'");
@$query->execute();

for ($i = 0; $escrever = $query->fetch(); $i++) {
    @$senhaRet = $escrever['senha'];
    @$id = $escrever['id'];
    @$login = $escrever['login'];
    @$nome = $escrever['nome'];
}

    @$usuario = new Usuario();  
    @$usuario->construtor($id, $login, $nome);

if (@$senha == @$senhaRet) {
    @$_SESSION['id'] = $usuario->getId();
    @$_SESSION['login'] = $usuario->getLogin();
    @$_SESSION['nome'] = $usuario->getNome();
        @header('location:main.php');
} else {
    unset($pdo);
    unset($query);
    session_destroy();
    ?>
    <script>
        document.location.replace('login.php');
    </script>

    <?php

}
#print_r($_SESSION); 
unset($pdo);
unset($query);
?>