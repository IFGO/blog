<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class UsuarioDAO{
    private $conexao;
    
    function __construct($conexao) {
        $this->conexao = $conexao;
    }
    function inserirUsuario(Usuario $usuario) {
         
        $strSQL = "INSERT INTO blg_usuario(usuario_nome,usuario_email,usuario_aniversario,usuario_apelido,usuario_senha) "
                . "VALUES ('".$usuario->getNome()."','".$usuario->getEmail()."','".$usuario->getAniversario()."','"
                .$usuario->getApelido()."','".$usuario->getSenha()."')"; 
        
        echo $strSQL;
        
        mysqli_query($this->conexao,$strSQL);
        
        

    }
    
    function atualizaUsuario(Usuario $usuario) {

        $strSQL = "UPDATE blg_usuario SET usuario_nome= '".$usuario->getNome()."',usuario_email = '".$usuario->getEmail()."', "
                . "usuario_aniversario = '".$usuario->getAniversario()."',usuario_apelido = '".$usuario->getApelido()."', usuario_senha = '".$usuario->getSenha()."' "
                . "where usuario_id=".$usuario->getId()."";
              
        
        echo $strSQL;
        mysqli_query($this->conexao,$strSQL);
    }
    
    function excluirUsuario($idUsuario) {

        $strSQL = "DELETE from blg_usuario where usuario_id=".$idUsuario;
              
        mysqli_query($this->conexao,$strSQL);
        echo $strSQL;
    }
    
    function listarUsuarios() {
        $sql = "SELECT * FROM blg_usuario";
        $resultado = mysqli_query($this->conexao, $sql);
        $lista = array();
        while($registro = $resultado->fetch_assoc()) {
            $lista[] = $registro;
        }
        return $lista;
    }
    
}

