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
    
    echo count($usuarios) . "<br>";

    $perfis = ["Admin", "User"];
    if(in_array("Admin", $perfis)){
        echo "Perfil valido!";
    } else {
        echo "Perfil invalido!";
    }

    echo "<hr>";

    $nomes = ["Maria"];
    array_push($nomes, "Simone");
    print_r($nomes);

    $numeros = [10,20,30,5,8];

    $maiores = array_filter($numeros, function($numero){
        return $numero > 10;
    });
    print_r($maiores);
    
    echo "<hr>";

    $precos = [10,20,30];

    $precosComTaxa = array_map(function($preco){
        return $preco * 1.1;
    }, $precos);
    print_r($precosComTaxa);
?>