<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ComentarioDAO{
    private $conexao;
    
    function __construct($conexao) {
        $this->conexao = $conexao;
    }
    function inserirComentario(Comentario $comentario) {
         
        $strSQL = "INSERT INTO blg_comentario(comentario_autor,comentario_data,comentario_conteudo,artigo_id) "
                . "VALUES ('".$comentario->getAutor()."','".$comentario->getData()."','".$comentario->getConteudo()."',"
                . "'".$comentario->getId_artigo()."')";
        
        echo $strSQL;
        
        mysqli_query($this->conexao,$strSQL);
        
        

    }
    
    function atualizaComentario(Comentario $comentario) {

        $strSQL = "UPDATE blg_comentario SET comentario_autor= '".$comentario->getAutor()."',comentario_data = '".$comentario->getData()."', '"
                . "comentario_conteudo = '".$comentario->getConteudo()."'";
              
        
        echo $strSQL;
        mysqli_query($this->conexao,$strSQL);
    }
    
    function excluirComentario($idComentario) {

        $strSQL = "DELETE from blg_comentario where comentario_id=".$idComentario;
              
        mysqli_query($this->conexao,$strSQL);
        echo $strSQL;
    }
    
    function listarArtigos() {
        $sql = "SELECT * FROM blg_comentario";
        $resultado = mysqli_query($this->conexao, $sql);
        $lista = array();
        while($registro = $resultado->fetch_assoc()) {
            $lista[] = $registro;
        }
        return $lista;
    }
    
}

