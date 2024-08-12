<?php

class Livro{
    
    private string $autor;
    private string $titulo;
    private int $idAutor;

    public function __construct($autor, $titulo, $idAutor)
    {
        $this->autor = $autor;
        $this->titulo = $titulo;
        $this->idAutor = $idAutor;
    }

    public function getAutor(){
        $this->autor;
    }

    public function getTitulo(){
        $this->titulo;
    }

    public function get_idAutor(){
        $this->idAutor;
    }
}

?>