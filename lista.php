<?php
    $nomes = ["João", "Maria", "Pedro", "Ana"];
    $novoNome = $_GET["nome"] ?? null;

    if ($novoNome !== null) {
        $nomes[] = $novoNome;
    }
?>
    <h2>Lista de Nomes</h2>
    <ul>
        <?php foreach ($nomes as $nome): ?>
            <li><?= $nome ?></li>
        <?php endforeach; ?>
    </ul>
 
    <form>
        <input type="text" name="nome" placeholder="Digite um nome">
        <button type="submit">Adicionar</button>
    </form>