<?php
include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $idAutor = $_POST['idAutor'];
    $nome = $_POST['nome'];
    $nacionalidade = $_POST['nacionalidade'];

    $sql = "INSERT INTO autor (idAutor, nome, nacionalidade) VALUES (?, ?,?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$idAutor, $nome, $nacionalidade]);

    echo "Autor adicionado com sucesso!";
}
?>