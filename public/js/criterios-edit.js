$(function() {
	$('#select-criterio-edit').on('change',crite);

});

$(function() {
	$('#select-debilidad-edit').on('change',critess);

});

function crite(){
	var criterio_id = $(this).val();
	$.get('/niveles/'+criterio_id+'/niv',function(data){
		var html_select = '<option value="" >Seleccionar...</option>';
		for (var i = 0; i <data.length; ++i) 	
			html_select += '<option value="'+data[i].id+'">'+data[i].nombre_comuna+'</option>'
		
		$('#select-debilidad-edit').html(html_select);
	});
}

function critess(){
	var frecu = $(this).val();
	$.get('/radiosedit/'+frecu+'/niveles',function(data){
		var html_select = '<option value="" >Seleccionar...</option>';
		for (var j = 0; j <data.length; ++j) 	
			html_select += '<option value="'+data[j].id+'">'+data[j].frecuencia+'</option>'
		
		$('#select-frecuencia-edit').html(html_select);
	});
}