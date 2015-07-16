<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ArtigoDAO{
    private $conexao;
    
    function __construct($conexao) {
       $this->conexao = $conexao;
    }
    function inserirArtigo(Artigo $artigo) {
         
        $strSQL = "INSERT INTO blg_artigo(artigo_titulo,artigo_corpo,artigo_datamodificacao,artigo_datacriacao,usuario_id) "
                . "VALUES ('".$artigo->getTitulo()."','".$artigo->getCorpo()."','".$artigo->getData_modificacao()."','"
                .$artigo->getData_criacao()."', ".$artigo->getId_usuario()."')"; 
        
        echo $strSQL;
        
        mysqli_query($this->conexao,$strSQL);
        
        

    }
    
    function atualizaArtigo(Artigo $artigo) {

        $strSQL = "UPDATE blg_artigo SET artigo_titulo= '".$artigo->getTitulo()."',artigo_corpo = '".$artigo->getCorpo()."', '"
                . "artigo_datamodificacao = '".$artigo->getData_modificacao()."',artigo_datacriacao = '".$artigo->getData_criacao()."'";
              
        
        echo $strSQL;
        mysqli_query($this->conexao,$strSQL);
    }
    
    function excluirArtigo($idArtigo) {

        $strSQL = "DELETE from blg_artigo where artigo_id=".$idArtigo;
              
        mysqli_query($this->conexao,$strSQL);
        echo $strSQL;
    }
    
    function getArtigoPorId($id) {
        $sql = "SELECT * FROM blg_artigo where artigo_id=".$id;
        $resultado = mysqli_query($this->conexao, $sql);
        $row =  mysqli_fetch_assoc($resultado);
        return $row;
    }
    
    function listarArtigos() {
        $sql = "SELECT * FROM blg_artigo";
        $resultado = mysqli_query($this->conexao, $sql);
        $lista = array();
        while($registro = $resultado->fetch_assoc()) {
            $lista[] = $registro;
        }
        return $lista;
    }
    
}

