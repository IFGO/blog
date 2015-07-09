<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class TagArtigoDAO{
    private $conexao;
    
    function __construct($conexao) {
        $this->conexao = $conexao;
    }
    function inserirTagArtigo(Artigo $artigo,Tag $tag) {
         
        $strSQL = "INSERT INTO blg_artigo_tag(artigo_id,tag_id)"
                . "VALUES ('".$artigo->getId()."','".$tag->getId()."'"; 
        
        echo $strSQL;
        
        mysqli_query($this->conexao,$strSQL);
        
        

    }
    
  
  
    
    
}

