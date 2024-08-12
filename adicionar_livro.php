<?php
include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = $_POST['titulo'];
    $ano = $_POST['ano'];

    $sql = "INSERT INTO livro (titulo, ano) VALUES (?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$titulo, $ano]);

    echo "Livro adicionado com sucesso!";
}
?>