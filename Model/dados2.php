<?php
    include("../Controller/conexao.php");
   
    require_once('../Model/DAOrelatorioMediaEmpresa.php');

    $date1 = $_POST['data1'];
    $date2 = $_POST['data2'];
    $empresa = $_POST['empresa'];
    echo $empresa."efkqmwek";


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




?>