			<div role="tabpane3" class="tab-pane" id="destinatario-remetente">
				<div class="panel panel-default">
					<div class="panel-heading">
							 <a class="panel-title" href="#destinatario-remetente">Destinatário/Remetente</a>
							</div>
							<div class="panel-body">
								
									<div  class="col-md-12">
										<h3>Identificação</h3>
											<div class="form-group">
											   <div class="col-md-6">
												 <label for="ex2">Tipo de Documento</label>
													<select class="form-control">
													  <option>CPF</option>
													  <option>CNPJ</option>
													  <option>Estrangeiro</option>
													</select>
											  </div>
											  <div class="col-md-12">
											  <label for="ex2">Razão Social / Nome</label>
												 <input class="form-control" id="ex2" type="text">
											  </div>
											  <div class="col-md-6">
												 <label for="ex2">Tipo de Contribuite</label>
													<select class="form-control">
													  <option>1 - Contribuinte ICMS</option>
													  <option>2 - Contribuinte ISENTO</option>
													  <option>9 - Não Contribuinte</option>
													</select>
											  </div>
											  <div class="col-md-6">
												<label for="ex2">Inscrição Estadual</label>
												<input class="form-control" id="ex2" type="text">
											  </div>
											  <div class="col-md-6">
												<label for="ex3">Inscrição SUFRAMA</label>
												<input class="form-control" id="ex3" type="text">
											  </div>

											  <div class="col-md-6">
											     <label for="ex2">Inscrição Municipal</label>
												 <input class="form-control" id="ex2" type="text">
											  </div>												  
											  <div class="col-md-12">
												 <label for="ex2">E-mail</label>
													<input class="form-control" id="ex2" type="text">
											  </div>											  
											</div>
									</div>	
								
								
									<div  class="col-md-12">
										<h3>Endereço</h3>
										<div class="form-group">	

											  <div class="col-md-8">
											     <label for="ex2">Logadouro</label>
												 <input class="form-control" id="ex2" type="text">
											  </div>
											  <div class="col-md-4">
											     <label for="ex2">Número</label>
												 <input class="form-control" id="ex2" type="text">
											  </div>
											  <div class="col-md-4">
											     <label for="ex2">Complemento</label>
												 <input class="form-control" id="ex2" type="text">
											  </div>
											  <div class="col-md-4">
											     <label for="ex2">Bairro</label>
												 <input class="form-control" id="ex2" type="text">
											  </div>
											  <div class="col-md-4">
											     <label for="ex2">CEP</label>
												 <input class="form-control" id="ex2" type="text">
											  </div>
											  <div class="col-md-4">
											     <label for="ex2">País</label>
												 <input class="form-control" id="ex2" type="text">
											  </div>
											  <div class="col-md-2">
												 <label for="ex2">UF</label>
													<select class="form-control">
													  <option>AC</option>
													  <option>AL</option>
													  <option>AP</option>
													  <option>AM</option>
													  <option>BA</option>
													  <option>CE</option>
													  <option>DF</option>
													  <option>ES</option>
													  <option>GO</option>
													  <option>MA</option>
													  <option>MT</option>
													  <option>MS</option>
													  <option>MG</option>
													  <option>PA</option>
													  <option>PB</option>
													  <option>PA</option>
													  <option>PR</option>
													  <option>PE</option>
													  <option>PI</option>
													  <option>RJ</option>
													  <option>RN</option>
													  <option>RO</option>
													  <option>RR</option>
													  <option>SC</option>
													  <option>SP</option>
													  <option>TO</option>
													  <option>EX</option>													  
													</select>
											  </div>
											  <div class="col-md-2">
												 <label for="ex2">Municipio</label>
													<select class="form-control">
													  <option>AC</option>
													  <option>AL</option>
													  <option>AP</option>
													  <option>AM</option>
													  <option>BA</option>
													  <option>CE</option>
													  <option>DF</option>
													  <option>ES</option>
													  <option>GO</option>
													  <option>MA</option>
													  <option>MT</option>
													  <option>MS</option>
													  <option>MG</option>
													  <option>PA</option>
													  <option>PB</option>
													  <option>PA</option>
													  <option>PR</option>
													  <option>PE</option>
													  <option>PI</option>
													  <option>RJ</option>
													  <option>RN</option>
													  <option>RO</option>
													  <option>RR</option>
													  <option>SC</option>
													  <option>SP</option>
													  <option>TO</option>
													  <option>EX</option>													  
													</select>
											  </div>
											 									  
											  <div class="col-md-3">
											     <label for="ex2">Fone</label>
												 <input class="form-control" id="ex2" type="text">
											  </div>
										</div>
									</div>
								
							  
										<div class="col-md-12">
											<h3>Local Retirada/ Entrega</h3>
											</br>
											

											</br>
											<div class="col-md-6">
											
												<h4><input type="checkbox" name="optionsChecked" id="check_retira_loc_diferente" value="local-retirada-emitente-diferente"> Local de Retirada Diferente do Emitente</h4>
												<!-- Conteudo aparece na div abaixo quando ativado o checkbox -->
												<div id="retirada-diferente-emitente"></div>	
												
											</div>
											<div class="col-md-6">
												<h4><input type="checkbox" name="optionsChecked" id="check_entrega_loc_diferente" value=""> Local de Entrega Diferente do Destinatário</h4>
												 <!-- Conteudo aparece na div abaixo quando ativado o checkbox -->
												 <div id="entrega-diferente-destinatario"></div>	 
											</div>
											
										</div>
									
								
							</div>
						
				  </div>
				  <!-- /.panel-Destinatario/Remetente -->		
			</div>
		</div>	
		
    <!-- ||||****** function javascript de ativação dos checkbox´s esta em assest/emissor/nova_nfe.js *********||||-->		
							