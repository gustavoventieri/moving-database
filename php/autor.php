<?php
include_once 'conectar2.php';

class alunos 
{
    private $Cod_autor;
    private $Nome_autor;
    private $Sobrenome;
    private $email;
    private $nasc;
    private $conn;

    public function getMatricula(){
        return $this-> Cod_autor;
    }
    public function setMatricula($ca){
        $this-> Cod_autor = $ca;
    }
    public function getNome(){
        return $this->Nome_autor;
    }
    public function setNome($name){
        $this-> Nome_autor = $name;
    }
    public function getEndereço(){
        return $this->Sobrenome;
    }
    public function setEndereço($sob){
        $this-> Sobrenome = $sob;
    }
    public function getCidade(){
        return $this->email;
    }
    public function setCidade($em){
        $this-> email = $em;
    }
    public function getCodcurso(){
        return $this->nasc;
    }
    public function setCodcurso($na){
        $this-> nasc = $na;
    }
    function listar()
    {
        try
        {
            $this-> conn = new Conectar();
            $sql = $this->conn->query("select * from autor order by Cod_autor");
            $sql->execute();
            return $sql->fetchAll();
            $this->conn = null;   
        }
        catch(PDOException $exc){
            echo 'Erro ao consultar a consulta'. $exc->getMessage();
        }
    }

}


?>