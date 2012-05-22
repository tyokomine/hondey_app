$('#product').draggable({
	revert : true,
	//containment : ".book"
});
console.log("ie");
$('.product_recommend').droppable({
	accept : '#product',
	tolerance : "intersect",
	drop : function(e, ui) {
		alert('ドロップされました');
		console.log(this.src);
		console.log("へるぱー" + ui.helper);
		console.log("へるぱー" + ui.draggable);
		console.log("おぷしょん" + ui.options);
		this.src = ui.draggable.src;
	}
});
