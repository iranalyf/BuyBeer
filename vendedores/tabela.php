 <?php 

	require_once "../config/BancoDados.php";

	$conexao = BancoDados::criar_conexao();

	$consulta = $conexao->query("select * from vendedor");

	$consulta->execute();

	$vendedores = $consulta->fetchAll();

?> 

<div class="card-panel">

	<h4 class="center-align">Clientes</h4>

	<table class="responsive-table highlight bordered">
	    <thead>
		    <tr>
		    	<th>Código</th>
		    	<th>Nome</th>
		    	<th>Email</th>
		    	<th>Excluir</th>
		    </tr>
	    </thead>
	    	
	    <tbody>

	    	<?php foreach ($vendedores as $c): ?>

	    		<tr>
	    			<td><?= $c["idVendedor"] ?></td>
	    			<td><?= $c["nome"] ?></td>
	    			<td><?= $c["email"] ?></td>	    		
	    			<td> <a href="#tabela" onclick="excluir(<?=$c["idVendedor"]?>)">Excluir</a> </td>

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