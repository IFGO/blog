<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Usuario {
    private $id;
    private $nome;
    private $email;
    private $aniversario;
    private $apelido;
    private $senha;
    
    
    function __construct($id, $nome, $email, $aniversario, $apelido, $senha) {
        $this->id = $id;
        $this->nome = $nome;
        $this->email = $email;
        $this->aniversario = $aniversario;
        $this->apelido = $apelido;
        $this->senha = $senha;
    }

    
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getEmail() {
        return $this->email;
    }

    function getAniversario() {
        return $this->aniversario;
    }

    function getApelido() {
        return $this->apelido;
    }

    function getSenha() {
        return $this->senha;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setAniversario($aniversario) {
        $this->aniversario = $aniversario;
    }

    function setApelido($apelido) {
        $this->apelido = $apelido;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }


    
    
    
}

