<?php
include_once 'conectar2.php';

class livro
{
    private $cod_livro;
    private $Titulo;
    private $Categoria;
    private $ISBN;
    private $Idioma;
    private $QntdPag;
    private $conn;

    public function getCod_livro(){
        return $this-> cod_livro;
    }
    public function setCod_livro($cl){
        $this-> cod_livro = $cl;
    }
    public function getTitulo(){
        return $this-> Titulo;
    }
    public function setTitulo($ti){
        $this-> Titulo = $ti;
    }
    public function getCategoria(){
        return $this-> Categoria;
    }
    public function setCategoria($ca){
        $this-> Categoria = $ca;
    }
    public function getISBN(){
        return $this-> ISBN;
    }
    public function setISBN($isb){
        $this-> ISBN = $isb;
    }
    public function getIdioma(){
        return $this-> Idioma;
    }
    public function setCoddisc3($idi){
        $this-> Idioma = $idi;
    }
    public function getQntdPag(){
        return $this-> QntdPag;
    }
    public function setQntdPag($qntd){
        $this-> QntdPag = $qntd;
    }


    function listar()
    {
        try
        {
            $this-> conn = new Conectar();
            $sql = $this->conn->query("select * from livro order by Cod_livro");
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