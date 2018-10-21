$(document).ready(function(){
	$('#alert').hide();
	$('borra').click(function(e){
		e.preventDefault();
		if (!confirm("¿Estas seguro que deseas eliminar?")) {
			return false;
		}
		//no se ejecuta

		var row = $(this).parents('tr');
		var form  = $(this).parents('form');
		var url  = form.attr('action');

		$('#alert').show();

		$.post(url, form.serialize(), function(result){
			row.fadeOut();
			$('#archivos-total').html(result.total);
			$('#alert').html(result.message);

		}).fail(function(){
			$('#alert').html('Algo salió mal');
		});
	});

});