<?php include("../Views/Main.php");?>
				<!-- Relatório por email-->
					<section id="contact" class="four">
						<div class="container">

							<header>
								<h2>Relatório por e-mail de Usuário</h2>
							</header>

							<form method="post" action="#">
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
										<label for="relatorio">Usuário</label>
										  <select class="form-control" name= "email" >
                                                <?php if($totalm2 > 0) {		
                                                        do {       
                                                
                                                        ?>
                                                            <option  value="<?php echo $linham2['email'];?>"><?php echo  $linham2['email'] ;?></option>
                                                    
                                                        
                                                    <?php	
                                                        
                                                        }  
                                                        while($linham2 = mysqli_fetch_assoc($resultm2));?>
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