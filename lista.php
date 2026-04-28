<?php
    session_start();
    $nomes = $_SESSION["nomes"] ?? null;

    $novoNome = $_GET["nome"] ?? null;
    if ($novoNome) {
        $nomes[] = $novoNome;
        $_SESSION["nomes"] = $nomes;
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