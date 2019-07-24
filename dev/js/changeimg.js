$(function(){
	var wid = $(window).width();

	if( wid < 768 ){
		$('.changeimg').each(function(){
			$(this).attr("src",$(this).data("img").replace('_pc', '_tb'));
		});
	}else {
		$('.changeimg').each(function(){
			$(this).attr("src",$(this).data("img"));
		});
	}
});
