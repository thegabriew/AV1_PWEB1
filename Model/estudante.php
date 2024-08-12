<?php 

class Estudante{

    private string $nome;
    private int $idAluno;

    public function __construct($nome, $idAluno)
    {
        $this->nome = $nome;
        $this->idAluno = $idAluno;
    }

    public function getNome(){
        $this->nome;
    }

    public function get_idAluno()
    {
        
        $this-> idAluno;
    }
}

?>