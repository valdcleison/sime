$(function(){

	$("#search").keyup(function(){
	
	var pesquisa = $(this).val();
	
	//Verificar se há algo digitado
	console.log(pesquisa);
	if(pesquisa != ''){
		var dados = {
			palavra : pesquisa
		}		
		$.post('/portal/aluno/search/', dados, function(retorna){
			//Mostra dentro da ul os resultado obtidos 
			
			$("#teste").html(retorna);
		});
	}else if(pesquisa == "__-__-____"){
			var dados = {
				palavra : pesquisa
			}	
			
			$.post('/portal/aluno/search/', dados, function(retorna){
			//Mostra dentro da ul os resultado obtidos 
			
				$("#teste").html(retorna);
			});
		}
	});

	
	$("#search").focusout(function(){
		
		
		var pesquisa = $(this).val();

		if(ValidaData(pesquisa) == true){
			if(pesquisa != ''){
				var dados = {
					palavra : pesquisa
				}		
				$.post('/portal/aluno/search/', dados, function(retorna){
					//Mostra dentro da ul os resultado obtidos 
					
					$("#teste").html(retorna);
				});
			}
		}else{
			if(pesquisa != ''){
				var dados = {
					palavra : "__-__-____"
				}		
				$.post('/portal/aluno/search/', dados, function(retorna){
					//Mostra dentro da ul os resultado obtidos 
					
					$("#teste").html(retorna);
				});
			}
		}
		
	
	});
	

	function ValidaData(valor){
      var date=valor;
		var ardt=new Array;
		var ExpReg=new RegExp("(0[1-9]|[12][0-9]|3[01])-(0[1-9]|1[012])-[12][0-9]{3}");
		ardt=date.split("-");
		erro=false;
		if ( date.search(ExpReg)==-1){
			erro = true;
			}
		else if (((ardt[1]==4)||(ardt[1]==6)||(ardt[1]==9)||(ardt[1]==11))&&(ardt[0]>30))
			erro = true;
		else if ( ardt[1]==2) {
			if ((ardt[0]>28)&&((ardt[2]%4)!=0))
				erro = true;
			if ((ardt[0]>29)&&((ardt[2]%4)==0))
				erro = true;
		}
		if (erro) {
			
			return false;
		}
		return true;                      // se inválida :(
    }



});