
var g = new Graph();
var renderer = new Graph.Renderer.Raphael('editor-stance', g, 768, 560);
var layouter = new Graph.Layout.Spring(g);

function render(){
	layouter.layout();
	renderer.draw();
}

function addNode(id, nodeName){
	if(nodeName=null)
		g.addNode(id, { label : id });
	else
		g.addNode(id, { label : nodeName });
	render();
}

function addLink(node1, node2, weight, directed){
	weight   = typeof(weight)   != 'undefined' ? weight   : '0';
	directed = typeof(directed) != 'undefined' ? directed : false;
	g.addEdge(node1, node2,{label: weight, directed: directed})
	render();
}

function removeNode(id){
	//Deleting the text
	$("svg #"+id).next().remove();
	
	//Deleting the node
	$("svg #"+id).remove();

}