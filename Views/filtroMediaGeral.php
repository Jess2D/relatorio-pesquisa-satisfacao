<?php 	
 include("../Controller/conexao.php");
        $sqlM1 = "SELECT id, empresa, email FROM pesquisa";
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

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form  form action="../Model/dados2.php"  method="POST">
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

                        <div class="form-row">
						<div  class="form-group col-md-12 "  id="hiddenDiv" >
						<label for="relatorio">Empresa</label>
							<select class="form-control" name= "empresa" >
								<?php if($totalm1 > 0) {		
										do {       
										
										?>
											<option  value="<?php echo $linham1['empresa'];?>"><?php echo $linham1['empresa'] ;?></option>
									
										
									<?php	
										
										}  
										while($linham1 = mysqli_fetch_assoc($resultm1));?>
							</select>

								<?php } ?>
						
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

    </form>
    
</body>
</html>