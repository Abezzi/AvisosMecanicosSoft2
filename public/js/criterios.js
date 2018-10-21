$(function() {
	$('#select-regiones').on('change',crite);

});

$(function() {
	$('#select-comunas').on('change',crites);

});

function crite(){
	var region_id = $(this).val();
	$.get('regiones/'+region_id+'/niveles',function(data){
		var html_select = '<option value="" >Seleccionar...</option>';
		for (var i = 0; i <data.length; ++i) 	
			html_select += '<option value="'+data[i].id+'">'+data[i].nombre_comuna+'</option>'
		
		$('#select-comunas').html(html_select);
	});
}

function crites(){
	var region = $(this).val();
	$.get('radios/'+region+'/niveles',function(data){
		var html_select = '<option value="" >Seleccionar...</option>';
		for (var j = 0; j <data.length; ++j) 	
			html_select += '<option value="'+data[j].id+'">'+data[j].frecuencia+'</option>'
		
		$('#select-frecuencia').html(html_select);
	});
}