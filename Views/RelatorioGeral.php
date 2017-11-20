<?php include("../Views/Main.php");?>
				<!-- Relatorio Geral -->
					<section id="relatorio" class="two">
						<div class="container">

							<header>
								<h2>Relatório Geral</h2>
							</header>

							<form method="post" action="../Model/dados.php">
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
										<input type="submit" value="Gerar Relatório" />
									</div>
								</div>
							</form>

						</div>
					</section>

<?php include("../Views/Footer.php");?>