<script id="teste">
<table align="center">
			<!-- ***** REGIME*******-->
            <tr>
               <th><label for="id_application_method">Regime: </label></th>
                  <td>
                      <select  name="application_method" id="id_application_method">
                          <option value=""></option>
                          <option value="tributacao_normal">Tributação Normal</option>
                          <option value="simples_nacional">Simples Nacional</option>
                      </select>
                  </td>
            </tr>			
			
            <!-- ***** TRIBUTAÇÃO NORMAL : SITUAÇÃO TRIBUTARIA*******-->
            <tr id="tr_tributacao_normal" class="method_options">
              <th><label for="id_A">Situação Tributaria:</label></th>
                  <td>
                    <select name="aerial_size_dist" id="id_A">
                          <option value="" selected="selected"></option>
                          <option value="00" selected="selected">00 - Tributada Integralmente</option>
                          <option value="10">10 - Tributada com Cobrança de ICMS por ST</option>
                    </select>
                  </td>
            </tr>

			
			<!-- ***** SIMPLES NACIONAL : SITUAÇÃO TRIBUTARIA*******-->
			<tr id="tr_simples_nacional" class="method_options">
				<th><label for="id_B">Ground spray type:</label></th>
                 <td>
                   <select name="ground_spray_type" id="id_B">
						  <option value="" selected="selected"></option>
                          <option value="B1">B1</option>
                          <option value="B2">B2</option>
                   </select>
				  </td>
		    </tr>
				     
</table> 

					<a href="#/" style="float:right" class="linkRemover">
						<button type="button" class="btn btn-danger">Remover</button>
					</a>
</script>


