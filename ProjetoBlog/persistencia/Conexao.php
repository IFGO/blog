<?php
class Conexao {
    private $conexao;
    private $usuario="blog"; //u142881537_brog
    private $senha="blog123";//brogao@321
    private $host="104.236.106.180";//104.236.106.180
    private $db="blog";//u142881537_brog 

   
    function __construct() {
        $this->conexao = mysqli_connect($this->host, $this->usuario, $this->senha, $this->db);
        if(!$this->conexao) { // 0, "" ou NULL = false
           // echo "Erro ao conectar com o banco de dados. ";
          //  echo mysqli_errno($this->conexao);
        }else{
          //  echo "Conectado com o banco!!";
        }
    }
    
    function getConection() {
        return $this->conexao;
    }
    
    function __destruct() {
        mysqli_close($this->conexao);
    }
    
}