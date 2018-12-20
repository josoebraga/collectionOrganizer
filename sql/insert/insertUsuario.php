<?php

$post = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$get = filter_input_array(INPUT_GET, FILTER_DEFAULT);

include '../../class/CriarUsuario.php';
include '../../conecta.php';

@$novoUsuario = new CriarUsuario();

#insert comics.usuarios_tipo (tipo_de_usuario) values ('Usuário');      

$novoUsuario->setNome($post['nome']);
$novoUsuario->setLogin($post['login']);
$novoUsuario->setEMail($post['email']);
$novoUsuario->setSenha(sha1($post['pass1']));
$novoUsuario->setCpf($post['cpf']);
$novoUsuario->setDataDeNascimento($post['dtNasc']);
$novoUsuario->setIdTipoDeUsuario($post['tipoDeUsuario']);


try {
    $nome = $novoUsuario->getNome();
} catch (Exception $ex) {
    $ex = "Erro ao gravar o nome";
}
try {
    $login = $novoUsuario->getLogin();
} catch (Exception $ex) {
    $ex = "Erro ao gravar o login";
}
try {
    $email = $novoUsuario->getEMail();
} catch (Exception $ex) {
    $ex = "Erro ao gravar o e-mail";
}
try {
    $senha = $novoUsuario->getSenha();
} catch (Exception $ex) {
    $ex = "Erro ao gravar a senha";
}
try {
    $cpf = $novoUsuario->getCpf();
} catch (Exception $ex) {
    $ex = "Erro ao gravar o CPF";
}
try {
    $dataNascimento = $novoUsuario->getDataDeNascimento();
} catch (Exception $ex) {
    $ex = "Erro ao gravar a data de nascimento";
}
try {
    $idTipoDeUsuario = $novoUsuario->getIdTipoDeUsuario();
} catch (Exception $ex) {
    $ex = "Erro ao gravar o tipo de usuário";
}
echo 
$insertCreateUser = "insert comics.usuarios 
(login, senha, nome, dataNascimento, cpf, email, id_tipo_de_usuario)
values
('$login', '$senha', '$nome', '$dataNascimento', '$cpf', '$email', $idTipoDeUsuario)
"
        
?>
