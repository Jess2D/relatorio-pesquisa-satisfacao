<?php 
require_once("../Model/dados.php");
include("../Views/relatorio.php");
require_once("../Model/DAOrelatorioMediaGeral.php");
?>
<div class="tabelas">
   <h2>Média de atendimento por Telefone</h2>
   
   <div class="table-responsive">
    <table class="table table-striped table-bordered table-hover table-condensed">
        <tr>
            <th class="active">Total de Pesquisas Respondidas</th>        
            <th class="active">Competência dos funcionários</th>
            <th class="active">Confiabilidade e clareza das informações</th>
            <th class="active">Cumprimento de horários e prazos</th>
            <th class="active">Cordialidade do atendimento</th>
        </tr>  
        <tr>
            <td><?php echo $quantidade;?></td> 
            <td><?php echo $mediaP1AtendimentoTel; ?></td>
            <td><?php echo $mediaP2AtendimentoTel; ?></td>
            <td><?php echo $mediaP3AtendimentoTel; ?></td>
            <td><?php echo $mediaP4AtendimentoTel; ?></td>
         </tr> 
    </table> 
</div>

    <br/>
    <br/>


    <h2>Média de atendimento Presencial</h2>
    <div class="table-responsive">
      <table class="table table-striped table-bordered table-hover table-condensed">
        <tr>
            <th class="active">Total de Pesquisas Respondidas</th>        
            <th class="active">Aparência dos Funcionários</th>
            <th class="active">Tempo gasto para resolver o problema</th>
            <th class="active">Competência dos funcionários</th>
            <th class="active">Confiabilidade e clareza das informações</th>
        </tr>

        <tr>
            <td><?php echo $quantidade;?></td> 
            <td><?php echo $mediaP1AtendimentoPresen; ?></td>
            <td><?php echo $mediaP2AtendimentoPresen; ?></td>
            <td><?php echo $mediaP3AtendimentoPresen; ?></td>
            <td><?php echo $mediaP4AtendimentoPresen; ?></td>
        </tr> 
    </table> 
 </div>

  <br/>
    <br/>


<h2>Média de Suporte Online</h2>
<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover table-condensed">
        <tr>
            <th class="active">Total de Pesquisas Respondidas</th>        
            <th class="active">Cumprimento de horários e prazos</th>
            <th class="active">Aspecto Visual do Suporte</th>
            <th class="active">Funcionalidade do Sistema</th>
            <th class="active">Facilidade no acesso</th>
        </tr>
        <tr>
            <td><?php echo $quantidade;?></td> 
            <td><?php echo $mediaP1SuporteOnline; ?></td>
            <td><?php echo $mediaP2SuporteOnline; ?></td>
            <td><?php echo $mediaP3SuporteOnline; ?></td>
            <td><?php echo $mediaP4SuporteOnline; ?></td>
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
        <?php foreach($sugestao as $dataSugestrao => $sugestaot) { ?>
            <tr>
                <td><?php echo $dataSugestrao; ?></td>
                <th><?php echo $sugestaot; ?></th>     
            </tr>
        <?php } ?>
          
       
    </table> 
</div>
</div>
<?php  include("../Views/rodape.php"); ?>