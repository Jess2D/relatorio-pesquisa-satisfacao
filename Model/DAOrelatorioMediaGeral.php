<?php 

class relatorioMediaGeral{

//Consultas realizadas ao Banco de Dados


    function quantidadeRespostas ($DataInicial, $DataFinal)
    {
        include("../Controller/conexao.php");
        $sqlM1 = "SELECT COUNT(data) FROM pesquisa WHERE data >= '{$DataInicial}'  AND data  <=  '{$DataFinal}';";
        $resultm1 = $conexão->query($sqlM1);
            if($resultm1 === FALSE) { 
                die(mysqli_error($conexão ));
            }
        $quantidadeRespostas = 0;      
        $linham1 = mysqli_fetch_array($resultm1);
        $totalm1 = mysqli_num_rows($resultm1);
        if($totalm1 > 0) {		
    		do {       
            $quantidadeRespostas = $linham1['COUNT(data)']; } 
            
            while($linham1 = mysqli_fetch_assoc($resultm1));

    	    } 
        return $quantidadeRespostas;
         }





    function MediaP1AtendimentoTel ($DataInicial, $DataFinal)
        {
        include("../Controller/conexao.php");
        $sqlM1 = "SELECT AVG(classificacao1) FROM pesquisa WHERE data >= '{$DataInicial}'  AND data  <=  '{$DataFinal}';";
        $resultm1 = $conexão->query($sqlM1);
            if($resultm1 === FALSE) { 
                die(mysqli_error($conexão ));
            }
        $quantidadeRespostas = 0;      
        $linham1 = mysqli_fetch_array($resultm1);
        $totalm1 = mysqli_num_rows($resultm1);

        if($totalm1 > 0) {		
    		do {       
            $quantidadeRespostas = number_format($linham1['AVG(classificacao1)'],2,",",""); } 
            
            while($linham1 = mysqli_fetch_assoc($resultm1));

    	} 
        return $quantidadeRespostas;
        }





    function MediaP2AtendimentoTel ($DataInicial, $DataFinal)
        {
        include("../Controller/conexao.php");
        $sqlM1 = "SELECT AVG(classificacao2) FROM pesquisa WHERE data >= '{$DataInicial}'  AND data  <=  '{$DataFinal}';";
        $resultm1 = $conexão->query($sqlM1);
            if($resultm1 === FALSE) { 
                die(mysqli_error($conexão ));
            }
        $quantidadeRespostas = 0;      
        $linham1 = mysqli_fetch_array($resultm1);
        $totalm1 = mysqli_num_rows($resultm1);
            if($totalm1 > 0) {		
                do {       
                $quantidadeRespostas = number_format($linham1['AVG(classificacao2)'],2,",",""); }         
                while($linham1 = mysqli_fetch_assoc($resultm1));
            } 
            return $quantidadeRespostas;
        }





    function MediaP3AtendimentoTel ($DataInicial, $DataFinal)
    {
    include("../Controller/conexao.php");
    $sqlM1 = "SELECT AVG(classificacao3) FROM pesquisa WHERE data >= '{$DataInicial}'  AND data  <=   '{$DataFinal}';";
    $resultm1 = $conexão->query($sqlM1);
                if($resultm1 === FALSE) { 
                    die(mysqli_error($conexão ));
                }
            $quantidadeRespostas = 0;      
            $linham1 = mysqli_fetch_array($resultm1);
            $totalm1 = mysqli_num_rows($resultm1);

            if($totalm1 > 0) {		
                do {       
                $quantidadeRespostas = number_format($linham1['AVG(classificacao3)'],2,",",""); } 
                
                while($linham1 = mysqli_fetch_assoc($resultm1));

            } 
            return $quantidadeRespostas;
        }


    function MediaP4AtendimentoTel ($DataInicial, $DataFinal)
        {
            include("../Controller/conexao.php");
            $sqlM1 = "SELECT AVG(classificacao4) FROM pesquisa WHERE data >= '{$DataInicial}'  AND data  <=   '{$DataFinal}';";

            $resultm1 = $conexão->query($sqlM1);
                if($resultm1 === FALSE) { 
                    die(mysqli_error($conexão ));
                }
            $quantidadeRespostas = 0;      
            $linham1 = mysqli_fetch_array($resultm1);
            $totalm1 = mysqli_num_rows($resultm1);

            if($totalm1 > 0) {		
                do {       
                $quantidadeRespostas = number_format($linham1['AVG(classificacao4)'],2,",",""); } 
                
                while($linham1 = mysqli_fetch_assoc($resultm1));

            } 
            return $quantidadeRespostas;
        }



    function MediaP1AtendimentoPresen($DataInicial, $DataFinal)
        {
            include("../Controller/conexao.php");
            $sqlM1 = "SELECT AVG(classificacao5) FROM pesquisa WHERE data >= '{$DataInicial}'  AND data  <=   '{$DataFinal}';";

            $resultm1 = $conexão->query($sqlM1);
                if($resultm1 === FALSE) { 
                    die(mysqli_error($conexão ));
                }
            $quantidadeRespostas = 0;      
            $linham1 = mysqli_fetch_array($resultm1);
            $totalm1 = mysqli_num_rows($resultm1);

            if($totalm1 > 0) {		
                do {       
                $quantidadeRespostas = number_format($linham1['AVG(classificacao5)'],2,",",""); } 
                
                while($linham1 = mysqli_fetch_assoc($resultm1));

            } 
            return $quantidadeRespostas;
        }


    function MediaP2AtendimentoPresen($DataInicial, $DataFinal)
        {
            include("../Controller/conexao.php");
            $sqlM1 = "SELECT AVG(classificacao6) FROM pesquisa WHERE data >= '{$DataInicial}'  AND data  <=   '{$DataFinal}';";

            $resultm1 = $conexão->query($sqlM1);
                if($resultm1 === FALSE) { 
                    die(mysqli_error($conexão ));
                }
            $quantidadeRespostas = 0;      
            $linham1 = mysqli_fetch_array($resultm1);
            $totalm1 = mysqli_num_rows($resultm1);

            if($totalm1 > 0) {		
                do {       
                $quantidadeRespostas = number_format($linham1['AVG(classificacao6)'],2,",",""); } 
                
                while($linham1 = mysqli_fetch_assoc($resultm1));

            } 
            return $quantidadeRespostas;
        }



    function MediaP3AtendimentoPresen($DataInicial, $DataFinal)
        {
            include("../Controller/conexao.php");
            $sqlM1 = "SELECT AVG(classificacao7) FROM pesquisa WHERE data >= '{$DataInicial}'  AND data  <=   '{$DataFinal}';";

            $resultm1 = $conexão->query($sqlM1);
                if($resultm1 === FALSE) { 
                    die(mysqli_error($conexão ));
                }
            $quantidadeRespostas = 0;      
            $linham1 = mysqli_fetch_array($resultm1);
            $totalm1 = mysqli_num_rows($resultm1);

            if($totalm1 > 0) {		
                do {       
                $quantidadeRespostas = number_format($linham1['AVG(classificacao7)'],2,",",""); } 
                
                while($linham1 = mysqli_fetch_assoc($resultm1));

            } 
            return $quantidadeRespostas;
        }



    function MediaP4AtendimentoPresen($DataInicial, $DataFinal)
        {
            include("../Controller/conexao.php");
            $sqlM1 = "SELECT AVG(classificacao8) FROM pesquisa WHERE data >= '{$DataInicial}'  AND data  <=   '{$DataFinal}';";

            $resultm1 = $conexão->query($sqlM1);
                if($resultm1 === FALSE) { 
                    die(mysqli_error($conexão ));
                }
            $quantidadeRespostas = 0;      
            $linham1 = mysqli_fetch_array($resultm1);
            $totalm1 = mysqli_num_rows($resultm1);

            if($totalm1 > 0) {		
                do {       
                $quantidadeRespostas = number_format($linham1['AVG(classificacao8)'],2,",",""); } 
                
                while($linham1 = mysqli_fetch_assoc($resultm1));

            } 
            return $quantidadeRespostas;
        }





    function MediaP1SuporteOnline($DataInicial, $DataFinal)
        {
            include("../Controller/conexao.php");
            $sqlM1 = "SELECT AVG(classificacao9) FROM pesquisa WHERE data >= '{$DataInicial}'  AND data  <=   '{$DataFinal}';";

            $resultm1 = $conexão->query($sqlM1);
                if($resultm1 === FALSE) { 
                    die(mysqli_error($conexão )); 
                }
            $quantidadeRespostas = 0;      
            $linham1 = mysqli_fetch_array($resultm1);
            $totalm1 = mysqli_num_rows($resultm1);

            if($totalm1 > 0) {		
                do {       
                $quantidadeRespostas = number_format($linham1['AVG(classificacao9)'],2,",",""); } 
                
                while($linham1 = mysqli_fetch_assoc($resultm1));

            } 
            return $quantidadeRespostas;
        }


    function MediaP2SuporteOnline($DataInicial, $DataFinal)
        {
            include("../Controller/conexao.php");
            $sqlM1 = "SELECT AVG(classificacao10) FROM pesquisa WHERE data >= '{$DataInicial}'  AND data  <=   '{$DataFinal}';";

            $resultm1 = $conexão->query($sqlM1);
                if($resultm1 === FALSE) { 
                    die(mysqli_error($conexão ));
                }
            $quantidadeRespostas = 0;      
            $linham1 = mysqli_fetch_array($resultm1);
            $totalm1 = mysqli_num_rows($resultm1);

            if($totalm1 > 0) {		
                do {       
                $quantidadeRespostas = number_format($linham1['AVG(classificacao10)'],2,",",""); } 
                
                while($linham1 = mysqli_fetch_assoc($resultm1));

            } 
            return $quantidadeRespostas;
        }



    function MediaP3SuporteOnline($DataInicial, $DataFinal)
        {
            include("../Controller/conexao.php");
            $sqlM1 = "SELECT AVG(classificacao11) FROM pesquisa WHERE data >= '{$DataInicial}'  AND data  <=   '{$DataFinal}';";

            $resultm1 = $conexão->query($sqlM1);
                if($resultm1 === FALSE) { 
                    die(mysqli_error($conexão ));
                }
            $quantidadeRespostas = 0;      
            $linham1 = mysqli_fetch_array($resultm1);
            $totalm1 = mysqli_num_rows($resultm1);

            if($totalm1 > 0) {		
                do {       
                $quantidadeRespostas = number_format($linham1['AVG(classificacao11)'],2,",",""); } 
                
                while($linham1 = mysqli_fetch_assoc($resultm1));

            } 
            return $quantidadeRespostas;
        }


    function MediaP4SuporteOnline($DataInicial, $DataFinal)
        {
            include("../Controller/conexao.php");
            $sqlM1 = "SELECT AVG(classificacao12) FROM pesquisa WHERE data >= '{$DataInicial}'  AND data  <=   '{$DataFinal}';";

            $resultm1 = $conexão->query($sqlM1);
                if($resultm1 === FALSE) { 
                    die(mysqli_error($conexão ));
                }
            $quantidadeRespostas = 0;      
            $linham1 = mysqli_fetch_array($resultm1);
            $totalm1 = mysqli_num_rows($resultm1);

            if($totalm1 > 0) {		
                do {       
                $quantidadeRespostas = number_format($linham1['AVG(classificacao12)'],2,",",""); } 
                
                while($linham1 = mysqli_fetch_assoc($resultm1));

            } 
            return $quantidadeRespostas;
        }

    function DataSugestao($DataInicial, $DataFinal)
        {
            include("../Controller/conexao.php");
            $sqlM1 = "SELECT data FROM pesquisa WHERE data >= '{$DataInicial}'  AND data  <=   '{$DataFinal}';";

            $resultm1 = $conexão->query($sqlM1);
                if($resultm1 === FALSE) { 
                    die(mysqli_error($conexão ));
                }
            $dataFormatada = date("m.d.y"); 
            $quantidadeRespostas = 0;      
            $linham1 = mysqli_fetch_array($resultm1);
            $totalm1 = mysqli_num_rows($resultm1);

            if($totalm1 > 0) {		
                do {       

                $date = date_create($linham1['data']);
                $dataFormatada = date_format($date, 'd/m/Y');
              } 
                
                while($linham1 = mysqli_fetch_assoc($resultm1));

            } 
            return $dataFormatada;      
        }

    function Sugestao($DataInicial, $DataFinal)
        {
            include("../Controller/conexao.php");
            $sqlM1 = "SELECT data, sugestoes FROM pesquisa WHERE data >= '{$DataInicial}'  AND data  <=   '{$DataFinal}';";

            $resultm1 = $conexão->query($sqlM1);
                if($resultm1 === FALSE) { 
                    die(mysqli_error($conexão ));
                }
            $quantidadeRespostas = array();      
            $linham1 = mysqli_fetch_array($resultm1);
            $totalm1 = mysqli_num_rows($resultm1);

            if($totalm1 > 0) {		
                do {       
                
                $date = date_create($linham1['data']);
                $dataFormatada = date_format($date, 'd/m/Y');
                
                $quantidadeRespostas[$dataFormatada] = $linham1 ['sugestoes'];
              } 
                
                while($linham1 = mysqli_fetch_assoc($resultm1));

            } 
            return $quantidadeRespostas;      
        }






    }

?>