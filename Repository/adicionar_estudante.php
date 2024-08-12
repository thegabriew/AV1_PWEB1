<?php
include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $idAluno = $_POST['idAluno'];

    $sql = "INSERT INTO estudante (nome, idAluno) VALUES (?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$nome, $idAluno]);

    echo "Estudante adicionado com sucesso!";
}
?>