	<?php include("../header.php"); ?>
		
		<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa fa-plus fa-fw"></i>  Nova NFe <span style="float:right" ><button type="button" class="btn btn-warning btn-lg">Pré-vizualizar DANFE</button></span></h1>
					<p style="text-align:right">
						<button type="button" class="btn btn-primary">Salvar <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span></button>
						<button type="button" class="btn btn-info">Validar <span class="glyphicon glyphicon glyphicon-ok" aria-hidden="true"></span></button>
						<button type="button" class="btn btn-success">Assinar <span class="glyphicon glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
					</p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
			<div class="row">
				<div class="col-md-12">
				<form method="POST" role="form">
				
				<!-- MENU PRINCIPAL NOVA NFE -->
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#dadosnfe" aria-controls="dadosnfe" role="tab" data-toggle="tab">Dados da NFE</a></li>
						<li role="presentation"><a href="#emitente" aria-controls="emitente" role="tab" data-toggle="tab">Emitente</a></li>
						<li role="presentation"><a href="#destinatario-remetente" aria-controls="destinatario-remetente" role="tab" data-toggle="tab">Destinatário/Remetente</a></li>
						<li role="presentation"><a href="#produtos-servicos" aria-controls="produtos-servicos" role="tab" data-toggle="tab">Produtos e Serviços</a></li>
						<li role="presentation"><a href="#cupons-fiscais-vinculados" aria-controls="cupons-fiscais-vinculados" role="tab" data-toggle="tab">Impostos </a></li>
						<li role="presentation"><a href="#cupons-fiscais-vinculados" aria-controls="cupons-fiscais-vinculados" role="tab" data-toggle="tab">Faturas </a></li>
					</ul>
				<!-- /MENU PRINCIPAL NOVA NFE -->	
				
				
					<div style="text-align:center">
						
					</div>
				
				
				
				<div class="tab-content">
				
				<!-- CONTEUDO DA ABA DADOS NFe DO MENU PRINCIPAL -->	
					<div role="tabpanel" class="tab-pane active" id="dadosnfe">	

						<div class="panel panel-default">
							<div class="panel-heading" style="text-align:center">
								 <h2>Dados da NFe</h2>
							</div>
							
								<div class="panel-body">
								
									<!-- Nav tabs -->
									  <ul class="nav nav-tabs" role="tablist">
										<li role="presentation" class="active"><a href="#nfe" aria-controls="nfe" role="tab" data-toggle="tab">NFe</a></li>
										<li role="presentation"><a href="#notas-conhecimento-referenciados" aria-controls="notas-conhecimento-referenciados" role="tab" data-toggle="tab">Notas e Conhecimentos Fiscais Referenciados</a></li>
										<li role="presentation"><a href="#notas-referenciadas-produtor" aria-controls="notas-referenciadas-produtor" role="tab" data-toggle="tab">Notas Fiscais Referenciadas de Produtor</a></li>
										<li role="presentation"><a href="#cupons-fiscais-vinculados" aria-controls="cupons-fiscais-vinculados" role="tab" data-toggle="tab">Cupons Fiscais Vinculados à Nfe</a></li>
									  </ul>

									  <!-- Tab panes -->
									  <div class="tab-content">
										<div role="tabpanel" class="tab-pane active" id="nfe">
											
											<?php include("nfe.php"); ?>
											
											
										</div>
										<!-- /tab ******NFe****** -->
										
										
										<div role="tabpanel" class="tab-pane" id="notas-conhecimento-referenciados">
																				
											<h3>Notas e Conhecimentos Fiscais Referenciados</h3>
											
											<div id="formulario"></div>	<!-- JAVASCRIPT COM OS CAMPOS ESTA NO FOOTER -->
											<a href="#/" data-id="1" id="adicionarCampo"><button type="button" class="btn btn-warning">INCLUIR</button></a>
											
											
										</div>										
										<!-- /tab *****NOTAS E CONHECIMENTOS FISCAIS REFERENCIADOS***** -->
										
										

										<div role="tabpanel" class="tab-pane" id="notas-referenciadas-produtor">
										
											<h3>Notas Fiscais Referenciadas de Produtor</h3>
											
											<div id="form-referenciadas-produtor"></div><!-- JAVASCRIPT COM OS CAMPOS ESTA NO FOOTER -->	
											<a href="#/" data-id="2" id="adicionarCampo"><button type="button" class="btn btn-warning">INCLUIR</button></a>
										
										</div>
										<!-- /tab *****NOTAS FISCAIS REFERENCIADAS DE PRODUTOR***** -->
										
										
										
										<div role="tabpanel" class="tab-pane" id="cupons-fiscais-vinculados">
										
											<h3>Cupons Fiscais Vinculados a NFe</h3>
											
											<div id="form-cupom-vinculado"></div>	<!-- JAVASCRIPT COM OS CAMPOS ESTA NO FOOTER -->
											<a href="#/" data-id="3" id="adicionarCampo"><button type="button" class="btn btn-warning">INCLUIR</button></a>
										
										</div>
										<!-- /tab ******CUPONS FISCAIS VINCULADOS À NFE***** -->
										
									 
									
								</div>
							
						</div>
						
						</div>
						<!-- /.panel-Dados NFe -->
						</div>
						<!-- /FIM CONTEUDO DA ABA DADOS NFe DO MENU PRINCIPAL NOVA NFe -->	

						
						<!-- INICIO CONTEUDO DAS DEMAIS ABAS DO MENU PRINCIPAL NOVA NFe -->		
								<?php 
								include("emitente.php");
								include("produtos-servicos.php"); 
								include("destinatario-remetente.php"); 
								
								
								?>
						
						
						<div class="panel panel-default">
							<div class="panel-heading">
								 <a class="panel-title" data-toggle="collapse" data-parent="#panel-911229" href="#impostos">Impostos</a>
							</div>
							<div id="impostos" class="panel-collapse collapse">
								<div class="panel-body">
									
									 <!-- Nav tabs -->
									  <ul class="nav nav-tabs" role="tablist">
										<li role="presentation" class="active"><a href="#ICMS" aria-controls="ICMS" role="tab" data-toggle="tab">ICMS</a></li>
										<li role="presentation"><a href="#ISSQN" aria-controls="ISSQN" role="tab" data-toggle="tab">ISSQN</a></li>
										<li role="presentation"><a href="#retencao-de-tributos" aria-controls="retencao-de-tributos" role="tab" data-toggle="tab">Retenção de Tributos</a></li>
									  </ul>

									  <!-- Tab panes -->
									  <div class="tab-content">
										<div role="tabpanel" class="tab-pane active" id="ICMS">teste</div>
										<div role="tabpanel" class="tab-pane" id="ISSQN">teste</div>
										<div role="tabpanel" class="tab-pane" id="retencao-de-tributos">retencao-de-tributos</div>
									  </div>
									
									
								</div>
							</div>
						</div>

						<div style="text-align:center">
							<button type="button" style="margin:15px" class="btn btn-warning btn-lg">Pré-vizualizar DANFE</button>
						</div>
						<p>
						<button type="button" class="btn btn-primary">Salvar <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span></button>
						<button type="button" class="btn btn-info">Validar <span class="glyphicon glyphicon glyphicon-ok" aria-hidden="true"></span></button>
						<button type="button" class="btn btn-success">Assinar <span class="glyphicon glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
						</p>
						
					
					
					
					
					 </div>
					 </div>
					<!-- /tab Content-->
					</form>
					</div>
					<!-- /.col-md-12 -->
				</div>
				 <!-- /.row -->
		
		<!--Include referente a aba Destinatário/Remetente para que não seja oculto(mas visivel no DOM) dentro do form, o mesmo é impresso de fato no form apenas quando ativado o checkbox -->
        <?php include("locais_remetente_destin_diferente.php"); ?>

            
           
        </div>
        <!-- /#page-wrapper -->
	
	<script src="<?php echo BASE_URL; ?>assets/emissor/nova-nfe.js"></script>	
	<?php include("../footer.php"); ?>
 