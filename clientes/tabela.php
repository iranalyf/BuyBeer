 <?php 

	require_once "../config/BancoDados.php";

	$conexao = BancoDados::criar_conexao();

	$consulta = $conexao->query("select * from cliente");

	$consulta->execute();

	$clientes = $consulta->fetchAll();

?> 

<div class="card-panel">

	<h4 class="center-align">Clientes</h4>

	<table class="responsive-table highlight bordered">
	    <thead>
		    <tr>
		    	<th>Código</th>
		    	<th>Nome</th>
		    	<th>CPF</th>
		    	<th>Excluir</th>
		    </tr>
	    </thead>
	    	
	    <tbody>

	    	<?php foreach ($clientes as $p): ?>

	    		<tr>
	    			<td><?= $p["idCliente"] ?></td>
	    			<td><?= $p["nome"] ?></td>
	    			<td><?= $p["cpf"] ?></td>	    		
	    			<td> <a href="#tabela" onclick="excluir(<?=$m["idCliente"]?>)">Excluir</a> </td>

	    		</tr>


	    	<?php endforeach; ?>
	    	
	    </tbody>
	    
	</table>


</div>

<!-- <script type="text/javascript">

	function excluir(codigomedico){
		$.ajax({
			url : "../php/excluir_medico.php",
			method : "GET",
			data : { id : codigomedico},
			success : function(retorno){
				//mensagem retorno
				$("#tabela").load("tabela.php")
			}
		})
	}

</script> -->