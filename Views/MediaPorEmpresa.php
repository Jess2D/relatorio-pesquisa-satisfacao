<?php 
require_once("../Model/dados.php");
include("../Views/relatorio.php");
require_once("../Model/DAOrelatorioMediaEmpresa.php");

?>
<div class="tabelas">
  <br/> 
  <h4>Empresa: <span style="color:#6E7B8B"> <b><?php echo " ".$empresa ?></b></span></h4>
  <h4>Periodo: <span style="color:#6E7B8B"> <b><?php echo " ".$DataInicio ?></b> a <b><?php echo " ".$DataFim ?></b></span></h4>
  <h4>Quantidade de Respostas: <span style="color:#6E7B8B"><?php echo " ".$quantidade?></span></h4>



   <div class="row">

        <div class="col-sm-12 pes-titulo-secao">
            <h3>Atendimento por telefone</h3>
        </div>

        <div class="col-xs-12 col-sm-6">
                        <h4>Média Competência dos funcionários: <span style="color:#6E7B8B"><?php echo $mediaP1AtendimentoTel ?></span></h4>
        </div>

        <div class="col-xs-12 col-sm-6">
                        <h4>Média Confiabilidade e clareza das informações: <span style="color:#6E7B8B"><?php echo $mediaP2AtendimentoTel ?></span></h4>
                       
         </div>

        <div class="col-xs-12 col-sm-6">
                        <h4>Média Cumprimento de horários e prazos: <span style="color:#6E7B8B"><?php echo $mediaP3AtendimentoTel ?></span></h4>
                       
        </div>

        <div class="col-xs-12 col-sm-6">
                        <h4>Média Cordialidade do atendimento: <span style="color:#6E7B8B"><?php echo $mediaP3AtendimentoTel ?></span></h4>
                       
        </div>



        <div class="col-sm-12 pes-titulo-secao">
            <h3>Atendimento Presencial </h3>
        </div>
        <div class="col-xs-12 col-sm-6">
                        <h4>Média Aparência dos Funcionários: <span style="color:#6E7B8B"><?php echo $mediaP1AtendimentoPresen  ?></span></h4>
         </div>

         <div class="col-xs-12 col-sm-6">
                        <h4>Média Tempo gasto para resolver o problema: <span style="color:#6E7B8B"><?php echo $mediaP2AtendimentoPresen  ?></span></h4>
                       
         </div>

        <div class="col-xs-12 col-sm-6">
                        <h4>Média Competência dos funcionários: <span style="color:#6E7B8B"><?php echo $mediaP3AtendimentoPresen  ?></span></h4>
                    
         </div>

        <div class="col-xs-12 col-sm-6">
                        <h4>Média Confiabilidade e clareza das informações: <span style="color:#6E7B8B"><?php echo $mediaP4AtendimentoPresen  ?></span></h4>
                        
        </div>


    
        <div class="col-sm-12 pes-titulo-secao">
            <h3>Suporte Online</h3>
        </div>
        <div class="col-xs-12 col-sm-6">
                        <h4>Média Cumprimento de horários e prazos: <span style="color:#6E7B8B"><?php echo  $mediaP1SuporteOnline  ?></span></h4>
                       
         </div>

         <div class="col-xs-12 col-sm-6">
                        <h4>Média Aspecto Visual do Suporte: <span style="color:#6E7B8B"><?php echo  $mediaP2SuporteOnline  ?></span></h4>
                        
         </div>

        <div class="col-xs-12 col-sm-6">
                        <h4>Média Funcionalidade do Sistema:<span style="color:#6E7B8B"><?php echo  $mediaP3SuporteOnline  ?></span></h4>
                      
         </div>

        <div class="col-xs-12 col-sm-6">
                        <h4>Média Facilidade no acesso: <span style="color:#6E7B8B"><?php echo $mediaP4SuporteOnline  ?></span></h4>
                      
        </div>



        <div class="col-sm-12 pes-titulo-secao">
            <h3>Sugestões</h3>
        </div>
        <div class="col-xs-12 col-sm-6 well well-sm">
                        <h4>Data: <span style="color:#6E7B8B"> 01/01/2017</span></h4>
                        <h4>Sugestão: <span style="color:#6E7B8B"> wefgwewrgarwegearg</span></h4>
         </div>
        </div>
    </div>
<?php  include("../Views/rodape.php"); ?>