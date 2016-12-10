<?php

	$nome = $_POST['nome'];

	require "../config/BancoDados.php";

	$conexao = BancoDados::criar_conexao();

	$comando = $conexao->prepare("INSERT INTO fabricante (nome) values (:nome)");

	$comando->bindParam(":nome", $nome);

	$comando->execute();

	echo "<div class='card-panel teal lighten-2'>Salvo com sucesso</div>";

?>