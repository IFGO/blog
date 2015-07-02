<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Artigo{
    private $id;
    private $id_usuario;
    private $titulo;
    private $corpo;
    private $data_modificacao;
    private $data_criacao;
    
    function __construct($id, $id_usuario, $titulo, $corpo, $data_modificacao, $data_criacao) {
        $this->id = $id;
        $this->id_usuario = $id_usuario;
        $this->titulo = $titulo;
        $this->corpo = $corpo;
        $this->data_modificacao = $data_modificacao;
        $this->data_criacao = $data_criacao;
    }

    
    function getId() {
        return $this->id;
    }

    function getId_usuario() {
        return $this->id_usuario;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getCorpo() {
        return $this->corpo;
    }

    function getData_modificacao() {
        return $this->data_modificacao;
    }

    function getData_criacao() {
        return $this->data_criacao;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setId_usuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setCorpo($corpo) {
        $this->corpo = $corpo;
    }

    function setData_modificacao($data_modificacao) {
        $this->data_modificacao = $data_modificacao;
    }

    function setData_criacao($data_criacao) {
        $this->data_criacao = $data_criacao;
    }


}
