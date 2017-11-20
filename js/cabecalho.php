
 <!DOCTYPE html>
<html>
<head>
	<title>Relatório</title>

	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   
    <link rel="stylesheet" href="css/style.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="/wp-content/themes/relatorio-pesquisa-satisfacao/css/resultado.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

	<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<!-- Bootstrap Date-Picker Plugin -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>

	<script type="text/javascript">


		$(document).ready(function(){
		var date_input=$('input[name="date1"]'); 
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		var options={
			format: 'dd/mm/yyyy',
			container: container,
			todayHighlight: false,
			autoclose: true,
		};
		date_input.datepicker(options);
		})

	</script> 

	<script type="text/javascript">


		$(document).ready(function(){
		var date_input=$('input[name="date2"]'); 
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		var options={
			format: 'dd/mm/yyyy',
			container: container,
			todayHighlight: false,
			autoclose: true,
		};
		date_input.datepicker(options);
		})

	</script> 

	<script type='text/javascript'>
		$(document).ready(function(){
		// Define as variaveis de acordo com a quantidade da página // opcional.

		$('#inicio').click(function(){
		// Define a página que vai ser aberta, quando usuario clickar.
		var pagina = "resultado.php";
			$('#conteudo').load(pagina);	

		});

		});
	</script> 

	<script type='text/javascript'>
		$(document).ready(function(){
		// Define as variaveis de acordo com a quantidade da página // opcional.

		$('limpar').click(function(){
		// Define a página que vai ser aberta, quando usuario clickar.
		var pagina = "relatorio.php";
			$('limpar').load(pagina);	

		});


		});
	</script> 

</head>
<body>

<div class='container'>
	
<div class="row">
		<div class='col-sm-4'>
			<img src='/wp-content/themes/relatorio-pesquisa-satisfacao/img/alldoc.jpg' id='relatorio-logo' alt='Logo Alldoc'>
		</div>
		<div class='col-sm-8'>
			<h1>Pesquisa de Satisfação</h1>
		</div>
	</div>

	<br/>
	<br/>
	<br/>
	<br/>

	<div class="row">
		<div class="col-md-12">
			<div class="well well-sm">
				<form class="form-inline" form action="/wp-content/themes/relatorio-pesquisa-satisfacao/dados.php"  method="POST">
					<fieldset>

						<div class="form-group">
							<span class="col-md-2 text-center">
								<label for="periodo">Periodo:</label>
							</span>
							<div class="col-md-3">  
								<input 
								id="dinicio" 
								class="form-control" 
								type="date" 
								value="<?php echo (isset($_POST['data1']))?$_POST['data1']:'';?>" 
								name ="data1" 
								required>  
							</div>
							<span class="col-md-1 text-center">
								<label for="aaa">a</label>
							</span>
							<div class="col-md-3">  
								<input 
								id="dfim" 
								class="form-control" 
								type="date" 
								name ="data2" 
								value="<?php echo (isset($_POST['data2']))?$_POST['data2']:'';?>" 
								required>  
							</div>

							<div class="col-md-2  text-center">  
								<button 
								type="submit" 
								id= "inicio" 
								name="gerarRelatorio" 
								class="btn btn-primary">
									Gerar Relatório
								</button>
							</div>

							<div class="col-md-1 text-center">  
								<button 
								type="submit" 
								class="btn btn-success" 
								name="gerarRelatorioPDF">
									PDF
								</button>
							</div>
						</div>
					</fieldset>
				</form>			    
			</div>
		</div>
	</div>

    






