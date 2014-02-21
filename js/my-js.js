/* variaveis utilizadas em todo o site (GLOBAIS) */
var urlLojaExterna = 'http://fivediamonds.gmrkomeia.com.br/external_store';
var urlLocal 		= window.location.hostname;
urlLocal			= urlLocal.replace('www', '');
/* variaveis utilizadas em todo o site (GLOBAIS) */

/* FUNCOES DE COOKIES */
var readCookie = function(name) {
	name += "=";
	var ca = document.cookie.split(';'), c, i = 0, l = ca.length;
	while(i < l) {
		c = ca[i];
		while (c.charAt(0) === ' ') {
			c = c.substring(1, c.length);
		}
		if (c.indexOf(name) === 0) {
			return decodeURIComponent(c.substring(name.length, c.length));
		}
		i += 1;
	}
	return null;
};
var writeCookie = function(name, content) {
	var cookie = name + "=" + encodeURIComponent(content) + "; path=/; domain=" + document.domain;
	document.cookie = cookie;
};
var deleteCookie = function(name) {
	document.cookie = name + "=0; expires=Thu, 01 Jan 1970 00:00:00 GMT; path=/; domain=" + document.domain;
};
/* FUNCOES DE COOKIES */

writeCookie('domainName', urlLocal);
if(urlLocal != 'fivediamonds.com.br'){
	if(urlLocal.match('localhost')){
		writeCookie('store_name', 'Locahost');
		$('.name_store_topo').text(readCookie('store_name'));
		$('body').css('display', 'block');
	} else if(readCookie('store_name') != ''){
		$('.name_store_topo').text(readCookie('store_name'));
		$('body').css('display', 'block');
	} else {
		var storeNameCookie = readCookie('store_name');
		$.ajax({
			type: "POST",
			url: "http://192.168.0.182:3000/api/get_store_name",
			data: { domain: urlLocal},
			dataType: 'jsonp',
			crossDomain: true,
			jsonp: false,
			jsonpCallback: 'jsonStore',
			cache: true,
			beforeSend: function(){
				$('body').css('display', 'none');
			},
			success: function(json){
				stores = json.store_name;
				if(storeNameCookie != '' && storeNameCookie == stores){
					$('.name_store_topo').text(storeNameCookie);
					$('body').css('display', 'block');
				} else {
					if(stores != ''){
						writeCookie('store_name', stores);
						$('.name_store_topo').text(stores);
						$('body').css('display', 'block');
					} else {
						window.location='http://www.fivediamonds.com.br';
					}
				}
			}
		});
	}
}

if($('.carousel')[0]){
	$('.carousel').carousel({
		interval : 10000
	});
}
if($('#myModal')[0]){
	$('#myModal').modal({
		show: false
	});
}
if($('#myModal2')[0]){
	$('#myModal2').modal({
		show: false
	});
}
if($('#myModa3')[0]){
	$('#myModal3').modal({
		show: false
	});
}
if($('#myModal4')[0]){
	$('#myModal4').modal({
		show: false
	});
}

if($('.info-preco-frete button')[0]){
	if(urlLocal != 'fivediamonds.com.br' && !urlLocal.match('localhost')){
		$('.info-preco-frete button').click(function(){
			window.location='http://loja.'+urlLocal;
		});
	} else {
		$('.info-preco-frete button').remove();
	}
}

if($('#txtCpf')[0]){
	$('#txtCpf').mask('999.999.999-99', {placeholder: " "});
}