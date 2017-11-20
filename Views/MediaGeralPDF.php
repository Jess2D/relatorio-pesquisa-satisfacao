<?php 
require_once("../Model/dados.php");
// include autoloader


require_once("../Model/DAOrelatorioMediaGeral.php");
use Dompdf\Dompdf;



$dateInicial = date_create($DataInicial);
$dateFinal = date_create($DataFinal);
 date_format($dateFinal, 'd/m/Y');

	  $dateInicial = date_create($DataInicial);
               

      $dateFinal = date_create($DataFinal);
               date_format($dateFinal, 'd/m/Y');


$html="
kokkokoko";
  

  require_once("dompdf/autoload.inc.php");
  //Criando a Instancia
  $dompdf = new DOMPDF();
  
  // Carrega seu HTML
  $dompdf->load_html(
      $html 
    );

  //Renderizar o html
  $dompdf->render();

  //Exibibir a página
  $dompdf->stream(
    "relatorio_pesquisa_satisfdacao_alldoc.pdf", 
    array(
      "Attachment" => true//Para realizar o download somente alterar para true
    )
  );

?>
