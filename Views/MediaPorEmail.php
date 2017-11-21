<?php 
require_once("../Model/dados3.php");
include("../Views/RelatorioEmail.php");
require_once("../Model/DAOrelatorioMediaEmail.php");

?>
<div class="tabelas3">
<div class="container">
      
  
  	<div class="row">
		<div class="10u 12u$(mobile)">
			<h3><b>EMAIL DE USUÁRIO: </b><span style="color:#6E7B8B"> <b><?php echo " ".$email ?></b></span></h3>
            <h3><b>EMPRESA: </b><span style="color:#6E7B8B"> <b><?php echo " ".$empresa ?></b></span></h3>
            <h3>PERIODO: <span style="color:#6E7B8B"> <b><?php echo " ".$DataInicio ?></b> a <b><?php echo " ".$DataFim ?></b></span></h3>
            <h3>QUANTIDADE DE RESPOSTAS: <span style="color:#6E7B8B"><?php echo " ".$quantidade?></span></h3>
            <br/>	
            <br/>
            <br/>
		</div>
		<div class="2u$ 12u$(mobile)">
			<img src='../assets/img/alldoc.jpg' id='relatorio-logo' alt='Logo Alldoc'>
										 
		</div>
    </div>
   <h3>Atendimento por Telefone</h3>
   
   <div class="table-responsive">
    <table class="table table-striped table-bordered table-hover table-condensed">
        <tr>
                  
            <th class="active">Competência dos funcionários</th>
            <th class="active">Confiabilidade e clareza das informações</th>
            <th class="active">Cumprimento de horários e prazos</th>
            <th class="active">Cordialidade do atendimento</th>
        </tr>  
        <tr>
            
            <td><?php echo $mediaP1AtendimentoTel; ?></td>
            <td><?php echo $mediaP2AtendimentoTel; ?></td>
            <td><?php echo $mediaP3AtendimentoTel; ?></td>
            <td><?php echo $mediaP4AtendimentoTel; ?></td>
         </tr> 
    </table> 
</div>

    <br/>
    <br/>


    <h3>Atendimento Presencial</h3>
    <div class="table-responsive">
      <table class="table table-striped table-bordered table-hover table-condensed">
        <tr>
            
            <th class="active">Aparência dos Funcionários</th>
            <th class="active">Tempo gasto para resolver o problema</th>
            <th class="active">Competência dos funcionários</th>
            <th class="active">Confiabilidade e clareza das informações</th>
        </tr>

        <tr>
            
            <td><?php echo $mediaP1AtendimentoPresen; ?></td>
            <td><?php echo $mediaP2AtendimentoPresen; ?></td>
            <td><?php echo $mediaP3AtendimentoPresen; ?></td>
            <td><?php echo $mediaP4AtendimentoPresen; ?></td>
        </tr> 
    </table> 
 </div>

  <br/>
    <br/>


<h3>Suporte Online</h3>
<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover table-condensed">
        <tr>
                 
            <th class="active">Cumprimento de horários e prazos</th>
            <th class="active">Aspecto Visual do Suporte</th>
            <th class="active">Funcionalidade do Sistema</th>
            <th class="active">Facilidade no acesso</th>
        </tr>
        <tr>
           
            <td><?php echo $mediaP1SuporteOnline; ?></td>
            <td><?php echo $mediaP2SuporteOnline; ?></td>
            <td><?php echo $mediaP3SuporteOnline; ?></td>
            <td><?php echo $mediaP4SuporteOnline; ?></td>
        </tr> 
    </table> 
 </div>
<br/>
<br/>
<h3>Sugestões </h3>
<div class="table-responsive">
     <table class="table table-striped table-bordered table-hover table-condensed">
        <thead>
        <tr>
            <th class="active">Data</th>        
            <th class="active">Sugestão</th>
        </tr>
        </thead>
        <?php  
       if($total > 0) {
        
        do {

      ?>
        <tr>
            
            <td><?php 
                $date = date_create($linha['data']);    
                 date_format($date, 'd/m/Y');
                 echo date_format($date, 'd/m/Y');
            ?>
            </td>         
            <td><?php echo $linha['sugestoes'];?></td> 

             <?php    
        
        } while($linha = mysqli_fetch_assoc($result));

      } ?>   
        </tr>  
       
    </table>
</div>
 <div class="row">
        <div class="12u$">
			<input type="button" class="Imprimir Relatório" value="Imprimir" />
		</div>
 </div>
</div><br/> 
</div>

<?php include("../Views/Footer.php");?>