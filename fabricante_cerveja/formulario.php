
<div class="card-panel">

	<h4 class="center-align">Cadastro Fabricante</h4>
   
	<form id="cadastro">

		<div style="margin-left: 20px" >
		<label>Nome:</label>
		<input type="text" required name="nome" class="form-control" required="true" placeholder="Informe seu nome Completo">
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

			url: "../repository/cadastro_fabricante_cerveja.php",
			method : "POST",
			data : $("#cadastro").serialize(),
			success: function(retorno){
				/*$("#mensagem").html(retorno)*/
				$("#cadastro").trigger("reset")

				$("#tabela").load("tabela.php")
			
			}
		})


	})

</script>