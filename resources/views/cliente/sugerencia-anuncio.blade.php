
<html lang="en">

@section('htmlheader')
    @include('adminlte::layouts.partials.htmlheader')
@show

<body class="{{$user->color}}   sidebar-mini ">

@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('Eventos') }}
@endsection

@section('html_css')

  
@endsection

@section('main-content')

<div class="box box-primary">
    <div class="box-body">
        <div class="container">
            <h1 class="my-4 text-center text-lg-left">Sugerencias</h1>
            <form class="col s12" action="{!!URL::to('/cliente/Sugerencias')!!}" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title"><i class='fa fa-street-view'></i> ¿En que te podemos ayudar?</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Opciones</label>
                        <select id="opcion" name="opcion" class="form-control select2" style="width: 100%;" onchange="populate('opcion')">
                            <option value="" disabled selected>Elija una opcion</option>
                            <option value="7">Reclamo</option>
                            <option value="1">Sugerencia</option>
                            <option value="2">Contacto</option>
                            <option value="3">Otro</option>
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
            <h3 class="box-title"><i class='fa fa-info-circle'></i> Datos personales</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
        </div>

              <div class="form-group">
                    <label for="titulo_anuncio">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="">
                </div>
                <div class="form-group">
                    <label for="descripcion">Email</label>
                    <input type="text" class="form-control" id="descripcion" name="descripcion"placeholder=""></input>
                </div>
        </div>
    </div>
<!-- UBICACION ---------------------------->
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title"><i class='fa fa-info-circle'></i> Detalles de la sugerencias</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
        </div>
 <div class="form-group">
                    <label for="descripcion">Descripción</label>
                    <textarea id="descripcion" name="descripcion" class="form-control" rows="3" placeholder=""></textarea>
                </div>



<div class="box box-danger">
<div class="box-header with-border">
    <h3 class="box-title"><i class=''></i> Finalizar</h3>
    <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    </div>
</div>
<div class="box-footer">
    <button data-toggle="modal" data-target="#myModal" type="submit" class="btn btn-danger">Enviar</button>
</form>

<!-- Modal Success Popup -->
<div class="modal fade success-popup" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
         <div class="callout callout-success">
                <h4>Sugerencia Enviada</h4>
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
            </div>
        </div>
    </div>
</div>
@endsection


@section('script')

@endsection