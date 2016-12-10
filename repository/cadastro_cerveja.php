<?php

	$nome 				= $_POST['nome'];
	$quantidade_estoque = $_POST['quantidade_estoque'];
	$valor_unitario 	= $_POST['valor_unitario'];
	$teor_alcolico 		= $_POST['teor_alcolico'];
	$fabricante_id 		= $_POST['fabricante_id'];


	require "../config/BancoDados.php";

	$conexao = BancoDados::criar_conexao();

	$comando = $conexao->prepare("INSERT INTO cerveja (nome, quantidade_estoque, valor_unitario, teor_alcolico, fabricante_id) VALUES (:nome, :quantidade_estoque, :valor_unitario, :teor_alcolico, :fabricante_id )");

	$comando->bindParam(":nome", $nome);
	$comando->bindParam(":quantidade_estoque", $quantidade_estoque);
	$comando->bindParam(":valor_unitario", $valor_unitario);
	$comando->bindParam(":teor_alcolico", $teor_alcolico);
	$comando->bindParam(":fabricante_id", $fabricante_id);

	$comando->execute();

	echo "<div class='card-panel teal lighten-2'>Salvo com sucesso</div>";
?>

