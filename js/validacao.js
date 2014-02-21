$(document).ready(function(){	
	$(".telefone").mask("(99) 9999-9999");
	$('#form-orcamento, #form-fale-conosco, #form-login, #form-esqueci-senha, #form-area-restrita-cadastro, #form-trocar-senha').validate({
		errorElement: "span",
		rules: {
			nome: {
				required: true
			},
			email: {
				required: true,
				email: true
			},
			emailEsqueci: {
				required: true,
				email: true
			},
			senha: {
				required: true
			},
			endereco: {
				required: true
			},
			cidade: {
				required: true
			},
			estado: {
				required: true
			},
			cep: {
				required: true
			},
			telefone: {
				required: true
			},
			/*receita: {
				required: true
			},*/
			assunto: {
				required: true
			},
			mensagem: {
				required: true
			},
			senha: {
				required: true
			},
			confirmSenha: {
				required: true,
				equalTo: '#senha'
			},
			novaSenha: {
				required: true
			},
			confirmNovaSenha: {
				required: true,
				equalTo: '#novaSenha'
			}
		},
		messages: {
			nome: {
				required: "Este campo &eacute; obrigat&oacute;rio!"
			},
			email: {
				required: "Este campo &eacute; obrigat&oacute;rio!",
				email: "E-mail inv&aacute;lido!"
			},
			emailEsqueci: {
				required: "Este campo &eacute; obrigat&oacute;rio!",
				email: "E-mail inv&aacute;lido!"
			},
			senha: {
				required: "Este campo &eacute; obrigat&oacute;rio!"
			},
			endereco: {
				required: "Este campo &eacute; obrigat&oacute;rio!"
			},
			cidade: {
				required: "Este campo &eacute; obrigat&oacute;rio!"
			},
			estado: {
				required: "Este campo &eacute; obrigat&oacute;rio!"
			},
			cep: {
				required: "Este campo &eacute; obrigat&oacute;rio!"
			},
			telefone: {
				required: "Este campo &eacute; obrigat&oacute;rio!"
			},
			/*receita: {
				required: "Este campo &eacute; obrigat&oacute;rio!"
			},*/
			assunto: {
				required: "Este campo &eacute; obrigat&oacute;rio!"
			},
			mensagem: {
				required: "Este campo &eacute; obrigat&oacute;rio!"
			},
			senha: {
				required: "Este campo &eacute; obrigat&oacute;rio!"
			},
			confirmSenha: {
				required: "Este campo &eacute; obrigat&oacute;rio!",
				equalTo: "As senhas não conferem!"
			},
			novaSenha: {
				required: "Este campo &eacute; obrigat&oacute;rio!"
			},
			confirmNovaSenha: {
				required: "Este campo &eacute; obrigat&oacute;rio!",
				equalTo: "As senhas não conferem!"
			}
		}
	});
});