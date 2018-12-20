<?php

/**
 * Description of criarUsuario
 *
 * @author Josoé
 */
class CriarUsuario {
    
    public $login;
    public $senha;
    public $nome;
    public $dataDeNascimento;
    public $cpf;
    public $eMail;
    public $idTipoDeUsuario;
 /*   
    function __construct($login, $senha, $nome, $dataDeNascimento, $cpf, $eMail) {
        $this->login = $login;
        $this->senha = $senha;
        $this->nome = $nome;
        $this->dataDeNascimento = $dataDeNascimento;
        $this->cpf = $cpf;
        $this->eMail = $eMail;
    }
*/
    function getLogin() {
        return $this->login;
    }

    function getSenha() {
        return $this->senha;
    }

    function getNome() {
        return $this->nome;
    }

    function getDataDeNascimento() {
        return $this->dataDeNascimento;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getEMail() {
        return $this->eMail;
    }

    function getIdTipoDeUsuario() {
        return $this->idTipoDeUsuario;
    }

    function setLogin($login) {
        $this->login = $login;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setDataDeNascimento($dataDeNascimento) {
        $this->dataDeNascimento = $dataDeNascimento;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setEMail($eMail) {
        $this->eMail = $eMail;
    }

    function setIdTipoDeUsuario($idTipoDeUsuario) {
        $this->idTipoDeUsuario = $idTipoDeUsuario;
    }

    
    
}
