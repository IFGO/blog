<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class TagDAO{
    private $conexao;
    
    function __construct($conexao) {
        $this->conexao = $conexao;
    }
    function inserirTag(Tag $tag) {
         
        $strSQL = "INSERT INTO blg_tag(tag_nome) "."VALUES ('".$tag->getNome()."')"; 
        
        echo $strSQL;
        
        mysqli_query($this->conexao,$strSQL);
        
        

    }
    
   
    
    function excluirTag($idTag) {

        $strSQL = "DELETE from blg_tag where usuario_id=".$idTag;
              
        mysqli_query($this->conexao,$strSQL);
        echo $strSQL;
    }
    
    function listarTags() {
        $sql = "SELECT * FROM blg_tag";
        $resultado = mysqli_query($this->conexao, $sql);
        $lista = array();
        while($registro = $resultado->fetch_assoc()) {
            $lista[] = $registro;
        }
        return $lista;
    }
    
}

