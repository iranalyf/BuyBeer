 <?php 

	require_once "../config/BancoDados.php";

	$conexao = BancoDados::criar_conexao();

	$consulta = $conexao->query("select * from cerveja");

	$consulta->execute();

	$cervejas = $consulta->fetchAll();

?> 

<div class="card-panel">

	<h3 class="center-align">Cervejas Cadastradas</h3>

	<table class="responsive-table highlight bordered">
	    <thead>
		    <tr>
		    	<th>Código</th>
		    	<th>Nome</th>
		    	<th>Estoque</th>
		    	<th>Valor Unitario</th>
		    	<th>Teor Alcoólico</th>
		    	<th>Código Categoria</th>
		    	<th>Excluir</th>
		    </tr>
	    </thead>
	    	
	    <tbody>

	    	<?php foreach ($cervejas as $p): ?>

	    		<tr>
	    			<td><?= $p["idCerveja"] ?></td>
	    			<td><?= $p["nome"] ?></td>
	    			<td><?= $p["quantidade_estoque"] ?></td>
	    			<td><?= $p["valor_unitario"] ?></td>
	    			<td><?= $p["teor_alcolico"] ?></td>
	    			<td><?= $p["fabricante_id"] ?></td>	    		
	    			<td> <a href="#tabela" onclick="excluir(<?=$m["idCerveja"]?>)">Excluir</a> </td>

	    		</tr>


	    	<?php endforeach; ?>
	    	
	    </tbody>
	    
	</table>

	<br><br><br><br><br><br><br><br>


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