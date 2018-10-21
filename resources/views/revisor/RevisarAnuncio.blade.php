
@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('Eventos') }}
@endsection

@section('html_css')
    <link href="{{asset('css/shop-item.css')}}" rel="stylesheet">
  
@endsection

@section('main-content')

<div class="box box-primary" >
    <div class="box-body" >
        <div class="container">
          <div class="row" >
            <div class="col-lg-9" >
              <div class="card mt-4">
                <img class="card-img-top img-fluid"  src="{{asset('storage/imagenes/'.$anuncio->imagen) }}" alt="" style="height: 350px;width:350px;margin-left: 40%" >
                <div class="card-body">
                  <h3 class="card-title">{{$anuncio->titulo}}</h3>
                  <h4 >${{$anuncio->precio}}</h4>
                  <p class="card-text" >{{$anuncio->descripcion}}</p>
<!--                   <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
                  4.0 stars -->

                  <form class="col s12" action="{{url('revisor/anuncios/aceptar/'.$anuncio->id)}}" method="POST" role="form" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <fieldset class="form-group">
                        <div class="row">
                          <div class="col-sm-10">
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="estado" id="gridRadios1" value="PUBLICADO" checked>
                              <label class="form-check-label" for="gridRadios1">
                                APROBAR
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="estado" id="gridRadios2" value="SINPUBLICAR">
                              <label class="form-check-label" for="gridRadios2">
                                RECHAZAR
                              </label>
                            </div>
                          </div>
                        </div>
                      </fieldset>
                  	<button type="submit" class="btn btn-success">GUARDAR</button>                  
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection


@section('script')

@endsection


