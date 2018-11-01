<h1>Publicar Anuncio</h1>
<form class="col s12" action="{!!URL::to('/cliente/anuncios/publicar')!!}" method="POST" enctype="multipart/form-data">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">

	<div class="box box-success">
		<div class="box-header with-border">
		  	<h3 class="box-title"><i class='fa fa-street-view'></i> Ubicación de tu publicación</h3>
		  	<div class="box-tools pull-right">
		    	<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
		  	</div>
		</div>
		<!-- /.box-header -->
		<div class="box-body">
		  	<div class="row">
		    	<div class="col-md-12">
		      		<div class="form-group">
		        		<label>Región</label>
		        		<select id="region" name="region" class="form-control select2" style="width: 100%;" onchange="populate('region', 'comuna')">
				            <option value="" disabled selected>Elija una region</option>
				            <option value="7">RM Region Metropolitana</option>
				          	<option value="1">XV Arica y Parinacota</option>
				          	<option value="2">I Taparacá</option>
				          	<option value="3">II Antofagasta</option>
				          	<option value="4">III Atacama</option>
				          	<option value="5">IV Coquimbo</option>
				          	<option value="6">V Vaparaíso</option>
				          	<option value="8">VI O'Higgins</option>
				          	<option value="9">VII Maule</option>
				          	<option value="10">VIII Biobío</option>
				          	<option value="11">IX Araucanía</option>
				          	<option value="12">XIV Los Ríos</option>
				          	<option value="13">X Los Lagos</option>
				          	<option value="14">XI Aisén</option>
				          	<option value="15">XII Magallanes y de la Antártica Chilena</option>
				        </select>
		      		</div>
		    	</div>
		  	</div>
		  	<div class="row">
		    	<div class="col-md-12">
		      		<div id="selectcomuna">
		        		
		        	            
				        
		      		</div>
		    	</div>
		  	</div>
		</div>
	</div>




	<div class="box box-primary">
		<div class="box-header with-border">
	  		<h3 class="box-title"><i class='fa fa-info-circle'></i> Información de tu Anuncio</h3>
		  	<div class="box-tools pull-right">
		    	<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
		  	</div>
		</div>
	<!-- /.box-header -->
		<div class="box-body">
		      	<div class="form-group">
		        	<label>Categoria</label>
		        	<select id="categoria" name="id_categoria" class="form-control select2" style="width: 100%;">
			        	<option value=""disabled selected>Seleccione una categoria</option>
			        	@foreach($categoria as $categori)       
					    <option value="{{$categori->id}}">{{$categori->nombre}}</option>
					    @endforeach
				    </select>
		      	</div>


			    <div class="form-group">
			        <label for="titulo_anuncio">Titulo</label>
			        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Vendo o ofresco mis servicios de">
			    </div>
			    <div class="form-group">
			        <label for="descripcion">Descripción</label>
			        <textarea id="descripcion" name="descripcion" class="form-control" rows="3" placeholder="Mi servicio o producto consiste en..."></textarea>
			    </div>
			    <div class="form-group">
			        <label for="precio">Precio en pesos Chilenos (CLP)</label>
			        <input id="precio" name="precio" type="number" class="form-control" id="titulo_anuncio" placeholder="ej. 1000">
			    </div>
			    <div class="form-group">
			        <label for="file">Imagen de muestra</label>
			        <input type="file" id="file" name="file[]" accept="image/*" id="imagen1" onchange="verificarExtension(this,limpiar1)" multiple>
			        <p class="help-block"><i class='fa fa-camera'></i>  Un aviso con fotografía se visualiza siete veces más que un aviso sin fotografía.</p>
			    </div>
		</div>
	</div>
<!-- UBICACION ---------------------------->





<div class="box box-danger">
<div class="box-header with-border">
  	<h3 class="box-title"><i class='fa fa-warning'></i> Finalizar Publicación</h3>
  	<div class="box-tools pull-right">
    	<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
  	</div>
</div>
<!-- /.box-header -->
<div class="checkbox">
	<label>
    	<input type="checkbox" required> Acepto los términos y condiciones
  	</label>
</div>
<div class="box-footer">
	<button data-toggle="modal" data-target="#myModal" type="submit" class="btn btn-danger">Publicar</button>
</form>

<!-- Modal Success Popup -->
<div class="modal fade success-popup" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
         <div class="callout callout-success">
                <h4>Aviso correctamente ingresado!</h4>
                <p>Su aviso será revisado y estará visible en el sitio a la brevedad, gracias por su preferencia</p>
              </div>  
    </div>
  </div>
</div>



<script type="text/javascript">
	$(document).ready(function(){
		//$('#region').val(9);
		recargarLista();

		$('#region').change(function(){
			recargarLista();
		});
	})
</script>

<script type="text/javascript">
	function recargarLista(){
		$.ajax({
			type:"POST",
			url:"data.php",
			data:"regiones=" + $('#region').val(),
			success:function(r){
				$('#selectcomuna').html(r);
			}
		});
	}
</script>