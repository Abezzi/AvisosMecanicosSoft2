@extends('adminlte::layouts.app')

@section('htmlheader_title')

	{{ trans('Archivos') }}

@endsection

@section('main-content')
	
            <div class="box-header">
              <h3 class="box-title">Archivos</h3>
            </div>
        
        <div class="container">   	
           	<div class="row">	
           		<div class="col-md-8 col-md-offset-2">
            		<div class="panel panel-default">
            			<div class="panel-heading"> Archivos </div>
              				<div class="panel-body">

              				<p>
							
								<span id="archivo-total"> {{ $archivos->total()}} </span> registros |
								página {{ $archivos->currentPage() }}
								de {{ $archivos->lastPage()}}
							
							</p>
 
							<div id="alert" class="alert alert-info"></div>	

			              	<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">

			                <thead>

				                <tr role="row">

					                <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">ID Archivo</th>
					                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Nombre</th>
					                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Peso</th>

				                </tr>
			                </thead>

			                <tbody>
			                
				                @foreach ($archivos as $archivo)   

				                <tr role="row" class="odd">
				                  <td class="sorting_1"> <a href="{{ url('/verpdf/'.$archivo->id) }}" >{{$archivo->id}}</a></td>
				                  <td>{{$archivo->name}} </td>
				                  <td>{{$archivo->size.'	Kbps'}}</td>

				                  
				                  
				                  <td width="20px">

				                  {!! Form::open( ['route' => ['eliminarArchivo', $archivo->id.'-'.$item->id], 'method' => 'DELETE'])!!}
{{-- 					                  <form role="form" action="/archivos/.'$archivo->$id'" method="post">
					                  	{{method_field('DELETE')}}	
					                  	<a href="#" class="btn-delete">Eliminar</a>
					                  </form> --}}
					                  <a href="#" class="btn-delete"><i class="fa fa-trash-o fa-2x" aria-hidden="true"></i></a>
					               {!! Form::close() !!}

				                  </td>
				                  

				                </tr>

				                <tr role="row" class="even">

				                @endforeach

			                </tbody>
			              </table>

			              {!! $archivos->render() !!}

              			</div>
              		</div>	
              	</div>
			</div>
		</div>
@endsection

@section('script')
	<script src="{{ asset ('/plugins/jQuery/jquery-3.1.1.js') }}"> </script>
	<script src="{{ asset ('/plugins/jQuery/jquery-3.1.1.min.js') }}"> </script>
	<script src=" {{ asset('js/eliminar.js') }} " ></script>

@endsection

