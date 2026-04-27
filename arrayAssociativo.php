<?php
    $usuario = [
        "nome" => "Simone",
        "email" => "simone@email.com",
        "perfil" => "Admin",
        "cargo" => "Professora",
        "curso" => "DS"
    ];

    echo $usuario["nome"];

    foreach($usuario as $chave => $valor){
        echo "<p>$chave: $valor</p>";
    }

    echo "<table border=1>";
    echo "<tr><th>Chave</th> <th>Valor</th></tr>";

    foreach ($usuario as $chave => $valor) {
        echo "<tr>";
        echo "<td>$chave</td>";
        echo "<td>$valor</td>";
        echo "<tr>";
    }

    echo "</table>";
?>