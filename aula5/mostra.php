<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Mostrando Produtos</title>
</head>

<body>

    <?php
    include "produto.php";
    session_start();

    if (!isset($_SESSION['produtos']) || empty($_SESSION['produtos'])) {
        echo "<div class='container mt-5'>Nenhum produto cadastrado.</div>";
        exit;
    }

    echo '<div class="container mt-5">';
    echo '<div class="row">';


    foreach ($_SESSION['produtos'] as $produto) {
        echo '<div class="col-md-4 mb-4">';
        $produto->exibirInformacoes();
        echo '</div>';
    }

    echo '</div>';
    echo '</div>';
    ?>
</body>

</html>