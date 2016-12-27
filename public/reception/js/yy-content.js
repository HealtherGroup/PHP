
/*$('#sp').click(function(){
	$('#xs').show();
});
$('#sp').mouseout(function(){
	$('#xs').hide();
});*/

$().ready(function(){
    $('#sp'). click(function(){
    	$(this).children().eq(0).toggle();
       /*$('#xs').toggle();*/
    })
})
