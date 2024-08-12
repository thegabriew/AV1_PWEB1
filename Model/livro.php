<?php

class Livro {

    private int $idLivro;
    private string $titulo;
    private string $autor;

    public function __construct($autor, $titulo, $idLivro) {
        $this->autor = $autor;
        $this->titulo = $titulo;
        $this->idLivro = $idLivro;
    }

    //gets

    public function getAutor(): String {
        return $this->autor;
    }

    public function getTitulo(): String {
        return $this->titulo;   
    }

    public function get_idAutor(): int {
        return $this->idLivro;
    }

    //sets

    public function setAutor(String $autor): void {
        $this -> autor = $autor;
    }

    public function setTitulo(String $titulo): void {
        $this -> titulo = $titulo;
    }
}

?>