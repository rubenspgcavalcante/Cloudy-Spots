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


/***************************************
* 			Editor Page	
*	
***************************************/	

function render(){
    var g = new Graph();
    
    g.addEdge("1", "2",st = { directed: true});
    g.addEdge("2", "1",st = { directed: true});
    g.addEdge("strawberry", "tomato");
     
    g.addEdge("tomato", "apple");
    g.addEdge("tomato", "kiwi");
     
    g.addEdge("cherry", "apple");
    g.addEdge("cherry", "kiwi");
     
    var layouter = new Graph.Layout.Spring(g);
    layouter.layout();
     
    var renderer = new Graph.Renderer.Raphael('editor-stance', g, 768, 560);
    renderer.draw();
	
	}
	
	render();

});