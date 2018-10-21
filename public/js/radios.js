$(function() {
	$('#select-comunas').on('change',crite);

});

function crite(){
	var radio = $(this).val();
	$.get('radios/'+radio+'/niveles',function(data){
		var html_select = '<option value="" >Seleccionar...</option>';
		for (var i = 0; i <data.length; ++i) 	
			html_select += '<option value="'+data[i].id+'">'+data[i].frecuencia+'</option>'
		
		$('#select-frecuencia').html(html_select);
	});
}