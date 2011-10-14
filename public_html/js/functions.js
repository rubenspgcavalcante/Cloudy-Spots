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
var lastNode = 0;
$("#addNode").click(function(){
	addNode(lastNode++);
});

$("#removeNode").click(function(){
	//Match only numbers foloowed by cottons
	var reg = /^(?!,)(\d|,)*\d*$/m;
	var nodesVals = "";
	nodeVals = prompt("Delete Node\n\nSet one or a list of nodes, separeted by cottons to delete\ne.g.: 1,4,7,0,18");
	
	if(!reg.test(nodeVals) || nodeVals == null || nodeVals == ""){
		alert("Sorry, wrong format inserted.\nPlease try again.");
		return false;
	}
	confirm("The following nodes will be deleted:\n" + nodeVals);
	if(nodeVals.indexOf(",")!=-1){
		nodeVals = nodeVals.split(",");
		for(node in nodeVals){
			removeNode(node);
		}
		return true;
	}
	else{
		removeNode(nodeVals);
		return true;
	}
});


$("#addLink").click(function(){
	var clk_cnt = 0;
	var firstNode, secondNode;
	$("svg ellipse").attr({style: "cursor: crosshair"});
	$("svg ellipse").bind('click', function(element){
		clk_cnt++;
		if(clk_cnt == 1) firstNode = $(element.target).attr("id");
		else if(clk_cnt == 2){
			secondNode = $(element.target).attr("id");
			$("svg ellipse").attr({style: "cursor: default"});
			$("svg ellipse").unbind("click");
			
			weight = prompt("Select the link weight");
			var reg = /^\d+$/m; 
			if(!reg.test(weight) || weight == null || weight == ""){
				alert("Sorry, only integers permited");
				return false;
			}
			addLink(firstNode, secondNode, weight, true);
			return true;
		}
		
	});
	

});

});