<?php
include "produto.php";
session_start();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $valor = $_POST['valor'];
    $imagem = $_POST['imagem'];

    $produto = new Produto($nome, $descricao, $valor, $imagem);

    if (!isset($_SESSION['produtos'])) {
        $_SESSION['produtos'] = [];
    }
    $_SESSION['produtos'][] = $produto;

    header('Location: mostra.php');
    exit;
} else {
    header('Location: novo.php');
    exit;
}
