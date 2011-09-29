$(document).ready(function(){	
	
/***************************************
* 			Login page efects	
*	
***************************************/	
	//Slider
	$(window).load(function() {
	    $('#slider').nivoSlider({
	    	effect: "fade",
	    	animSpeed: 1000,
	        pauseTime: 6000,
	    	
	    	
	    });
	});
	
	//Social icon efect
	$(".social-icon").mouseover(function(element){
		$(element.target).stop(false,true);
		$(element.target).animate({
			"bottom":"+=5px",
		}, { duration: 100, queue: false} );
	});
	$(".social-icon").mouseout(function(element){
		$(element.target).stop(false,true);
		$(element.target).animate({
			"bottom":"-=5px",
		}, {duration: "slow", queue: false});
	
	});
});
