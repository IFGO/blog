<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Comentario{
    private $id;
    private $id_artigo;
    private $autor;
    private $data;
    private $conteudo;
    
    function __construct($id, $id_artigo, $autor, $data, $conteudo) {
        $this->id = $id;
        $this->id_artigo = $id_artigo;
        $this->autor = $autor;
        $this->data = $data;
        $this->conteudo = $conteudo;
    }

    
    function getId() {
        return $this->id;
    }

    function getId_artigo() {
        return $this->id_artigo;
    }

    function getAutor() {
        return $this->autor;
    }

    function getData() {
        return $this->data;
    }

    function getConteudo() {
        return $this->conteudo;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setId_artigo($id_artigo) {
        $this->id_artigo = $id_artigo;
    }

    function setAutor($autor) {
        $this->autor = $autor;
    }

    function setData($data) {
        $this->data = $data;
    }

    function setConteudo($conteudo) {
        $this->conteudo = $conteudo;
    }


    
}