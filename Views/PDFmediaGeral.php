<?php
require_once("../Model/dados.php");
include("../Views/relatorio.php");
require_once("../Model/DAOrelatorioMediaGeral.php");

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
                
            $html .="<td>".$quantidade; 
             
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
      
        
       if($total > 0) 
    		
    		do {

    			 $date = date_create($linha['data']);
                 date_format($date, 'd/m/Y');
                 

            	$html .="<tr>";
                
            $html .="<td>".date_format($date, 'd/m/Y');
 ; 

             
            $html .="</td>"; 
            $html .= "<td>". $linha['sugestoes'];
            $html .="</td>";
         
          
    		} while($linhas = mysqli_fetch_assoc($result));

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


?>