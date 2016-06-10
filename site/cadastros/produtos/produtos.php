	<?php include("../../header.php"); ?>
	
		<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa fa-shopping-cart fa-fw"></i> Produtos</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#consultar-produtos" aria-controls="consultar-produtos" role="tab" data-toggle="tab">Consultar Produto</a></li>
						<li role="presentation"><a href="#cadastrar-produtos" aria-controls="cadastrar-produtos" role="tab" data-toggle="tab">Cadastrar Produto(s)</a></li>
					</ul>
			<form>
			
			<div class="tab-content">
				
				<!-- CONTEUDO DA ABA DADOS NFe DO MENU PRINCIPAL PAGINA PRODUTOS -->	
					<div role="tabpanel" class="tab-pane active" id="consultar-produtos">
				<div class="panel panel-default">
				<div class="panel-heading" style="text-align:center">
					 <h2>Consultar Produto</h2>
				</div>
				<div class="panel-body">						
					<div class="container">
					<div class="col-md-6 col-md-offset-3">
						<form>
							<div class="col-md-5">
								 <input class="form-control input-sm" id="ex2" type="text" placeholder="Código">
							</div>
							<div class="col-md-5">
								<input class="form-control input-sm" id="ex2" type="text" placeholder="Nome">
							</div>
							<div class="col-md-2">
								 <button type="button" class="btn btn-primary">Pesquisar</button>
							</div>
						
					
						</form>
					</div>
					
				
				<div class="col-md-12">
				<h4>Resultado da Pesquisa<h4>
				<div class="table-responsive">
				  <table class="table table-hover">
					<thead>
					<tr>
						<th>
							Código
						</th>
						<th>
							Descrição
						</th>
						<th>
							Valor Un. Com.
						</th>
						<th>
							Valor Un. Trib.
						</th>
						<th>
							Ações
						</th>							
					</tr>
				</thead>
				<tbody>
					<tr class="active">
						<td>
							-
						</td>
						<td>
							-
						</td>
						<td>
							-
						</td>
						<td>
							-
						</td>
						<td>
							<a href="#/"><span class="glyphicon glyphicon-eye-open" style="color:blue" aria-hidden="true" data-toggle="modal" data-target="#visualizar"></span></a> &nbsp;&nbsp;&nbsp;
							<a href="#/"><span class="glyphicon glyphicon-edit" style="color:green" aria-hidden="true" data-toggle="modal" data-target="#editar"></span></a> &nbsp;&nbsp;&nbsp;
							<a href="#/"><span class="glyphicon glyphicon-remove-sign" style="color:red" aria-hidden="true" data-toggle="modal" data-target="#excluir"></span></a> 
						</td>
					</tr>
					<tr class="active">
						<td>
							-
						</td>
						<td>
							-
						</td>
						<td>
							-
						</td>
						<td>
							-
						</td>
						<td>
							<a href="#/"><span class="glyphicon glyphicon-eye-open" style="color:blue" aria-hidden="true"></span></a> &nbsp;&nbsp;&nbsp;
							<a href="#/"><span class="glyphicon glyphicon-edit" style="color:green" aria-hidden="true"></span></a> &nbsp;&nbsp;&nbsp;
							<a href="#/"><span class="glyphicon glyphicon-remove-sign" style="color:red" aria-hidden="true"></span></a> 
						</td>
						
					</tr>
					<tr class="active">
						<td>
							-
						</td>
						<td>
							-
						</td>
						<td>
							-
						</td>
						<td>
							-
						</td>
						<td>
							<a href="#/"><span class="glyphicon glyphicon-eye-open" style="color:blue" aria-hidden="true"></span></a> &nbsp;&nbsp;&nbsp;
							<a href="#/"><span class="glyphicon glyphicon-edit" style="color:green" aria-hidden="true"></span></a> &nbsp;&nbsp;&nbsp;
							<a href="#/"><span class="glyphicon glyphicon-remove-sign" style="color:red" aria-hidden="true"></span></a> 
						</td>
					</tr>
					
				</tbody>
				  </table>
				  </div>
				</div>
				</div>
				</div>
			</div>
			</div>
			
				<?php 
					include("../produtos/cadastro_produtos.php");
				?>
			
			</div>
			
			
			
			<!-- Modal VISUALIZAR-->
<div class="modal fade" id="visualizar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Resumo do Produto</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Editar</button>
      </div>
    </div>
  </div>
</div>


			<!-- Modal EDITAR-->
<div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Editar Produto?</h4>
      </div>
      <div class="modal-body" style="text-align:center">
		<button type="button" class="btn btn-danger" data-dismiss="modal">Não</button>
        <button type="button" class="btn btn-primary">Sim</button>        
      </div>
    </div>
  </div>
</div>

			<!-- Modal Excluir-->
<div class="modal fade" id="excluir" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Excluir Produto?</h4>
      </div>
      <div class="modal-body" style="text-align:center">
		<button type="button" class="btn btn-danger" data-dismiss="modal">Não</button>
        <button type="button" class="btn btn-primary">Sim</button>        
      </div>
    </div>
  </div>
</div>

           
        </div>
        <!-- /#page-wrapper -->
	
	<?php include("../../footer.php"); ?>
 