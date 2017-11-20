<?php require("../Controller/trava.php");	
 include("../Controller/conexao.php");
        $sqlM1 = "SELECT empresa, email FROM pesquisa";
        $resultm1 = $conexão->query($sqlM1);
            if($resultm1 === FALSE) { 
                die(mysqli_error($conexão ));
            }
     
        $linham1 = mysqli_fetch_array($resultm1);
        $totalm1 = mysqli_num_rows($resultm1);


		$sqlM2 = "SELECT email FROM pesquisa";
        $resultm2 = $conexão->query($sqlM2);
            if($resultm2 === FALSE) { 
                die(mysqli_error($conexão ));
            }
     
        $linham2 = mysqli_fetch_array($resultm2);
        $totalm2 = mysqli_num_rows($resultm2);


?>
<!DOCTYPE html>
<html>
<head>
	<title>Relatório</title>

	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="../css/resultado.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="/wp-content/themes/relatorio-pesquisa-satisfacao/css/resultado.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<!-- Bootstrap Date-Picker Plugin -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>

	<script type="text/javascript">
		$("#id_tipo_contacto").on('change', function(){
    $('.formulario').hide();
    $('#' + this.value).show();
});
	</script>



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

		$('#emai').click(function(){
		// Define a página que vai ser aberta, quando usuario clickar.
		var pagina = "escolhaEmail.php";
			$('#conteudo').load(pagina);	

		});

		});
	</script> 

<script type="text/javascript">
    function optionCheck(){
        var option = document.getElementById("options").value;
        if(option == "2"){
            document.getElementById("hiddenDiv").style.visibility ="visible";
        }
        if(option == "3"){
			document.getElementById("hiddenDiv2").style.visibility ="visible"; 
        }
    }
</script>




</head>
<body>

<div class='container'>
	
<div class="row">
		<div class='col-sm-4'>
			<img src='../img/alldoc.jpg' id='relatorio-logo' alt='Logo Alldoc'>
		</div>
		<div class='col-sm-8'>
			<h1>Pesquisa de Satisfação</h1>
		</div>
	</div>

	<br/>
	<br/>
	<br/>
	<br/>
			<div class="well well-sm">
				<form  form action="../Model/dados.php"  method="POST">
					<fieldset>
					  	<div class="form-row">
							<div class="form-group col-md-4 ">
								<label for="dataInicio">Data Inicio</label>
									<input 
									id="dinicio" 
									class="form-control" 
									type="date" 
									value="<?php echo (isset($_POST['data1']))?$_POST['data1']:'';?>" 
									name ="data1" 
									required>  
							</div>
							<div class="form-group col-md-4">
								<label for="dataFim">Data fim</label>
									<input 
									id="dfim" 
									class="form-control" 
									type="date" 
									name ="data2" 
									value="<?php echo (isset($_POST['data2']))?$_POST['data2']:'';?>" 
									required> 
							</div>
							<div class="form-group col-md-4">
								<label for="relatorio">Relatório</label>
								<select class="form-control" id="options" name= "rel" onchange="optionCheck()" required>
									<option  value="0" <?php echo (isset($_POST['rel']) and $_POST['rel'] == '0') ? ' selected' : ''; ?>>Selecione alguma das opções</option>
									<option  value="1" <?php echo (isset($_POST['rel']) and $_POST['rel'] == '1') ? ' selected' : ''; ?>>Relatório Geral</option>
									<option  value="2" <?php echo (isset($_POST['rel']) and $_POST['rel'] == '2') ? ' selected' : ''; ?>>Relatório por Empresa</option>
									<option  value="3" <?php echo (isset($_POST['rel']) and $_POST['rel'] == '3') ? ' selected' : ''; ?>>Relatório por E-mail</option>
								</select>
							</div>
						</div>
						<br/>
						<br/>
						<br/>
						<br/>

						<div class="form-row">
						<div  class="form-group col-md-12 "  id="hiddenDiv" style="visibility:hidden;">
						<label for="relatorio">Empresa</label>
								<select class="form-control" name= "empresa" >
						   <?php   if($totalm1 > 0) {		
								do {       
								$empresa =  $linham1['empresa'];
								?>
									<option  value="<?php $linham1['empresa'];?>"><?php echo $empresa ;?></option>
							
								
							<?php	
								
								}  
								while($linham1 = mysqli_fetch_assoc($resultm1));?>
								</select>

								<?php } ?>
						
						</div>

						<div  class="form-group col-md-12 "  id="hiddenDiv2" style="visibility:hidden;">
						<label for="relatorio">Email</label>
								<select class="form-control" name= "email" >
						   <?php   if($totalm2 > 0) {		
								do {       
								
								?>
									<option  value="<?php $linham2['email'];?>"><?php echo $email = $linham2['email'];?></option>
							
								
							<?php	
								
								}  
								while($linham2 = mysqli_fetch_assoc($resultm2));?>
								</select>

								<?php } ?>
						<br/>
						<br/>
						<br/>
						<br/>
						</div>
					

						</div>

						
						<div class="form-row">
							<div class="col-md-2">  
								<button 
								type="submit" 
								id= "inicio" 
								name="gerarRelatorio" 
								class="btn btn-primary">
									Gerar Relatório
								</button>
							</div>

							<div class="col-md-2">  
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
	


    






