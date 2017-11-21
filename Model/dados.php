<?php 
include("../Controller/conexao.php");
require_once('../Model/DAOrelatorioMediaGeral.php');
require_once('../Model/DAOrelatorioMediaEmpresa.php');
use Dompdf\Dompdf;
//referenciar o DomPDF com namespace

    	
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

   ?>