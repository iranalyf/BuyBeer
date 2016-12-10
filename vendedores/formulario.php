
<div class="card-panel">

	<h4 class="center-align">Cadastro de Vendedores</h4>
   
	<form id="cadastro">

		<div style="margin-left: 20px" >
		<label>Nome:</label>
		<input type="text" required name="nome" class="form-control" required="true" placeholder="Informe seu nome Completo">
		<br>

		<label>E-Mail:</label>
		<input type="text" name="email" required class="form-control" required="true" placeholder="Informe seu E-Mail">
		<br>

		<label>Senha:</label>
		<input type="password" required name="senha" class="form-control" required="true" placeholder="Informe sua Senha">
		<br>

		<button class="btn btn-success" type="submit">Salvar</button>
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

			url: "../repository/cadastro_vendedor.php",
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