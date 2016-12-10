<?php

	$nome = $_POST['nome'];
	$cpf = $_POST['cpf'];

	require "../config/BancoDados.php";

	$conexao = BancoDados::criar_conexao();

	$comando = $conexao->prepare("insert into cliente(nome,cpf) values (:nome, :cpf)");

	$comando->bindParam(":nome",$nome);
	$comando->bindParam(":cpf",$cpf);

	$comando->execute();

	echo "<div class='card-panel teal lighten-2'>Salvo com sucesso</div>";


?>