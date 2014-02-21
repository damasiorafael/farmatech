$(document).ready(function(){
	$('span.uni-servicos').eq(0).addClass('ativo')
	$('.titles-servicos li').find('span').click(function(){
		var $this = $(this),
		indexMenu = $this.parent().index();
		$('.titles-servicos li').find('span').removeClass('ativo');
		$this.addClass('ativo');
		$('ul.conteudo-servico li').fadeOut();
		$('ul.conteudo-servico li').each(function(){
			var $this = $(this),
			liAtiva = $this.index();
			if(liAtiva == indexMenu){
				setTimeout(function(){
					$this.fadeIn();
				}, 500);
			}
		})
	});
	
	$('.titles-servicos li').find('span.ativo').each(function(){
		var $this = $(this),
		numIndex = $this.parent().index();
		console.log(numIndex);
		$('ul.conteudo-servico li').each(function(){
			var $this = $(this),
			liAtiva = $this.index();
			if(liAtiva == numIndex){
				setTimeout(function(){
					$this.fadeIn();
				}, 500)
			}
		})
	})
});