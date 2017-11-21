<?php
    include("../Controller/conexao.php");
   
    require_once('../Model/DAOrelatorioMediaEmail.php');

    $date1 = $_POST['data1'];
    $date2 = $_POST['data2'];
    $email = $_POST['email'];
    

    $data1 = date_create($date1);
    $DataInicial = date_format($data1, 'Y-m-d');
    $DataInicio = date_format($data1, 'd/m/Y');


    $data2 = date_create($date2);
    $DataFinal = date_format($data2, 'Y-m-d');
    $DataFim = date_format($data2, 'd/m/Y');

    $relatorioMediaEmail = new relatorioMediaGeralEmail();
    $empresa = $relatorioMediaEmail -> empresa($DataInicial, $DataFinal, $email );
    $quantidade = $relatorioMediaEmail -> quantidadeRespostas($DataInicial, $DataFinal, $email );
    $mediaP1AtendimentoTel = $relatorioMediaEmail -> MediaP1AtendimentoTel($DataInicial, $DataFinal,  $email);
    $mediaP2AtendimentoTel = $relatorioMediaEmail -> MediaP2AtendimentoTel($DataInicial, $DataFinal,  $email);
    $mediaP3AtendimentoTel = $relatorioMediaEmail -> MediaP3AtendimentoTel($DataInicial, $DataFinal,  $email);
    $mediaP4AtendimentoTel = $relatorioMediaEmail -> MediaP4AtendimentoTel($DataInicial, $DataFinal,  $email);

    $mediaP1AtendimentoPresen = $relatorioMediaEmail -> MediaP1AtendimentoPresen($DataInicial, $DataFinal,  $email);
    $mediaP2AtendimentoPresen = $relatorioMediaEmail -> MediaP2AtendimentoPresen($DataInicial, $DataFinal,  $email);
    $mediaP3AtendimentoPresen = $relatorioMediaEmail -> MediaP3AtendimentoPresen($DataInicial, $DataFinal,  $email);
    $mediaP4AtendimentoPresen = $relatorioMediaEmail -> MediaP4AtendimentoPresen($DataInicial, $DataFinal,  $email);

    $mediaP1SuporteOnline = $relatorioMediaEmail ->MediaP1SuporteOnline($DataInicial, $DataFinal,  $email);
    $mediaP2SuporteOnline = $relatorioMediaEmail ->MediaP2SuporteOnline($DataInicial, $DataFinal,  $email);
    $mediaP3SuporteOnline = $relatorioMediaEmail ->MediaP3SuporteOnline($DataInicial, $DataFinal,  $email);
    $mediaP4SuporteOnline = $relatorioMediaEmail ->MediaP4SuporteOnline($DataInicial, $DataFinal,  $email);


    
    $linha =  $relatorioMediaEmail ->linha($DataInicial, $DataFinal,  $email);
    $result = $relatorioMediaEmail ->result($DataInicial, $DataFinal,  $email);
    $total =  $relatorioMediaEmail ->total($DataInicial, $DataFinal,  $email);
    /*$dataSugestao = $relatorioMediaGeral ->DataSugestao($DataInicial, $DataFinal, $email);
    $sugestao = $relatorioMediaGeral ->Sugestao($DataInicial, $DataFinal,  $email);*/

    
    include("../Views/MediaPorEmail.php");




?>