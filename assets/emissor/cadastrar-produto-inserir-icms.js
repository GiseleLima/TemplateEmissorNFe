var CadastroICMSProduto = angular.module('icmssProdutos', []);

CadastroICMSProduto.controller('IcmssProdutosController', ['$scope', '$location', function($scope, $location) {

  $scope.ICMSs = [];

  $scope.IncluirICMS = function() {
    $scope.ICMSs.push({});
  }
  
  $scope.removerIcms = function(icms) {
  	var index = $scope.ICMSs.indexOf(icms);
  	$scope.ICMSs.splice(index, 1); 
  }

  $scope.data = [{
    "id": "0",
    "regime": "Tributação Normal",
    "SituacaoTributaria": [{
			"value": 00,
			"situacao": "00 - Tributada Integralmente"
		}, {
			"value": 10,
			"situacao": "10 - Tributada com Cobrança de ICMS por ST"

		}, {
			"value": "10-1",
			"situacao": "10 - Tributada com Cobrança de ICMS por ST (Com partilha de ICMS entre a UF de Origem e a UF de Destino Ou a UF definida na Legislação)"
		  
		}, {
			"value": 20,
			"situacao": "20 - Com redução de base de cálculo "
			
		}, {
			"value": 30,
			"situacao": "30 - Isenta ou não tributada e com cobrança do ICMS por substituição tributária"	  
		}, {
			"value": 40,
			"situacao": "40 - Isenta "	  
		}, {
			"value": 41,
			"situacao": "41 - Não tributada"	  
		},{
			"value": 41-1,
			"situacao": "41 - Não tributada (ICMSST devida para a UF de destino, nas operações interestaduais de produtos que tiverem retenção antecipada de ICMS por ST na UF do remetente)"	  
		}],
    "Origens": [{
			"value": 0,
			"Origem": "0 - Nacional - Exceto as indicadas nos códigos 3,4,5 e 8"	  
		}, {
			"value": 1,
			"Origem": "1 - Estrangeira - Importação Direta"	  
		}, {
			"value": 2,
			"Origem": "2 - Estrangeira - Adq. no mercado interno"	  
		}, {
			"value": 3,
		  "Origem": "3 - Nacional - com Conteúdo de Importação superior a 40% e inferior ou igual a 70%"	  
		}, {
			"value": 4,
			"Origem": "4 - Nacional - cuja produção tenha sido feita em conformidade"	  
		}, {
			"value": 5,
		  "Origem": "5 - Nacional - com Conteúdo de Importação inferior ou igual a 40%"
		  
		}, {
			"value": 6,
			"Origem": "6 - Estrangeira - Imp. direta, sem similar nacional, na lista da CAMEX"	  
		}, {
			"value": 7,
			"Origem": "7 - Estrangeira - Adq. interno, sem similar nacional, na lista da CAMEX"	  
		}, {
			"value": 8,
			"Origem": "8 - Nacional - Mercadoria ou bem com Conteúdo de Importação superior a 70%"	  
		}],
	"ModaliBcICMS": [{
			"value": 0,
			"Modali": "0 - Margem Valor Agregado (%)"	  
		}, {
			"value": 1,
			"Modali": "1 - Pauta (Valor)"	  
		}, {
			"value": 2,
			"Modali": "2 - Preço Tabelado Máx. (valor)"	  
		}, {
			"value": 3,
			"Modali": "3 - Valor da operação"	  
		}],
	"ModaliBcICMSst": [{
			"value": 0,
			"ModaliST": "0 – Preço tabelado ou máximo sugerido"	  
		}, {
			"value": 1,
			"ModaliST": "1 - Lista Negativa (valor)"	  
		}, {
			"value": 2,
			"ModaliST": "2 - Lista Positiva (valor)"	  
		}, {
			"value": 3,
			"ModaliST": "3 - Lista Neutra (valor)"	  
		}, {
			"value": 4,
			"ModaliST": "4 - Margem Valor Agregado (%)"	  
		}, {
			"value": 5,
			"ModaliST": "5 - Pauta (valor)"	  
		}]   		
  }, {
    "id": "1",
    "regime": "Simples Nacional",
    "SituacaoTributaria": [{
		"value": 00,
      "situacao": "Building #4"
    }, {
		"value": 00,
      "situacao": "Building #5"
    }, {
		"value": 00,
      "situacao": "Building #6"
	  
    }],
 "Origens": [{
		"value": 0,
		"Origem": "0 - Nacional - Exceto as indicadas nos códigos 3,4,5 e 8"	  
    }, {
		"value": 1,
		"Origem": "1 - Estrangeira - Importação Direta"	  
    }, {
		"value": 2,
		"Origem": "2 - Estrangeira - Adq. no mercado interno"	  
    }, {
		"value": 3,
      "Origem": "3 - Nacional - com Conteúdo de Importação superior a 40% e inferior ou igual a 70%"	  
    }, {
		"value": 4,
		"Origem": "4 - Nacional - cuja produção tenha sido feita em conformidade"	  
    }, {
		"value": 5,
      "Origem": "5 - Nacional - com Conteúdo de Importação inferior ou igual a 40%"
	  
    }, {
		"value": 6,
		"Origem": "6 - Estrangeira - Imp. direta, sem similar nacional, na lista da CAMEX"	  
    }, {
		"value": 7,
		"Origem": "7 - Estrangeira - Adq. interno, sem similar nacional, na lista da CAMEX"	  
    }, {
		"value": 8,
		"Origem": "8 - Nacional - Mercadoria ou bem com Conteúdo de Importação superior a 70%"	  
    }]
  }];
  
  
}]);
