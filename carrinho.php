<?php
    $produtos = [
        [
            "nome" => "Notebook",
            "preco" => 3000,
        ],
        [
            "nome" => "Smartphone",
            "preco" => 2000,
        ],
        [
            "nome" => "Tablet",
            "preco" => 1500,
        ],
    ];

    $total = 0;
    foreach($produtos as $produto) {
        echo "<p>Produto: " . $produto["nome"] . "</p>";
        echo "<p>Preço: R$ " . $produto["preco"] . "</p>";
        echo "<hr>";

        $total += $produto["preco"];
    }
    echo "<p><strong>Total: R$ " . $total . "</strong></p>";
?>