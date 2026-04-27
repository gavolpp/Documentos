<?php
    $usuarios = [
        [
            "nome" => "Simone",
            "perfil" => "Admin",
        ],
        [
            "nome" => "Maria",
            "perfil" => "User",
        ],
        [
            "nome" => "João",
            "perfil" => "User",
        ],
    ];

    foreach($usuarios as $usuario){
        echo "<p>Nome: " . $usuario["nome"] . "</p>";
        echo "<p>Perfil: " . $usuario["perfil"] . "</p>";
        echo "<hr>";
    }
?>