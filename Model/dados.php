<?php 
include("../Controller/conexao.php");
require_once('../Model/DAOrelatorioMediaGeral.php');
require_once('../Model/DAOrelatorioMediaEmpresa.php');
use Dompdf\Dompdf;
//referenciar o DomPDF com namespace

if(($_POST["rel"])=='0'){?>

          <script>
           alert('Por favor, escolha um relatorio. ');
    
         </script> 
<?php

        include("../Views/relatorio.php");
}



if(isset($_POST["gerarRelatorio"]) && (($_POST["rel"])=='1')){
    	
    $date1 = $_POST['data1'];
    $date2 = $_POST['data2'];


    $data1 = date_create($date1);
    $DataInicial = date_format($data1, 'Y-m-d');
        

    $data2 = date_create($date2);
    $DataFinal = date_format($data2, 'Y-m-d');


    $relatorioMediaGeral = new relatorioMediaGeral();
    $quantidade = $relatorioMediaGeral -> quantidadeRespostas($DataInicial, $DataFinal);
    $mediaP1AtendimentoTel = $relatorioMediaGeral -> MediaP1AtendimentoTel($DataInicial, $DataFinal);
    $mediaP2AtendimentoTel = $relatorioMediaGeral -> MediaP2AtendimentoTel($DataInicial, $DataFinal);
    $mediaP3AtendimentoTel = $relatorioMediaGeral -> MediaP3AtendimentoTel($DataInicial, $DataFinal);
    $mediaP4AtendimentoTel = $relatorioMediaGeral -> MediaP4AtendimentoTel($DataInicial, $DataFinal);

    $mediaP1AtendimentoPresen = $relatorioMediaGeral -> MediaP1AtendimentoPresen($DataInicial, $DataFinal);
    $mediaP2AtendimentoPresen = $relatorioMediaGeral -> MediaP2AtendimentoPresen($DataInicial, $DataFinal);
    $mediaP3AtendimentoPresen = $relatorioMediaGeral -> MediaP3AtendimentoPresen($DataInicial, $DataFinal);
    $mediaP4AtendimentoPresen = $relatorioMediaGeral -> MediaP4AtendimentoPresen($DataInicial, $DataFinal);

    $mediaP1SuporteOnline = $relatorioMediaGeral ->MediaP1SuporteOnline($DataInicial, $DataFinal);
    $mediaP2SuporteOnline = $relatorioMediaGeral ->MediaP2SuporteOnline($DataInicial, $DataFinal);
    $mediaP3SuporteOnline = $relatorioMediaGeral ->MediaP3SuporteOnline($DataInicial, $DataFinal);
    $mediaP4SuporteOnline = $relatorioMediaGeral ->MediaP4SuporteOnline($DataInicial, $DataFinal);

    $dataSugestao = $relatorioMediaGeral ->DataSugestao($DataInicial, $DataFinal);
    $sugestao = $relatorioMediaGeral ->Sugestao($DataInicial, $DataFinal);

    include("../Views/MediaGeral.php");

   } 

   if(isset($_POST["gerarRelatorio"]) && (($_POST["rel"])=='2')){
    $date1 = $_POST['data1'];
    $date2 = $_POST['data2'];
    $empresa = $_POST['empresa'];
    


    $data1 = date_create($date1);
    $DataInicial = date_format($data1, 'Y-m-d');
    $DataInicio = date_format($data1, 'd/m/Y');
        echo $DataInicio;

    $data2 = date_create($date2);
    $DataFinal = date_format($data2, 'Y-m-d');
    $DataFim = date_format($data2, 'd/m/Y');

    $relatorioMediaEmpresa = new relatorioMediaGeralEmpresa();
    $Empresa = $relatorioMediaEmpresa -> empresa($DataInicial, $DataFinal, $empresa );
    $quantidade = $relatorioMediaEmpresa -> quantidadeRespostas($DataInicial, $DataFinal, $empresa );
    $mediaP1AtendimentoTel = $relatorioMediaEmpresa -> MediaP1AtendimentoTel($DataInicial, $DataFinal,  $empresa);
    $mediaP2AtendimentoTel = $relatorioMediaEmpresa -> MediaP2AtendimentoTel($DataInicial, $DataFinal,  $empresa);
    $mediaP3AtendimentoTel = $relatorioMediaEmpresa -> MediaP3AtendimentoTel($DataInicial, $DataFinal,  $empresa);
    $mediaP4AtendimentoTel = $relatorioMediaEmpresa -> MediaP4AtendimentoTel($DataInicial, $DataFinal,  $empresa);

    $mediaP1AtendimentoPresen = $relatorioMediaEmpresa -> MediaP1AtendimentoPresen($DataInicial, $DataFinal,  $empresa);
    $mediaP2AtendimentoPresen = $relatorioMediaEmpresa -> MediaP2AtendimentoPresen($DataInicial, $DataFinal,  $empresa);
    $mediaP3AtendimentoPresen = $relatorioMediaEmpresa -> MediaP3AtendimentoPresen($DataInicial, $DataFinal,  $empresa);
    $mediaP4AtendimentoPresen = $relatorioMediaEmpresa -> MediaP4AtendimentoPresen($DataInicial, $DataFinal,  $empresa);

    $mediaP1SuporteOnline = $relatorioMediaEmpresa ->MediaP1SuporteOnline($DataInicial, $DataFinal,  $empresa);
    $mediaP2SuporteOnline = $relatorioMediaEmpresa ->MediaP2SuporteOnline($DataInicial, $DataFinal,  $empresa);
    $mediaP3SuporteOnline = $relatorioMediaEmpresa ->MediaP3SuporteOnline($DataInicial, $DataFinal,  $empresa);
    $mediaP4SuporteOnline = $relatorioMediaEmpresa ->MediaP4SuporteOnline($DataInicial, $DataFinal,  $empresa);

    /*$dataSugestao = $relatorioMediaGeral ->DataSugestao($DataInicial, $DataFinal, $empresa);
    $sugestao = $relatorioMediaGeral ->Sugestao($DataInicial, $DataFinal,  $empresa);*/

    
    include("../Views/MediaPorEmpresa.php");


   }


   
    /*if(isset($_POST["gerarRelatorioPDF"])){

    $date1 = $_POST['data1'];
    $date2 = $_POST['data2'];


    $data1 = date_create($date1);
    $DataInicial = date_format($data1, 'Y-m-d');
        

    $data2 = date_create($date2);
    $DataFinal = date_format($data2, 'Y-m-d');


    $relatorioMediaGeral = new relatorioMediaGeral();
    $quantidade = $relatorioMediaGeral -> quantidadeRespostas($DataInicial, $DataFinal);
    $mediaP1AtendimentoTel = $relatorioMediaGeral -> MediaP1AtendimentoTel($DataInicial, $DataFinal);
    $mediaP2AtendimentoTel = $relatorioMediaGeral -> MediaP2AtendimentoTel($DataInicial, $DataFinal);
    $mediaP3AtendimentoTel = $relatorioMediaGeral -> MediaP3AtendimentoTel($DataInicial, $DataFinal);
    $mediaP4AtendimentoTel = $relatorioMediaGeral -> MediaP4AtendimentoTel($DataInicial, $DataFinal);

    $mediaP1AtendimentoPresen = $relatorioMediaGeral -> MediaP1AtendimentoPresen($DataInicial, $DataFinal);
    $mediaP2AtendimentoPresen = $relatorioMediaGeral -> MediaP2AtendimentoPresen($DataInicial, $DataFinal);
    $mediaP3AtendimentoPresen = $relatorioMediaGeral -> MediaP3AtendimentoPresen($DataInicial, $DataFinal);
    $mediaP4AtendimentoPresen = $relatorioMediaGeral -> MediaP4AtendimentoPresen($DataInicial, $DataFinal);

    $mediaP1SuporteOnline = $relatorioMediaGeral ->MediaP1SuporteOnline($DataInicial, $DataFinal);
    $mediaP2SuporteOnline = $relatorioMediaGeral ->MediaP2SuporteOnline($DataInicial, $DataFinal);
    $mediaP3SuporteOnline = $relatorioMediaGeral ->MediaP3SuporteOnline($DataInicial, $DataFinal);
    $mediaP4SuporteOnline = $relatorioMediaGeral ->MediaP4SuporteOnline($DataInicial, $DataFinal);

    $dataSugestao = $relatorioMediaGeral ->DataSugestao($DataInicial, $DataFinal);
    $sugestao = $relatorioMediaGeral ->Sugestao($DataInicial, $DataFinal);
     include("../Views/MediaGeralPDF.php");
    }*/

/*
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
              *border-collapse: collapse;
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

}*/



if(isset($_POST["gerarRelatorioPDF"])){
     $date1 = $_POST['data1'];
    $date2 = $_POST['data2'];


    $data1 = date_create($date1);
    $DataInicial = date_format($data1, 'Y-m-d');
        

    $data2 = date_create($date2);
    $DataFinal = date_format($data2, 'Y-m-d');


    $relatorioMediaGeral = new relatorioMediaGeral();
    $quantidade = $relatorioMediaGeral -> quantidadeRespostas($DataInicial, $DataFinal);
    $mediaP1AtendimentoTel = $relatorioMediaGeral -> MediaP1AtendimentoTel($DataInicial, $DataFinal);
    $mediaP2AtendimentoTel = $relatorioMediaGeral -> MediaP2AtendimentoTel($DataInicial, $DataFinal);
    $mediaP3AtendimentoTel = $relatorioMediaGeral -> MediaP3AtendimentoTel($DataInicial, $DataFinal);
    $mediaP4AtendimentoTel = $relatorioMediaGeral -> MediaP4AtendimentoTel($DataInicial, $DataFinal);

    $mediaP1AtendimentoPresen = $relatorioMediaGeral -> MediaP1AtendimentoPresen($DataInicial, $DataFinal);
    $mediaP2AtendimentoPresen = $relatorioMediaGeral -> MediaP2AtendimentoPresen($DataInicial, $DataFinal);
    $mediaP3AtendimentoPresen = $relatorioMediaGeral -> MediaP3AtendimentoPresen($DataInicial, $DataFinal);
    $mediaP4AtendimentoPresen = $relatorioMediaGeral -> MediaP4AtendimentoPresen($DataInicial, $DataFinal);

    $mediaP1SuporteOnline = $relatorioMediaGeral ->MediaP1SuporteOnline($DataInicial, $DataFinal);
    $mediaP2SuporteOnline = $relatorioMediaGeral ->MediaP2SuporteOnline($DataInicial, $DataFinal);
    $mediaP3SuporteOnline = $relatorioMediaGeral ->MediaP3SuporteOnline($DataInicial, $DataFinal);
    $mediaP4SuporteOnline = $relatorioMediaGeral ->MediaP4SuporteOnline($DataInicial, $DataFinal);

    $dataSugestao = $relatorioMediaGeral ->DataSugestao($DataInicial, $DataFinal);
    $sugestao = $relatorioMediaGeral ->Sugestao($DataInicial, $DataFinal);

  	$dateInicial = date_create($DataInicial);
               

      $dateFinal = date_create($DataFinal);
               date_format($dateFinal, 'd/m/Y');

   $html = "<html>
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
              *border-collapse: collapse;
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
      
        


            $html .="<tr>";
                
            $html .="<td>".$quantidade; 
             
            $html .="</td>"; 
            $html .= "<td>". $mediaP1AtendimentoTel;
            $html .="</td>";
            $html .="<td>".
                 $mediaP2AtendimentoTel;
            $html .= "</td>";
            $html .= "<td>".
            	 $mediaP3AtendimentoTel;
            $html .="</td>";
            $html .="<td>".
            	 $mediaP4AtendimentoTel;
            $html .="</td>";
          
    	

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
      
    

        $html .="<tr>";
                
            $html .="<td>".$quantidade ;
             
            $html .="</td>"; 
            $html .= "<td>". 
                $mediaP1AtendimentoPresen;
            $html .="</td>";
            $html .="<td>".
               $mediaP2AtendimentoPresen;
            $html .= "</td>";
            $html .= "<td>".
            	$mediaP3AtendimentoPresen;
            $html .="</td>";
            $html .="<td>".
            	$mediaP4AtendimentoPresen;
            $html .="</td>";
        

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
      
   

        $html .="<tr>";
                
            $html .="<td>".$quantidade;
             
            $html .="</td>"; 
            $html .= "<td>". 
                $mediaP1SuporteOnline;
            $html .="</td>";
            $html .="<td>".
                $mediaP2SuporteOnline;
            $html .= "</td>";
            $html .= "<td>".
            	$mediaP3SuporteOnline;
            $html .="</td>";
            $html .="<td>".
            	$mediaP4SuporteOnline;
            $html .="</td>";
          
    		

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
   

 
  // include autoloader
  require_once("../dompdf/autoload.inc.php");

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

