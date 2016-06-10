//*********FUNCTION PARA INCLUIR CAMPOS NOVA NOTA FISCAL: NOTAS E CONHECIMENTOS FISCAIS REFERENCIADOS
	$(document).ready(function(){
    var text = document.getElementById("teste").innerHTML ;
	var divContent = $('#inserir_icms');
    var botaoAdicionar = $('a[data-id="1"]');
    var i = 1;
		
    //Ao clicar em incluir cria novos campos
    $(botaoAdicionar).click(function () {
         $(text).appendTo(divContent);
        $('#removehidden').remove();
        i++;
        $('<input type="hidden" name="quantidadeCampos" value="' + i + '" id="removehidden">').appendTo(divContent);		


		// ABRIR SELECTS CONFORME SELEÇÃO ANTERIOR

		$('#id_application_method').on('change', function() {         
			
			$('tr.method_options').hide();
			$('#tr_' + $(this).val() ).show();
			
		});
		

    });

	//Clicando em remover a linha é eliminada
    $('#inserir_icms').on('click', '.linkRemover', function () {
        $(this).parents('.conteudoIndividual').remove();
        i--;
    });
	

	
});

