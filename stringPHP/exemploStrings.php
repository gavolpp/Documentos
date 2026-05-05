<?php
    $texto = "  cotil - unicamp   ";
    echo "<h2>Texto original</h2>";
    echo "-" . $texto . "-";
    echo "<br><br>";

    echo "<h3>Removendo espaços</h3>";
    $textolimpo = trim($texto);
    echo "Sem espaços: " . $textolimpo;
    echo "<br><br>";

    echo "<h3>Convertendo para maiúsculas</h3>";
    echo "Maiúsculas: " . strtoupper($textolimpo);
    echo "<br><br>";

    echo "<h3>Convertendo para minúsculas</h3>";
    echo "Minúsculas: " . strtolower($textolimpo);
    echo "<br><br>";

    echo "<h3>Tamanho do texto</h3>";
    echo "Tamanho: " . strlen($textolimpo);
    echo "<br><br>";

    echo "<h3>Buscar por uma palavra</h3>";
    $pos = strpos($textolimpo, "unicamp");
    if ($pos !== false) {
        echo "A palavra 'unicamp' foi encontrada na posição: " . $pos;
    } else {
        echo "A palavra 'unicamp' não foi encontrada.";
    }
    echo "<br><br>";

    echo "<h3>Substituição</h3>";
    echo str_replace("cotil", "COTIL", $textolimpo);
    echo "<br><br>";

    echo "concatenação: " . $textolimpo . " - " . "Curso de Análise e Desenvolvimento de Sistemas";

    echo "interpolação: $textolimpo - Curso de Análise e Desenvolvimento de Sistemas";

    echo "<h3>htmlspecialchars</h3>";
    $html = "<h1>Olá, mundo!</h1>";
    echo "Sem htmlspecialchars: " . $html;
    echo "<br>";
    echo "Com htmlspecialchars: " . htmlspecialchars($html);