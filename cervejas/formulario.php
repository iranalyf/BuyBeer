
<div class="card-panel">

	<h4 class="center-align">Cadastro de Cliente</h4>
   
	<form id="cadastro">

		<div style="margin-left: 20px" >
		<label>Nome:</label>
		<input type="text" required name="nome" class="form-control" required="true" placeholder="Informe o nome da Cerveja">
		<br>
		
		<label>Quantidade Estoque:</label>
		<input type="number" required name="quantidade_estoque" class="form-control" required="true" placeholder="Informe a quantidade disponivel em estoque">
		<br>

	
		<label>Valor Unitário:</label>
		<input type="text" required name="valor_unitario" class="form-control" required="true" placeholder="Informe o valor Unitário de cada cerveja">
		<br>

		
		<label>Teor Alcoólico:</label>
		<input type="text" required name="teor_alcolico" class="form-control" required="true" placeholder="Informe a porcentagem do Teor Alcoólico">
		<br>

		<label>Código do Fabricante:</label>
		<input type="number" name="fabricante_id" required class="form-control" required="true" placeholder="Por favor Consulte o código do Fabricante e informe aqui!!!">
		<br>
		<a href="fabricante_cerveja">Consulta os Codigos do Fabricante de Cervejas</a>
		
		<button style="margin-left: 500px" class="btn btn-success" type="submit">Cadastar Nova Cerveja</button>
	</div>
	

	 	<div id="mensagem">

	  	</div>  

	</form>

</div>


<script type="text/javascript">

	$("#cadastro").submit(function(event){

		//Cancela o evento de submit do formulário
		event.preventDefault();

		//Envio via AJAX com JQuery
		$.ajax({

			url: "../repository/cadastro_cerveja.php",
			method : "POST",
			data : $("#cadastro").serialize(),
			success: function(retorno){
				$("#mensagem").html(retorno)
				$("#cadastro").trigger("reset")

				$("#tabela").load("tabela.php")
			
			}
		})


	})

</script>