 <?php 

	require_once "../config/BancoDados.php";

	$conexao = BancoDados::criar_conexao();

	$consulta = $conexao->query("select * from fabricante");

	$consulta->execute();

	$fabricantes = $consulta->fetchAll();

?> 

<div class="card-panel">

	<h4 class="center-align">Fabricantes</h4>

	<table class="responsive-table highlight bordered">
	    <thead>
		    <tr>
		    	<th>Código</th>
		    	<th>Nome</th>
		    	<th>Excluir</th>
		    </tr>
	    </thead>
	    	
	    <tbody>

	    	<?php foreach ($fabricantes as $p): ?>

	    		<tr>
	    			<td><?= $p["idFabricante"] ?></td>
	    			<td><?= $p["nome"] ?></td>    		
	    			<td> <a href="#tabela" onclick="excluir(<?=$m["idFabricante"]?>)">Excluir</a> </td>

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