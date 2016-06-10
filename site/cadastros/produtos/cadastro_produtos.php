<!-- CONTEUDO DA ABA CADASTRAR PRODUTOS DA PAGINA PRODUTOS -->	
			<div role="tabpanel" class="tab-pane " id="cadastrar-produtos">	
			    <div class="panel panel-default">
				<div class="panel-heading" style="text-align:center">
					 <h2>Cadastrar Produto</h2>
				</div>
				<div class="panel-body">				
					<form>
						<div class="col-md-12">
							<div class="col-md-6">
									<div class="col-md-12">
										 <label for="ex2">Descrição</label>
										 <input class="form-control input-sm" id="ex2" type="text">
									</div>
									<div class="col-md-12" style="margin-bottom:15px">
										 <label for="ex2">Código</label>
										 <input class="form-control input-sm" id="ex2" type="text">
									</div>
									<div class="col-md-6">
										<div class="col-md-12">
											 <label for="ex2">EAN</label>
											 <input class="form-control input-sm" id="ex2" type="text">
										</div>
										<div class="col-md-12">
											 <label for="ex2">EAN und. Tributável</label>
											 <input class="form-control input-sm" id="ex2" type="text">
										</div>
										<div class="col-md-6">
											 <label for="ex2">EX TIPI</label>
											 <input class="form-control input-sm" id="ex2" type="text">
										</div>
										<div class="col-md-6">
											 <label for="ex2">Gênero</label>
											 <input class="form-control input-sm" id="ex2" type="text">
										</div>
										<div class="col-md-6">
											 <label for="ex2">NCM</label>
											 <input class="form-control input-sm" id="ex2" type="text">
										</div>
										<div class="col-md-6">
											 <label for="ex2">CEST</label>
											 <input class="form-control input-sm" id="ex2" type="text">
										</div>
									</div>
									<div class="col-md-6">
										<div class="col-md-6">
											 <label for="ex2">Unid. Com</label>
											 <input class="form-control input-sm" id="ex2" type="text">
										</div>
										<div class="col-md-6">
											 <label for="ex2">Valor Unit. Com</label>
											 <input class="form-control input-sm" id="ex2" type="text">
										</div>
										<div class="col-md-6">
											 <label for="ex2">Unit. Trib.</label>
											 <input class="form-control input-sm" id="ex2" type="text">
										</div>
										<div class="col-md-6">
											 <label for="ex2">Qtd. Trib.</label>
											 <input class="form-control input-sm" id="ex2" type="text">
										</div>
										<div class="col-md-6">
											 <label for="ex2">Valor Unit. Trib.</label>
											 <input class="form-control input-sm" id="ex2" type="text">
										</div>

									</div>
							</div>
							
							<div class="col-md-6">
								 

								<div class="col-md-12">
									<h4 style="border-bottom: 1px solid red"><span class="label label-danger">IPI</span></h4>
										<div class="col-md-12">
											 <label for="ex2">Classe de Enquadramento (Cigarros e Bebidas)</label>
											 <input class="form-control input-sm" id="ex2" type="text">
										</div>
										<div class="col-md-12">
											 <label for="ex2">Código de Enquadramento Legal</label>
											 <input class="form-control input-sm" id="ex2" type="text">
										</div>
										<div class="col-md-12">
											 <label for="ex2">CNPJ do Produtor</label>
											 <input class="form-control input-sm" id="ex2" type="text">
										</div>
								</div>
							
						
							</div>
							<div class="col-md-12">
								<h4 style="border-bottom: 1px solid red"><span class="label label-danger">Cadastro de ICMS</span></h4>
								
							<div ng-app="icmssProdutos" ng-controller="IcmssProdutosController">
							{{ICMSs}}
							  <div ng-repeat="icms in ICMSs">
								<div class="jumbotron">
								<div class="container">
									<div class="col-md-12">
										<button style="float:right " type="button" class="btn btn-danger" ng-click="removerIcms(icms)">x</button>
									</div>
									<div class="row">
										<div class="col-md-4">
										  <label for="ex2">Regime</label>
										  <select class="form-control" ng-model="icms.regime" ng-options="r.regime for r in data track by r.id">
											<option value="">Selecione o Regime</option>
										  </select>
										 </div> 
										 <div class="col-md-4">
										  <label for="ex2" ng-if="icms.regime">Situação Tributária
											<select class="form-control" ng-if="icms.regime" ng-model="icms.situacao" ng-options="s.situacao for s in icms.regime.SituacaoTributaria track by s.value">
											  <option value="">Selecione a Situação Tributária</option>
											</select>
										  </label>
										 </div>
										 <div class="col-md-4">
										  <label for="ex2" ng-if="icms.regime">Origem
											<select class="form-control" ng-model="icms.Origem" ng-options="o.Origem for o in icms.regime.Origens track by o.value">
											  <option value="">Selecione a Origem do Produto</option>
											</select>
										  </label>
										 </div> 
									</div>
								  <div class="col-md-12" ng-if="icms.situacao">
									 <div class="col-md-6">
										<h4><span class="label label-warning">ICMS</span></h4>
										 <label for="ex2" ng-if="icms.situacao.value == 00 || icms.situacao.value == 10">Modalid. de Determ. da BC ICMS
											<select class="form-control" ng-model="icms.ModaliBcICMS" ng-options="m.Modali for m in icms.regime.ModaliBcICMS track by m.value">
											  <option value="">Selecione Modalidade de determinação da BC do ICMS</option>
											</select>
										 </label>
										 <label for="ex2" ng-if="icms.situacao.value == 10">% Redução da da BC ICMS
											<input type="number" class="form-control"></input>
										 </label>
										  <label for="ex2" ng-if="icms.situacao.value == 00 || icms.situacao.value == 10">Alíquota do ICMS
											<input type="number" class="form-control"></input>
										 </label>
										 <label for="ex2" ng-if="icms.situacao.value == 10">% BC ICMS da Operação Própria
											<input type="number" class="form-control"></input>
										 </label>
										 
										
									 </div>
									 <div class="col-md-6">
										<h4><span class="label label-warning">ICMS ST</span></h4>
										 <label for="ex2" ng-if="icms.situacao.value == 10">Modalid. de Determ. da BC ICMS ST
											<select class="form-control" ng-model="icms.ModaliBcICMSst" ng-options="m.ModaliST for m in icms.regime.ModaliBcICMSst track by m.value">
											  <option value="">Selecione Modalidade de determinação da BC do ICMS ST</option>
											</select>
										 </label>
										 <label for="ex2" ng-if="icms.situacao.value == 10">% Redução da da BC ICMS ST
											<input type="number" class="form-control"></input>
										 </label>
										 <label for="ex2" ng-if="icms.situacao.value == 10">% Margem de Valor Adic. ICMS ST
											<input type="number" class="form-control"></input>
										 </label>										 
										  <label for="ex2" ng-if="icms.situacao.value == 10">Alíquota do ICMS ST
											<input type="number" class="form-control"></input>
										 </label>
										 <label for="ex2" ng-if="icms.situacao.value == 10">% BC ICMS da Operação Própria
											<input type="number" class="form-control"></input>
										 </label>
										
									 </div>
								  </div>
								  
								</div>
								</div>
							  </div>

							  <button type="button" class="btn btn-warning" ng-click="IncluirICMS()">INCLUIR</button>
							</div>
								
									<!-- botão de inclusao de icms´s relacionados ao produto (no footer esta o include selects_icms.php )-->
									
									
							</div>
						</div>	
						<div class="col-md-3 col-md-offset-5">
							<button type="button" style="margin:15px" class="btn btn-primary btn-lg">Salvar</button>
						</div>
					</form>
					</div>
			</div>
			</div>
					
			
			
			<!-- ****** SCRIPT RELACIONADO APENAS A INSERÇÃO E EXCLUSÃO DE ICMS´S AO PRODUTO A SER CADASTRADO, OS SELECTS REFENCIADOS NO JS SÃO DO INCLUDE DA LINHA ACIMA********-->	
			<script src="<?php echo BASE_URL; ?>assets/emissor/cadastrar-produto-icms.js"></script>