$( document ).ready(function() {

	//collapse and expand sections
	$('#tableMain').on('click', 'tr.breakrow',function(){
	$(this).nextUntil('tr.breakrow').slideToggle(200);
	
});
