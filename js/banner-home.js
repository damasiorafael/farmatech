$(window).load(function(){
	function mudaImgBanner(indxImg){		
		imgAtiva = $('#containerBanner div.bnActive').index();
		$('#containerBanner div').removeClass('bnActive');
		$('#containerBanner div').stop().animate({
			opacity: 0
		}, 900);
		if(indxImg != null && indxImg != ''){
			$('#containerBanner div').eq(indxImg).addClass('bnActive');
			$('#containerBanner div').eq(indxImg).stop().animate({
			   opacity: 1
			}, 1000);
		} else {
			if(imgAtiva+1 >= $('#containerBanner div').size()){
				$('#containerBanner div').eq(0).addClass('bnActive');
				$('#containerBanner div').eq(0).stop().animate({
				   opacity: 1
				}, 1000);
			} else {
				$('#containerBanner div').eq(imgAtiva+1).addClass('bnActive');
				$('#containerBanner div').eq(imgAtiva+1).stop().animate({
				   opacity: 1
				}, 1000);
			}
		}
	}
	
	function mudaBanner(index){
		indiceAtivo = $('#controles span.btActive').index();
		if(index != null && index != ''){
			$('#controles span').removeClass('btActive');
		  	$('#controles span').eq(index).addClass('btActive');
			mudaImgBanner(index);
		} else {
			if($('#controles span').hasClass('btActive')){
				$('#controles span').removeClass('btActive');
				if(indiceAtivo+1 >= $('#controles span').size()){
					$('#controles span').eq(0).addClass('btActive');
				} else {
					$('#controles span').eq(indiceAtivo+1).addClass('btActive');
				}
			}
			mudaImgBanner();
		}
		clearInterval(chamaCarosselAuto);
		chamaCarosselAuto = window.setInterval(function(){
			mudaBanner();
		}, 5000);
	}
	
	$('#controles span').click(function(){
		var $this =  $(this),
		indice = $this.index();
		mudaBanner(indice);
	});
	$('#containerBanner div').animate({opacity: 0}, 1);
	$('#controles span').eq(0).addClass('btActive');
	$('#containerBanner div').eq(0).addClass('bnActive').animate({opacity: 1}, 1, function(){
		chamaCarosselAuto = window.setInterval(function(){
			mudaBanner();
		}, 5000);
	});	
});