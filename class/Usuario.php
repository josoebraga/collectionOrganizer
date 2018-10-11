<?php

/**
 * Description of Usuario
 *
 * @author Josoé
 */
class Usuario {

    public $id;
    public $login;
    public $nome;
    
    public function construtor($id, $login, $nome) {
        $this->id = $id;
        $this->login = $login;
        $this->nome = $nome;
    }

    public function setId($id) {
        $this->id = $id;
    }
    public function getId() {
        return $this->id;
    }
    public function setLogin($login) {
        $this->login = $login;
    }
    public function getLogin() {
        return $this->login;
    }
    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function getNome() {
        return $this->nome;
    }
    
    
}
