<?php

Class Autor {
    private int $idAutor;
    private String $nome;
    private String $nacionalidade;

    public function __construct($idAutor, $nome, $nacionalidade) {
        $this -> idAutor = $idAutor;
        $this -> nome = $nome;
        $this -> nacionalidade = $nacionalidade;
    }
    
    //gets

    public function getIdAutor(): int {
        return $this -> idAutor;
    }

    public function getNomeAutor(): String {
        return $this -> nome;
    }

    public function getNacionalidade(): String {
        return $this -> nacionalidade;
    }

    //sets

    public function setNomeAutor(String $nome): void {
        $this -> nome = $nome;
    }

    public function setNacionalidade(String $nacionalidade): void {
        $this -> nacionalidade = $nacionalidade;
    }
}

?>