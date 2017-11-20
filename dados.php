<?php 
include("conexao.php");


 //referenciar o DomPDF com namespace
  use Dompdf\Dompdf;



 $date1 =   $_POST['data1'];
 $date2 =   $_POST['data2'];


 $data1 =date_create($date1);
 $DataInicial= date_format($data1, 'Y-m-d');
       

 $data2 =date_create($date2);
 $DataFinal= date_format($data2, 'Y-m-d');
      
 $DataInicial1  = $DataInicial;
 $DataFinal2    = $DataFinal;
 $DataInicial3  = $DataInicial;
 $DataFinal3    = $DataFinal;
 $DataInicial4  = $DataInicial;
 $DataFinal4    = $DataFinal;

  $sqlM1 = "SELECT COUNT(data),AVG(classificacao1),AVG(classificacao2),AVG(classificacao3),AVG(classificacao4), AVG(classificacao5),AVG(classificacao6),AVG(classificacao7),AVG(classificacao8),AVG(classificacao9),AVG(classificacao10),AVG(classificacao11),AVG(classificacao12) FROM pesquisa WHERE data >= '{$DataInicial}'  AND data  <=   '{$DataFinal}';";

  $resultm1 = $conexão->query($sqlM1);
    if($resultm1 === FALSE) { 
        die(mysqli_error($conexão ));
     }
          
   $linham1 = mysqli_fetch_array($resultm1);
   $totalm1 = mysqli_num_rows($resultm1);
   $_SESSION['linhaM1'] = $linham1;
   $_SESSION['totalM1'] = $totalm1;

  $sqlM2 = "SELECT COUNT(data),AVG(classificacao5),AVG(classificacao6),AVG(classificacao7),AVG(classificacao8) FROM pesquisa WHERE data >= '{$DataInicial1}'  AND data  <= '{$DataFinal2}';";


  $resultm2 = $conexão->query($sqlM2);
    if($resultm2 === FALSE) { 
        die(mysqli_error($conexão ));
     }
          
   $linham2 = mysqli_fetch_array($resultm2);
   $totalm2 = mysqli_num_rows($resultm2);



  $sqlM3 = "SELECT COUNT(data),AVG(classificacao9),AVG(classificacao10),AVG(classificacao11),AVG(classificacao12) FROM pesquisa WHERE data >= '{$DataInicial3}'  AND data  <= '{$DataFinal3}';";


  $resultm3 = $conexão->query($sqlM3);
    if($resultm3 === FALSE) { 
        die(mysqli_error($conexão ));
     }
          
   $linham3 = mysqli_fetch_array($resultm3);
   $totalm3 = mysqli_num_rows($resultm3);



    $sqls = "SELECT  data, sugestoes  FROM pesquisa WHERE data >='{$DataInicial4}'  AND data  <=  '{$DataFinal4}';";
    $results = $conexão->query($sqls);
    $linhas = mysqli_fetch_assoc($results);
    $totals = mysqli_num_rows($results); 

    if(isset($_POST["gerarRelatorio"])){
    	include("relatorio.php");
    ?>

    <br/>
    <br/>
   <div class="tabelas">
   <h2>Média de atendimento por Telefone</h2>
   
   <div class="table-responsive">
    <table class="table table-striped table-bordered table-hover table-condensed">
        <thead>
        <tr>
            <th class="active">Total de Pesquisas Respondidas</th>        
            <th class="active">Competência dos funcionários</th>
            <th class="active">Confiabilidade e clareza das informações</th>
            <th class="active">Cumprimento de horários e prazos</th>
            <th class="active">Cordialidade do atendimento</th>
        </tr>
      
       <?php  
       if($totalm1 > 0) {
    		
    		do {

      ?>
        <tr>
                
            <td><?php echo $linham1['COUNT(data)'];?></td> 
            <td><?php echo number_format($linham1['AVG(classificacao1)'],2,",","");?></td>
            <td><?php echo number_format($linham1['AVG(classificacao2)'],2,",","");?></td>
            <td><?php echo number_format($linham1['AVG(classificacao3)'],2,",","");?></td>
            <td><?php echo number_format($linham1['AVG(classificacao4)'],2,",","");?></td>
             <?php		
    		
    		} while($linham1 = mysqli_fetch_assoc($resultm1));

    	} ?>   
        </tr>         


    </table> 
</div>

    <br/>
    <br/>


    <h2>Média de atendimento Presencial</h2>
    <div class="table-responsive">
      <table class="table table-striped table-bordered table-hover table-condensed">
        <thead>
        <tr>
            <th class="active">Total de Pesquisas Respondidas</th>        
            <th class="active">Aparência dos Funcionários</th>
            <th class="active">Tempo gasto para resolver o problema</th>
            <th class="active">Competência dos funcionários</th>
            <th class="active">Confiabilidade e clareza das informações</th>
        </tr>
      
       <?php  
       if($totalm2 > 0) {
        
        do {

      ?>
        <tr>
                
            <td><?php echo $linham2['COUNT(data)'];?></td> 
            <td><?php echo number_format($linham2['AVG(classificacao5)'],2,",","");?></td>
            <td><?php echo number_format($linham2['AVG(classificacao6)'],2,",","");?></td>
            <td><?php echo number_format($linham2['AVG(classificacao7)'],2,",","");?></td>
            <td><?php echo number_format($linham2['AVG(classificacao8)'],2,",","");?></td>
             <?php    
        
        } while($linham2 = mysqli_fetch_assoc($resultm2));

      } ?>   
        </tr>         


    </table> 
 </div>

  <br/>
    <br/>

<h2>Média de Suporte Online</h2>
<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover table-condensed">
        <thead>
        <tr>
            <th class="active">Total de Pesquisas Respondidas</th>        
            <th class="active">Cumprimento de horários e prazos</th>
            <th class="active">Aspecto Visual do Suporte</th>
            <th class="active">Funcionalidade do Sistema</th>
            <th class="active">Facilidade no acesso</th>
        </tr>
      
       <?php  
       if($totalm3 > 0) {
        
        do {

      ?>
        <tr>
                
            <td><?php echo $linham3['COUNT(data)'];?></td> 
            <td><?php echo number_format($linham3['AVG(classificacao9)'],2,",","");?></td>
            <td><?php echo number_format($linham3['AVG(classificacao10)'],2,",","");?></td>
            <td><?php echo number_format($linham3['AVG(classificacao11)'],2,",","");?></td>
            <td><?php echo number_format($linham3['AVG(classificacao12)'],2,",","");?></td>
             <?php    
        
        } while($linham3 = mysqli_fetch_assoc($resultm3));

      } ?>   
        </tr>         
    </table>
</div>
  <br/>

    <br/>
    <h2>Sugestões </h2>
<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover table-condensed">
        <thead>
        <tr>
            <th class="active">Data</th>        
            <th class="active">Sugestão</th>
        </tr>
        </thead>
        
       <?php  
       if($totals > 0) {
        
        do {

      ?>
        <tr>
            
            <td><?php 
                $date = date_create($linhas['data']);
                 date_format($date, 'd/m/Y');
                 echo date_format($date, 'd/m/Y');
            ?>
            </td>         
            <td><?php echo $linhas['sugestoes'];?></td> 

             <?php    
        
        } while($linhas = mysqli_fetch_assoc($results));

      } ?>   
        </tr>        
       
    </table> 
</div>
</div>


  <?php  include("rodape.php");} 

 if(isset($_POST["gerarRelatorioPDF"])){

  	  $dateInicial = date_create($DataInicial);
               

      $dateFinal = date_create($DataFinal);
               date_format($dateFinal, 'd/m/Y');

   $html = "
   <html>
    <head>
    <link type='text/css' href='/wp-content/themes/relatorio-pesquisa-satisfacao/css/resultado.css' rel='stylesheet' />
    <style type='text/css'>
       .topo{
              width: 800px;
          }

          .logo_pesquisa{
               width: 30%;
               float: left;
               margin-top: 25px;
          }

          .titulo-pesquisa{
            width: 70%; 
            float: right;
          }

          #relatorio-logo{
              margin-top: 35px;
          }

          .titulo h1{
              font-size: 22px;
              margin-left: 10px;
          }

          .periodo{
              border-bottom: 1px solid #ccc; 
              margin-bottom: 32px;
          }


          .periodo h2, .titulo-tabela-pesquisa h2{

              font-size: 16px;
          }

          body {
              margin: 40px  40px auto; 
              font-family: 'trebuchet MS', 'Lucida sans', Arial;
              font-size: 14px;
              color: #444;
          }

          table {
              *border-collapse: collapse; /* IE7 and lower */
              border-spacing: 0;
              width: 100%;    
          }

          h1,h2{
              text-transform: uppercase;
          }


          h2{
              font-size: 20px;
          }

          .bordered {
              
              margin-top: 20px;
              border: solid #45484B 1px;
              -moz-border-radius: 6px;
              -webkit-border-radius: 6px;
              border-radius: 6px;
              -webkit-box-shadow: 0 1px 1px #ccc; 
              -moz-box-shadow: 0 1px 1px #ccc; 
              box-shadow: 0 1px 1px #ccc;         
          }

          .bordered tr:hover {
              background: #fbf8e9;
              -o-transition: all 0.1s ease-in-out;
              -webkit-transition: all 0.1s ease-in-out;
              -moz-transition: all 0.1s ease-in-out;
              -ms-transition: all 0.1s ease-in-out;
              transition: all 0.1s ease-in-out;     
          }    
              
          .bordered td, .bordered th {
              border-left: 1px solid #ccc;
              border-top: 1px solid #ccc;
              padding: 10px;
              text-align: left;    
          }

          .bordered th {
              font-size: 12px;
              background-color: #162D57;
              -webkit-box-shadow: 0 1px 0 rgba(255,255,255,.8) inset; 
              -moz-box-shadow:0 1px 0 rgba(255,255,255,.8) inset;  
              box-shadow: 0 1px 0 rgba(255,255,255,.8) inset;        
              border-top: none;
              text-shadow: 0 1px 0 rgba(255,255,255,.5); 
              color: white;
          }

          .bordered td:first-child, .bordered th:first-child {
              border-left: none;
          }

          .bordered th:first-child {
              -moz-border-radius: 6px 0 0 0;
              -webkit-border-radius: 6px 0 0 0;
              border-radius: 6px 0 0 0;
          }

          .bordered th:last-child {
              -moz-border-radius: 0 6px 0 0;
              -webkit-border-radius: 0 6px 0 0;
              border-radius: 0 6px 0 0;
          }

          .bordered th:only-child{
              -moz-border-radius: 6px 6px 0 0;
              -webkit-border-radius: 6px 6px 0 0;
              border-radius: 6px 6px 0 0;
          }

          .bordered tr:last-child td:first-child {
              -moz-border-radius: 0 0 0 6px;
              -webkit-border-radius: 0 0 0 6px;
              border-radius: 0 0 0 6px;
          }

          .bordered tr:last-child td:last-child {
              -moz-border-radius: 0 0 6px 0;
              -webkit-border-radius: 0 0 6px 0;
              border-radius: 0 0 6px 0;
          }

      
      </style>
     

    </head>
  <body>
   <div class='container'>
		<div class='topo'>
			<div class='logo_pesquisa'><img src='img/alldoc.jpg' alt='Logo Alldoc'></div>
			<div class='titulo-pesquisa'></div><h1>Pesquisa de Satisfação</h1></div>
		</div>
		<br/>
		<br/>
		<br/>
		<br/>

		<div class='periodo'><h2><b>Período: </b>".date_format($dateInicial, 'd/m/Y'); 
		$html .=" a ".date_format($dateFinal, 'd/m/Y');

		$html.= "</h2>

   <b>VALOR DE REFERÊNCIA:</b>
       <ul> <li>5,00 ... Valor Máximo </li>
            <li>0,00 ... Valor Mínino</li>
       </ul>

    </div>
		
<br/>
<br/>

      <div class='titulo-tabela-pesquisa'><h2>Média de atendimento por Telefone</h2></div>
    <table class='bordered'>
        <thead>
        <tr>
            <th>Total de Pesquisas Respondidas</th>        
            <th>Competência dos funcionários</th>
            <th>Confiabilidade e clareza das informações</th>
            <th>Cumprimento de horários e prazos</th>
            <th>Cordialidade do atendimento</th>
        </tr>";
      
        
       if($totalm1 > 0) 
    		
    		do {

        $html .="<tr>";
                
            $html .="<td>".$linham1['COUNT(data)']; 
             
            $html .="</td>"; 
            $html .= "<td>". 
                number_format($linham1['AVG(classificacao1)'],2,",",""); 
            $html .="</td>";
            $html .="<td>".
                number_format($linham1['AVG(classificacao2)'],2,",","");
            $html .= "</td>";
            $html .= "<td>".
            	number_format($linham1['AVG(classificacao3)'],2,",","");
            $html .="</td>";
            $html .="<td>".
            	number_format($linham1['AVG(classificacao4)'],2,",","");
            $html .="</td>";
          
    		} while($linham1 = mysqli_fetch_assoc($resultm1));

    	$html .= "</tr>         
    </table>";


    $html .= "
    <br/>
    <br/>
    <br/>
  <div class='titulo-tabela-pesquisa'><h2>Média de atendimento Presencial</h2></div>
    <table class='bordered'>
        <thead>
        <tr>
            <th>Total de Pesquisas Respondidas</th>        
            <th>Aparência dos Funcionários</th>
            <th>Tempo gasto para resolver o problema</th>
            <th>Competência dos funcionários</th>
            <th>Confiabilidade e clareza das informações</th>
        </tr>";
      
        
       if($totalm2 > 0) 
    		
    		do {

        $html .="<tr>";
                
            $html .="<td>".$linham2['COUNT(data)']; 
             
            $html .="</td>"; 
            $html .= "<td>". 
                number_format($linham2['AVG(classificacao5)'],2,",",""); 
            $html .="</td>";
            $html .="<td>".
                number_format($linham2['AVG(classificacao6)'],2,",","");
            $html .= "</td>";
            $html .= "<td>".
            	number_format($linham2['AVG(classificacao7)'],2,",","");
            $html .="</td>";
            $html .="<td>".
            	number_format($linham2['AVG(classificacao8)'],2,",","");
            $html .="</td>";
          
    		} while($linham2 = mysqli_fetch_assoc($resultm2));

    	$html .= "</tr>         
    </table>";



    $html .= "
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
      <br/>
    <br/>
    <br/>
    <br/>
  <div class='titulo-tabela-pesquisa'> <h2>Média de Suporte Online</h2></div>
    <table class='bordered'>
        <thead>
        <tr>
            <th>Total de Pesquisas Respondidas</th>        
            <th>Cumprimento de horários e prazos</th>
            <th>Aspecto Visual do Suporte</th>
            <th>Funcionalidade do Sistema</th>
            <th>Facilidade no acesso</th>
        </tr>";
      
        
       if($totalm3 > 0) 
    		
    		do {

        $html .="<tr>";
                
            $html .="<td>".$linham3['COUNT(data)']; 
             
            $html .="</td>"; 
            $html .= "<td>". 
                number_format($linham3['AVG(classificacao9)'],2,",",""); 
            $html .="</td>";
            $html .="<td>".
                number_format($linham3['AVG(classificacao10)'],2,",","");
            $html .= "</td>";
            $html .= "<td>".
            	number_format($linham3['AVG(classificacao11)'],2,",","");
            $html .="</td>";
            $html .="<td>".
            	number_format($linham3['AVG(classificacao12)'],2,",","");
            $html .="</td>";
          
    		} while($linham3 = mysqli_fetch_assoc($resultm3));

    	$html .= "</tr>         
    </table>";


 $html .= "
    <br/>
    <br/>  <br/>
    <br/>
  
  <div class='titulo-tabela-pesquisa'> <h2>Sugestões Obtidas</h2></div>
    <table class='bordered'>
        <thead>
        <tr>
            <th>Data</th>        
            <th>Sugestão</th>
        </tr>";
      
        
       if($totals > 0) 
    		
    		do {

    			 $date = date_create($linhas['data']);
                 date_format($date, 'd/m/Y');
                 

            	$html .="<tr>";
                
            $html .="<td>".date_format($date, 'd/m/Y');
 ; 

             
            $html .="</td>"; 
            $html .= "<td>". $linhas['sugestoes'];
            $html .="</td>";
         
          
    		} while($linhas = mysqli_fetch_assoc($results));

    	$html .= "</tr>         
    </table>

    </body>
    </html>

    ";


      /* 

   $mpdf=new mPDF(); 
	 $mpdf->SetDisplayMode('fullpage');
	 $css = file_get_contents("/wp-content/themes/relatorio-pesquisa-satisfacao/css/resultado.css");
	 $mpdf->WriteHTML($css,1);
	 $mpdf->WriteHTML($html);
	 $mpdf->Output();

	 exit;
  } */


 
  // include autoloader
  require_once("dompdf/autoload.inc.php");

  //Criando a Instancia
  $dompdf = new DOMPDF();
  
  // Carrega seu HTML
  $dompdf->load_html(
      $html 
    );

  //Renderizar o html
  $dompdf->render();

  $dompdf->set_base_path('/wp-content/themes/relatorio-pesquisa-satisfacao/css/resultado.css');

  //Exibibir a página
  $dompdf->stream(
    "relatorio_pesquisa_satisfdacao_alldoc.pdf", 
    array(
      "Attachment" => true//Para realizar o download somente alterar para true
    )
  );

}

  ?>

