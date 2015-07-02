<?php
class Conexao {
    private $conexao;
    private $usuario="root"; //u142881537_brog
    private $senha="";//brogao@321
    private $host="localhost";//brogao.96.lt
    private $db="ifg_blog";//u142881537_brog 

   
    function __construct() {
        $this->conexao = mysqli_connect($this->host, $this->usuario, $this->senha, $this->db);
        if(!$this->conexao) { // 0, "" ou NULL = false
            echo "Erro ao conectar com o banco de dados. ";
            echo mysqli_errno($this->conexao);
        }else{
            echo "Conectado com o banco!!";
        }
    }
    
    function __inserirUsuario() {
        
    }
    
    function __destruct() {
        mysqli_close($this->conexao);
    }
    
}