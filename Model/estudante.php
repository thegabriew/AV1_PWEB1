<?php 
class Estudante {

    private string $nome;
    private int $idade;
    private int $idEstudante;

    public function __construct($nome, $idEstudante, $idade) {
        $this -> nome = $nome;
        $this -> idade = $idade;
        $this -> idEstudante = $idEstudante;
    }

    //gets

    public function getNomeAluno(): String {
        return $this ->nome;
    }

    public function get_idEstudante(): int {
        return $this -> idEstudante;
    }

    public function getIdadeAluno(): int {
        return $this -> idade;
    }

    // sets

    public function setNomeAluno(String $nome): void{
        $this -> nome = $nome;
    }
}

?>