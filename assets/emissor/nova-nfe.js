//*********FUNCTION PARA INCLUIR CAMPOS NOVA NOTA FISCAL: NOTAS E CONHECIMENTOS FISCAIS REFERENCIADOS
	$(document).ready(function(){
    var divContent = $('#formulario');
    var botaoAdicionar = $('a[data-id="1"]');
    var i = 1;

    //Ao clicar em incluir cria novos campos
    $(botaoAdicionar).click(function () {
         $('<div class="conteudoIndividual">'
				+ '<div class="jumbotron">'
					+ '<div class="container">'
						+ '<div class="radio" name="tipo-notas-conhecimentos-fiscais' + i + '">'
								+ '<label class="radio-inline">'
									+ '<input type="radio" name="optionsRadios" id="nfe" value="nfe" checked> NFe'
								+ '</label>'
								+ '<label class="radio-inline">'
									+'<input type="radio" name="optionsRadios" id="cte" value="cte" > CTe'
								+ '</label>'
								+ '<label class="radio-inline">'
									+ '<input type="radio" name="optionsRadios" id="nota-fiscal" value="notafiscal" > Nota Fiscal'
								+ '</label>'
						+ '</div>'
						+ '<div class="col-md-12">'
								+ '<label for="ex3">Chave de Acesso</label>'
								+ '<input class="form-control" id="chave-acesso" type="text" name="chave-notas-conhecimentos-fiscais' + i + '">'
						+ '</div>'
						+ '<div class="col-md-3">'
								+ '<label for="ex2">Série</label>'
								+ '<input name="serie-notas-conhecimentos-fiscais' + i + '" class="form-control" id="ex2" type="text">'
						+ '</div>'
						+ '<div class="col-md-3">'
								+ '<label for="ex3">Número</label><input class="form-control" id="ex3" type="text" name="numero-notas-conhecimentos-fiscais' + i + '">'
						+ '</div>'
						+ '<div class="col-md-2">'
								+ '<label for="ex2">Modelo</label><input name="modelo-notas-conhecimentos-fiscais' + i + '" class="form-control" id="ex2" type="text">'
						+ '</div>'
						+ '<div class="col-md-2">'
							+ '<label for="ex2">UF</label>'
							+ '<select class="form-control" name="uf-notas-conhecimentos-fiscais' + i + '">'
									+ '<option>inserir options</option><option>inserir options</option>'
							+ '</select>'
						+ '</div>'
						+ '<div class="col-md-3">'
							+ '<label for="ex2">Mês de Emissão</label>'
								+ '<div class="input-group">'
									+ '<input name="mes-notas-conhecimentos-fiscais' + i + '" type="datetime" class="form-control" />'
									+ '<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>'
								+'</div>'
						+ '</div>'
						+ '<div class="col-md-4">'
								+ '<label for="ex3">CNPJ</label>'
								+ '<input name="cnpj-notas-conhecimentos-fiscais' + i + '" class="form-control" id="ex3" type="text">'
						+ '</div>'
					+ '</div>'
					+ '<a href="#/" style="float:right" class="linkRemover">'
							+ '<button type="button" class="btn btn-danger">Remover</button>'
					+ '</a>'
			   + '</div>'
		+ '</div">').appendTo(divContent);
        $('#removehidden').remove();
        i++;
        $('<input type="hidden" name="quantidadeCampos" value="' + i + '" id="removehidden">').appendTo(divContent);
		
		//Incluir ou remover attibuto "disable" no campo CHAVE DE ACESSO conforme seleção no input radio (NFe, CTe e Nota Fiscal)
		$('#nfe').click(function()
		{
		  $('#chave-acesso').removeAttr("disabled","disabled");
		});
		$('#cte').click(function()
		{
		  $('#chave-acesso').removeAttr("disabled","disabled");
		});
		$('#nota-fiscal').click(function()
		{
		  $('#chave-acesso').attr("disabled","disabled");
		});


		
    });

    //Cliquando em remover a linha é eliminada
    $('#formulario').on('click', '.linkRemover', function () {
        $(this).parents('.conteudoIndividual').remove();
        i--;
    });
	

	
});



//*********FUNCTION PARA INCLUIR CAMPOS NOVA NOTA FISCAL: NOTAS FISCAIS REFENCIADAS DE PRODUTOR

	$(document).ready(function(){
    var divContent = $('#form-referenciadas-produtor');
    var botaoAdicionar = $('a[data-id="2"]');
    var i = 1;

    //Ao clicar em incluir são os campos são criados, ou duplicados caso já exista
    $(botaoAdicionar).click(function () {
        $('<div class="conteudoIndividual2">'
				+ '<div class="jumbotron">'
					+ '<div class="container">'
						+ '<div class="col-md-6">'
							+ '<div class="col-md-6">'
									+ '<label for="ex2">Série</label>'
									+ '<input name="serie-referenciadas-produtor' + i + '" class="form-control" id="ex2" type="text">'
							+ '</div>'
							+ '<div class="col-md-6">'
									+ '<label for="ex3">Número</label><input class="form-control" id="ex3" type="text" name="numero-referenciadas-produtor' + i + '">'
							+ '</div>'
							+ '<div class="col-md-12">'
								+ '<label for="ex2">UF</label>'
								+ '<select class="form-control" name="uf-referenciadas-produtor' + i + '">'
										+ '<option>estado 1</option>'
										+ '<option>estado 2</option>'
								+ '</select>'
							+ '</div>'
							+ '<div class="col-md-6">'
								+ '<label for="ex2">Mês de Emissão</label>'
									+ '<div class="input-group">'
										+ '<input name="mes-referenciadas-produtor' + i + '" type="datetime" class="form-control" />'
										+ '<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>'
									+'</div>'
							+ '</div>'
							+ '<div class="col-md-6">'
								+ '<label for="ex2">Modelo</label>'
								+ '<select class="form-control" name="uf-referenciadas-produtor' + i + '">'
										+ '<option>1</option>'
										+ '<option>4</option>'
								+ '</select>'
							+ '</div>'
						+ '</div>'
						+ '<div class="col-md-6">'
							+ '<div class="col-md-12">'
								+ '<div class="radio" name="tipo-doc-notas-conhecimentos-fiscais' + i + '">'
										+ '<label class="radio-inline">'
											+ '<input type="radio" name="optionsRadios" id="optionsRadios1" value="nfe" checked> CPF'
										+ '</label>'
										+ '<label class="radio-inline">'
											+'<input type="radio" name="optionsRadios" id="optionsRadios2" value="cte" > CNPJ'
										+ '</label>'
								+ '</div>'
							+ '</div>'
							+ '<div class="col-md-12">'
									+ '<label for="ex3">CPF/CNPJ</label>'
									+ '<input name="cpf-cnpj-referenciadas-produtor' + i + '" class="form-control" id="ex3" type="text">'
							+ '</div>'
							+ '<div class="col-md-8">'
									+ '<label for="ex3">Inscrição Estadual do Emitente</label><input class="form-control" id="ex3" type="text" name="ie-emitente-referenciadas-produtor' + i + '">'
							+ '</div>'
							+ '<div class="col-md-4">'
									+ '<label for="ex3">Isento</label><input class="form-control" id="ex3" type="checkbox" name="ie-isento-emitente-referenciadas-produtor' + i + '">'
							+ '</div>'
						+ '</div>'
						+ '<a href="#/" style="float:right" class="linkRemover">'
								+ '<button type="button" class="btn btn-danger">Remover</button>'
						+ '</a>'
			   + '</div>'
		+ '</div">').appendTo(divContent);
        $('#removehidden').remove();
        i++;
        $('<input type="hidden" name="quantidadeCampos" value="' + i + '" id="removehidden">').appendTo(divContent);
    });

    //Cliquando em remover a linha é eliminada
    $('#form-referenciadas-produtor').on('click', '.linkRemover', function () {
        $(this).parents('.conteudoIndividual2').remove();
        i--;
    });
});

//*********FUNCTION PARA INCLUIR CAMPOS NOVA NOTA FISCAL: CUPONS FISCAIS VINCULADOS A NFe

	$(document).ready(function() {
    var divContent = $('#form-cupom-vinculado');
    var botaoAdicionar = $('a[data-id="3"]');
    var i = 1;

    //Ao clicar em incluir são os campos são criados, ou duplicados caso já exista
    $(botaoAdicionar).click(function () {
        $('<div class="conteudoIndividual3">'
				+ '<div class="jumbotron">'
					+ '<div class="container">'
						+ '<div class="col-md-3">'
								+ '<label for="ex2">Numero ECF</label>'
								+ '<input name="ecf-cupom-vinculado' + i + '" class="form-control" id="ex2" type="text">'
						+ '</div>'
						+ '<div class="col-md-3">'
								+ '<label for="ex2">Numero COO</label>'
								+ '<input name="coo-cupom-vinculado' + i + '" class="form-control" id="ex2" type="text">'
						+ '</div>'
						+ '<div class="col-md-2">'
							+ '<label for="ex2">UF</label>'
							+ '<select class="form-control" name="uf-referenciadas-produtor' + i + '">'
									+ '<option>2B</option>'
									+ '<option>2C</option>'
									+ '<option>2D</option>'
							+ '</select>'
						+ '</div>'
						+ '<a href="#/" style="float:right" class="linkRemover">'
							+ '<button type="button" class="btn btn-danger">Remover</button>'
						+ '</a>'	
					+ '</div>'
			   + '</div>'
		+ '</div">').appendTo(divContent);
        $('#removehidden').remove();
        i++;
        $('<input type="hidden" name="quantidadeCampos" value="' + i + '" id="removehidden">').appendTo(divContent);
    });

    //Cliquando em remover a linha é eliminada
    $('#form-cupom-vinculado').on('click', '.linkRemover', function () {
        $(this).parents('.conteudoIndividual3').remove();
        i--;
    });

});

//*********NOVA NOTA FISCAL: REFERENTE A DESTINATARIO/REMETENTE (ENTREGA OU RETIRADA LOCAL DIFERENTE)

$(document).ready(function() {

    // retirada
	$("#check_retira_loc_diferente").change(function(event) {
		 var localRetiradaDiferente = document.getElementById("retiradaDif").innerHTML ;
		 var html = event.target.checked ? localRetiradaDiferente : '';
		 $("#retirada-diferente-emitente").html(html);
	})
	
	//entrega
	$("#check_entrega_loc_diferente").change(function(event) {
		 var localEntregaDiferente = document.getElementById("entregaDif").innerHTML ;
		 var html = event.target.checked ? localEntregaDiferente : '';
		 $("#entrega-diferente-destinatario").html(html);
	})

});