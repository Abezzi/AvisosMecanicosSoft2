


<div class="col-md-8 col-md-offset-2">
	<h1>Mis Avisos</h1>

</div>

	@foreach($anuncio as $anu)
	<div class="panel panel-default">
		<div class="panel-default}" align="center">
			{{$anu->titulo}}
		</div>
		<div class="panel-body">
			@if($anu->imagen)
			    <img class="img-thumbnail img-responsive" src="{{ asset('storage/imagenes/'.$anu->imagen) }}" style="height: 150px;width: 150px;">
			@endif
		</div>
	</div>


	{{$anu->render()}}
	@endforeach

