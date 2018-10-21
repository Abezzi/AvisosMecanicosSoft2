<h1>Avisos rechazados por Región</h1>

<div class="box">
	<div class="box-header with-border">
	  <h3 class="box-title">Avisos aceptados por Región</h3>
	</div>
	<!-- /.box-header -->
	<div class="box-body">
	  <table class="table table-bordered">
	    <tr>
	      <th style="width: 10px">#</th>
	      <th>Región</th>
	      <th>Porcentaje de Avisos aceptados</th>
	      <th style="width: 40px">%</th>
	    </tr>

	    <!-- 
	    RM Region Metropolitana
      	XV Arica y Parinacota
      	I Taparacá
      	II Antofagasta
      	III Atacama
      	IV Coquimbo
      	V Vaparaíso
      	VI O'Higgins
      	VII Maule
      	XVI Ñuble
      	VIII Biobío
      	IX Araucanía
      	XIV Los Ríos
      	X Los Lagos
      	XI Aisén
      	XII Magallanes y de la Antártica Chilena
		-->


	    <tr>
	      <td>RM.</td>
	      <td>Region Metropolitana</td>
	      <td>
	      	<?php $anuncios_aceptados = DB::table('anuncio')
	      		->select(DB::raw('count(*) as anuncio_SINPUBLICAR'))
                ->where([
                	['estado', '=', 'SINPUBLICAR'],
                	['region', '=', 13]
            	])
                ->get();

                $anuncios_totales = DB::table('anuncio')
	      		->select(DB::raw('count(*) as anuncio_total'))
                ->where([
                	['region', '=', 13]
            	])
                ->get();
                if($anuncios_totales[0]->anuncio_total != 0) 
            		$res = ($anuncios_aceptados[0]->anuncio_SINPUBLICAR / ($anuncios_totales[0]->anuncio_total) *100);
                else
                	$res = 0;
            ?>

	        <div class="progress progress-xs progress-striped active">
	          <div class="progress-bar progress-bar-danger" style="width: {{$res}}%"></div>
	        </div>
	      </td>

	      <td><span class="badge bg-red">{{$res}}%</span></td>
	    </tr>

	    <tr>
	      <td>XV.</td>
	      <td>Arica y Parinacota</td>
	      <td>
	      	<?php $anuncios_aceptados = DB::table('anuncio')
	      		->select(DB::raw('count(*) as anuncio_SINPUBLICAR'))
                ->where([
                	['estado', '=', 'SINPUBLICAR'],
                	['region', '=', 15]
            	])
                ->get();

                $anuncios_totales = DB::table('anuncio')
	      		->select(DB::raw('count(*) as anuncio_total'))
                ->where([
                	['region', '=', 15]
            	])
                ->get();
            	if($anuncios_totales[0]->anuncio_total != 0) 
            		$res = ($anuncios_aceptados[0]->anuncio_SINPUBLICAR / ($anuncios_totales[0]->anuncio_total) *100);
                else
                	$res = 0;
            ?>

	        <div class="progress progress-xs progress-striped active">
	          <div class="progress-bar progress-bar-danger" style="width: {{$res}}%"></div>
	        </div>
	      </td>
	      <td><span class="badge bg-red">{{$res}}%</span></td>
	    </tr>
	  
	    <tr>
	      <td>I.</td>
	      <td>Taparacá</td>
	      <td>
	      	<?php $anuncios_aceptados = DB::table('anuncio')
	      		->select(DB::raw('count(*) as anuncio_SINPUBLICAR'))
                ->where([
                	['estado', '=', 'SINPUBLICAR'],
                	['region', '=', 1]
            	])
                ->get();

                $anuncios_totales = DB::table('anuncio')
	      		->select(DB::raw('count(*) as anuncio_total'))
                ->where([
                	['region', '=', 1]
            	])
                ->get();
            	if($anuncios_totales[0]->anuncio_total != 0) 
            		$res = ($anuncios_aceptados[0]->anuncio_SINPUBLICAR / ($anuncios_totales[0]->anuncio_total) *100);
                else
                	$res = 0;
            ?>
	        <div class="progress progress-xs progress-striped active">
	          <div class="progress-bar progress-bar-danger" style="width: {{$res}}%"></div>
	        </div>
	      </td>
	      <td><span class="badge bg-red">{{$res}}%</span></td>
	    </tr>

	    <tr>
	      <td>II.</td>
	      <td>Antofagasta</td>
	      <td>
	      	<?php $anuncios_aceptados = DB::table('anuncio')
	      		->select(DB::raw('count(*) as anuncio_SINPUBLICAR'))
                ->where([
                	['estado', '=', 'SINPUBLICAR'],
                	['region', '=', 2]
            	])
                ->get();

                $anuncios_totales = DB::table('anuncio')
	      		->select(DB::raw('count(*) as anuncio_total'))
                ->where([
                	['region', '=', 2]
            	])
                ->get();
            	if($anuncios_totales[0]->anuncio_total != 0) 
            		$res = ($anuncios_aceptados[0]->anuncio_SINPUBLICAR / ($anuncios_totales[0]->anuncio_total) *100);
                else
                	$res = 0;
            ?>
	        <div class="progress progress-xs progress-striped active">
	          <div class="progress-bar progress-bar-danger" style="width: {{$res}}%"></div>
	        </div>
	      </td>
	      <td><span class="badge bg-red">{{$res}}%</span></td>
	    </tr>

	    <tr>
	      <td>III.</td>
	      <td>Atacama</td>
	      <td>
	      	<?php $anuncios_aceptados = DB::table('anuncio')
	      		->select(DB::raw('count(*) as anuncio_SINPUBLICAR'))
                ->where([
                	['estado', '=', 'SINPUBLICAR'],
                	['region', '=', 3]
            	])
                ->get();

                $anuncios_totales = DB::table('anuncio')
	      		->select(DB::raw('count(*) as anuncio_total'))
                ->where([
                	['region', '=', 3]
            	])
                ->get();
            	if($anuncios_totales[0]->anuncio_total != 0) 
            		$res = ($anuncios_aceptados[0]->anuncio_SINPUBLICAR / ($anuncios_totales[0]->anuncio_total) *100);
                else
                	$res = 0;
            ?>
	        <div class="progress progress-xs progress-striped active">
	          <div class="progress-bar progress-bar-danger" style="width: {{$res}}%"></div>
	        </div>
	      </td>
	      <td><span class="badge bg-red">{{$res}}%</span></td>
	    </tr>

	    <tr>
	      <td>IV.</td>
	      <td>Coquimbo</td>
	      <td>
	      	<?php $anuncios_aceptados = DB::table('anuncio')
	      		->select(DB::raw('count(*) as anuncio_SINPUBLICAR'))
                ->where([
                	['estado', '=', 'SINPUBLICAR'],
                	['region', '=', 4]
            	])
                ->get();

                $anuncios_totales = DB::table('anuncio')
	      		->select(DB::raw('count(*) as anuncio_total'))
                ->where([
                	['region', '=', 4]
            	])
                ->get();
            	if($anuncios_totales[0]->anuncio_total != 0) 
            		$res = ($anuncios_aceptados[0]->anuncio_SINPUBLICAR / ($anuncios_totales[0]->anuncio_total) *100);
                else
                	$res = 0;
            ?>
	        <div class="progress progress-xs progress-striped active">
	          <div class="progress-bar progress-bar-danger" style="width: {{$res}}%"></div>
	        </div>
	      </td>
	      <td><span class="badge bg-red">{{$res}}%</span></td>
	    </tr>

	    <tr>
	      <td>V.</td>
	      <td>Vaparaíso</td>
	      <td>
	      	<?php $anuncios_aceptados = DB::table('anuncio')
	      		->select(DB::raw('count(*) as anuncio_SINPUBLICAR'))
                ->where([
                	['estado', '=', 'SINPUBLICAR'],
                	['region', '=', 5]
            	])
                ->get();

                $anuncios_totales = DB::table('anuncio')
	      		->select(DB::raw('count(*) as anuncio_total'))
                ->where([
                	['region', '=', 5]
            	])
                ->get();
            	if($anuncios_totales[0]->anuncio_total != 0) 
            		$res = ($anuncios_aceptados[0]->anuncio_SINPUBLICAR / ($anuncios_totales[0]->anuncio_total) *100);
                else
                	$res = 0;
            ?>
	        <div class="progress progress-xs progress-striped active">
	          <div class="progress-bar progress-bar-danger" style="width: {{$res}}%"></div>
	        </div>
	      </td>
	      <td><span class="badge bg-red">{{$res}}%</span></td>
	    </tr>

	    <tr>
	      <td>VI.</td>
	      <td>O'Higgins</td>
	      <td>
	      	<?php $anuncios_aceptados = DB::table('anuncio')
	      		->select(DB::raw('count(*) as anuncio_SINPUBLICAR'))
                ->where([
                	['estado', '=', 'SINPUBLICAR'],
                	['region', '=', 6]
            	])
                ->get();

                $anuncios_totales = DB::table('anuncio')
	      		->select(DB::raw('count(*) as anuncio_total'))
                ->where([
                	['region', '=', 6]
            	])
                ->get();
            	if($anuncios_totales[0]->anuncio_total != 0) 
            		$res = ($anuncios_aceptados[0]->anuncio_SINPUBLICAR / ($anuncios_totales[0]->anuncio_total) *100);
                else
                	$res = 0;
            ?>
	        <div class="progress progress-xs progress-striped active">
	          <div class="progress-bar progress-bar-danger" style="width: {{$res}}%"></div>
	        </div>
	      </td>
	      <td><span class="badge bg-red">{{$res}}%</span></td>
	    </tr>

	    <tr>
	      <td>VII.</td>
	      <td>Maule</td>
	      <td>
	      	<?php $anuncios_aceptados = DB::table('anuncio')
	      		->select(DB::raw('count(*) as anuncio_SINPUBLICAR'))
                ->where([
                	['estado', '=', 'SINPUBLICAR'],
                	['region', '=', 7]
            	])
                ->get();

                $anuncios_totales = DB::table('anuncio')
	      		->select(DB::raw('count(*) as anuncio_total'))
                ->where([
                	['region', '=', 7]
            	])
                ->get();
            	if($anuncios_totales[0]->anuncio_total != 0) 
            		$res = ($anuncios_aceptados[0]->anuncio_SINPUBLICAR / ($anuncios_totales[0]->anuncio_total) *100);
                else
                	$res = 0;
            ?>
	        <div class="progress progress-xs progress-striped active">
	          <div class="progress-bar progress-bar-danger" style="width: {{$res}}%"></div>
	        </div>
	      </td>
	      <td><span class="badge bg-red">{{$res}}%</span></td>
	    </tr>

	    <tr>
	      <td>XVI.</td>
	      <td>Ñuble</td>
	      <td>
	      	<?php $anuncios_aceptados = DB::table('anuncio')
	      		->select(DB::raw('count(*) as anuncio_SINPUBLICAR'))
                ->where([
                	['estado', '=', 'SINPUBLICAR'],
                	['region', '=', 16]
            	])
                ->get();

                $anuncios_totales = DB::table('anuncio')
	      		->select(DB::raw('count(*) as anuncio_total'))
                ->where([
                	['region', '=', 16]
            	])
                ->get();
            	if($anuncios_totales[0]->anuncio_total != 0) 
            		$res = ($anuncios_aceptados[0]->anuncio_SINPUBLICAR / ($anuncios_totales[0]->anuncio_total) *100);
                else
                	$res = 0;
            ?>
	        <div class="progress progress-xs progress-striped active">
	          <div class="progress-bar progress-bar-danger" style="width: {{$res}}%"></div>
	        </div>
	      </td>
	      <td><span class="badge bg-red">{{$res}}%</span></td>
	    </tr>

	    <tr>
	      <td>VIII.</td>
	      <td>Biobío</td>
	      <td>
	      	<?php $anuncios_aceptados = DB::table('anuncio')
	      		->select(DB::raw('count(*) as anuncio_SINPUBLICAR'))
                ->where([
                	['estado', '=', 'SINPUBLICAR'],
                	['region', '=', 8]
            	])
                ->get();

                $anuncios_totales = DB::table('anuncio')
	      		->select(DB::raw('count(*) as anuncio_total'))
                ->where([
                	['region', '=', 8]
            	])
                ->get();
            	if($anuncios_totales[0]->anuncio_total != 0) 
            		$res = ($anuncios_aceptados[0]->anuncio_SINPUBLICAR / ($anuncios_totales[0]->anuncio_total) *100);
                else
                	$res = 0;
            ?>
	        <div class="progress progress-xs progress-striped active">
	          <div class="progress-bar progress-bar-danger" style="width: {{$res}}%"></div>
	        </div>
	      </td>
	      <td><span class="badge bg-red">{{$res}}%</span></td>
	    </tr>

	    <tr>
	      <td>IX.</td>
	      <td>Araucanía</td>
	      <td>
	      	<?php $anuncios_aceptados = DB::table('anuncio')
	      		->select(DB::raw('count(*) as anuncio_SINPUBLICAR'))
                ->where([
                	['estado', '=', 'SINPUBLICAR'],
                	['region', '=', 9]
            	])
                ->get();

                $anuncios_totales = DB::table('anuncio')
	      		->select(DB::raw('count(*) as anuncio_total'))
                ->where([
                	['region', '=', 9]
            	])
                ->get();
            	if($anuncios_totales[0]->anuncio_total != 0) 
            		$res = ($anuncios_aceptados[0]->anuncio_SINPUBLICAR / ($anuncios_totales[0]->anuncio_total) *100);
                else
                	$res = 0;
            ?>
	        <div class="progress progress-xs progress-striped active">
	          <div class="progress-bar progress-bar-danger" style="width: {{$res}}%"></div>
	        </div>
	      </td>
	      <td><span class="badge bg-red">{{$res}}%</span></td>
	    </tr>

	    <tr>
	      <td>XIV.</td>
	      <td>Los Ríos</td>
	      <td>
	      	<?php $anuncios_aceptados = DB::table('anuncio')
	      		->select(DB::raw('count(*) as anuncio_SINPUBLICAR'))
                ->where([
                	['estado', '=', 'SINPUBLICAR'],
                	['region', '=', 14]
            	])
                ->get();

                $anuncios_totales = DB::table('anuncio')
	      		->select(DB::raw('count(*) as anuncio_total'))
                ->where([
                	['region', '=', 14]
            	])
                ->get();
            	if($anuncios_totales[0]->anuncio_total != 0) 
            		$res = ($anuncios_aceptados[0]->anuncio_SINPUBLICAR / ($anuncios_totales[0]->anuncio_total) *100);
                else
                	$res = 0;
            ?>
	        <div class="progress progress-xs progress-striped active">
	          <div class="progress-bar progress-bar-danger" style="width: {{$res}}%"></div>
	        </div>
	      </td>
	      <td><span class="badge bg-red">{{$res}}%</span></td>
	    </tr>

	    <tr>
	      <td>X.</td>
	      <td>Los Lagos</td>
	      <td>
	      	<?php $anuncios_aceptados = DB::table('anuncio')
	      		->select(DB::raw('count(*) as anuncio_SINPUBLICAR'))
                ->where([
                	['estado', '=', 'SINPUBLICAR'],
                	['region', '=', 10]
            	])
                ->get();

                $anuncios_totales = DB::table('anuncio')
	      		->select(DB::raw('count(*) as anuncio_total'))
                ->where([
                	['region', '=', 10]
            	])
                ->get();
            	if($anuncios_totales[0]->anuncio_total != 0) 
            		$res = ($anuncios_aceptados[0]->anuncio_SINPUBLICAR / ($anuncios_totales[0]->anuncio_total) *100);
                else
                	$res = 0;
            ?>
	        <div class="progress progress-xs progress-striped active">
	          <div class="progress-bar progress-bar-danger" style="width: {{$res}}%"></div>
	        </div>
	      </td>
	      <td><span class="badge bg-red">{{$res}}%</span></td>
	    </tr>

	    <tr>
	      <td>XI.</td>
	      <td>Aisén</td>
	      <td>
	      	<?php $anuncios_aceptados = DB::table('anuncio')
	      		->select(DB::raw('count(*) as anuncio_SINPUBLICAR'))
                ->where([
                	['estado', '=', 'SINPUBLICAR'],
                	['region', '=', 11]
            	])
                ->get();

                $anuncios_totales = DB::table('anuncio')
	      		->select(DB::raw('count(*) as anuncio_total'))
                ->where([
                	['region', '=', 11]
            	])
                ->get();
            	if($anuncios_totales[0]->anuncio_total != 0) 
            		$res = ($anuncios_aceptados[0]->anuncio_SINPUBLICAR / ($anuncios_totales[0]->anuncio_total) *100);
                else
                	$res = 0;
            ?>
	        <div class="progress progress-xs progress-striped active">
	          <div class="progress-bar progress-bar-danger" style="width: {{$res}}%"></div>
	        </div>
	      </td>
	      <td><span class="badge bg-red">{{$res}}%</span></td>
	    </tr>

	    <tr>
	      <td>XII.</td>
	      <td>Magallanes y de la Antártica Chilena</td>
	      <td>
	      	<?php $anuncios_aceptados = DB::table('anuncio')
	      		->select(DB::raw('count(*) as anuncio_SINPUBLICAR'))
                ->where([
                	['estado', '=', 'SINPUBLICAR'],
                	['region', '=', 12]
            	])
                ->get();

                $anuncios_totales = DB::table('anuncio')
	      		->select(DB::raw('count(*) as anuncio_total'))
                ->where([
                	['region', '=', 12]
            	])
                ->get();
            	if($anuncios_totales[0]->anuncio_total != 0) 
            		$res = ($anuncios_aceptados[0]->anuncio_SINPUBLICAR / ($anuncios_totales[0]->anuncio_total) *100);
                else
                	$res = 0;
            ?>
	        <div class="progress progress-xs progress-striped active">
	          <div class="progress-bar progress-bar-danger" style="width: {{$res}}%"></div>
	        </div>
	      </td>
	      <td><span class="badge bg-red">{{$res}}%</span></td>
	    </tr>

	  </table>
	</div>
</div>
