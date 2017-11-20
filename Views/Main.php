<?php 
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

?>


<!DOCTYPE HTML>
<html>
	<head>
		<title>ALLDOC</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="../assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="../assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="../assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="../assets/css/ie9.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
			<div id="header">

				<div class="top">

					<!-- Logo -->
						<div id="logo">
							<h1 id="title">Pesquisa de Satisfação</h1>
							<p>Área Administrativa</p>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="Top.php" id="top-link" class="skel-layers-ignoreHref"><span class="icon fa-home">Home</span></a></li>
								<li><a href="RelatorioGeral.php" id="relatorio-link" class="skel-layers-ignoreHref"><span class="icon fa-th">Relatório Geral</span></a></li>
								<li><a href="RelatorioEmpresa.php" id="empresa-link" class="skel-layers-ignoreHref"><span class="icon fa-user">Relatório Por Empresa</span></a></li>
								<li><a href="RelatorioEmail.php" id="contact-link" class="skel-layers-ignoreHref"><span class="icon fa-envelope">Relatório por email</span></a></li>
							</ul>
						</nav>

				</div>

				<div class="bottom">			
				</div>

			</div>

		<!-- Main --> 
			<div id="main">

				


				



