const base_url = window.location.protocol+"//"+window.location.host+"/gestor";

addForm = (page, form) =>{
	let dados = $(form).serialize();
	$.ajax({
		url: page,
		type: 'POST',
		data: dados,
		success: (data) => {
			console.log(data);
			if(data == 1){
		 	    alert("Cadastro Adicionado com Sucesso!");
			 	window.location.href = base_url+"/visita/inicio/index";
			}
	
		},
		error: (error) => {
			console.log(error);
		}
	})

	return false;
}