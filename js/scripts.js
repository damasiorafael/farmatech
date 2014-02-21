/*
 * Desenvolvido por: Rafael Damasio
 * Data da Criação: 19-08-2013
 * Copyright (c) 2013 Rafael Damasio
 */

var loadCss = function(url){
	var link = document.createElement("link");
	link.type = "text/css";
	link.rel = "stylesheet";
	link.href = url;
	document.getElementsByTagName("head")[0].appendChild(link);
}

chamaScript = function(url){
	var script = document.createElement('script');
	script.type = "text/javascript";
	script.src = url;
	document.getElementsByTagName("head")[0].appendChild(script);
}

function chamaDamBox(){
	loadCss('css/dam-box.css');
	setTimeout(function(){
		$('#divOverlay, #contentOverlay').fadeIn();
	}, 600);
	$('#divOverlay, .closeOverlay').click(function(){
		$('#divOverlay, #contentOverlay').fadeOut();
	})
}

function mudaImgLaboratorio(indiceImg){
	$('.item-laboratorio').animate({
		'opacity' : 0
	});
	$('.itemlab-'+indiceImg).animate({
		'opacity' : 1
	});
}

$(document).ready(function(){
	var ua = navigator.userAgent
	if(ua.match('MSIE 7')){
		console.log('IE 7')
		var zIndexNumber = 10000;
		$('div').each(function(){
			$(this).css('zIndex', zIndexNumber);
			zIndexNumber -= 10;
		});
		document.createElement('aside');
		document.createElement('header');
		document.createElement('nav'); 
		document.createElement('article');
		document.createElement('section');
		document.createElement('figure');
		document.createElement('figcaption');
		document.createElement('footer');
	}
	
	if($('form')[0]){
		chamaScript('js/jquery.masked-input.js');
		chamaScript('js/jquery.validate.min.js');
		chamaScript('js/validacao.js');
	}
	
	$('.item-miniatura').click(function(){
		var $this = $(this),
		indiceImg = $this.attr('class').split(' ')[1].split('-')[1];
		mudaImgLaboratorio(indiceImg);
	});
});