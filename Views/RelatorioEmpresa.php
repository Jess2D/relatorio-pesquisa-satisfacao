<?php include("../Views/Main.php");?>
<!-- Relatorio Por Empresa -->
					<section id="empresa" class="three">
						<div class="container">

							<header>
								<h2>Relatório por empresa</h2>
							</header>
							<form method="post" action="../Model/dados2.php">
								<div class="row">
									<div class="6u 12u$(mobile)">
										<label for="dataInicio">Data Inicio</label>
										<input 
											id="dinicio" 
											type="date" 
											value="<?php echo (isset($_POST['data1']))?$_POST['data1']:'';?>" 
											name ="data1" 
											required> 
									</div>
									<div class="6u$ 12u$(mobile)">
										<label for="dataFim">Data fim</label>
										<input 
											id="dfim" 
											class="form-control" 
											type="date" 
											name ="data2" 
											placeholder="Data Fim" 
											value="<?php echo (isset($_POST['data2']))?$_POST['data2']:'';?>" 
											required> 
									</div>
									<div class="12u$">
										<label for="relatorio">Empresa</label>
                                        <select class="form-control" name= "empresa" >
                                                <?php if($totalm1 > 0) {		
                                                        do {       
                                                
                                                        ?>
                                                            <option  value="<?php echo $linham1['empresa'];?>"><?php echo  $linham1['empresa'] ;?></option>
                                                    
                                                        
                                                    <?php	
                                                        
                                                        }  
                                                        while($linham1 = mysqli_fetch_assoc($resultm1));?>
                                        </select>

                                                <?php } ?>
									</div>
									<div class="12u$">
										<input type="submit" value="Gerar Relatório" />
									</div>
								</div>
							</form>

						</div>
					</section>
<?php include("../Views/Footer.php");?>