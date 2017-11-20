<?php	

	session_start();	
	
	if ( $_SESSION['logado'] != "SIM") {		
	    header("Location: /wp-content/themes/relatorio-pesquisa-satisfacao/Views/nao_logado.php");	
	    
	 }?>