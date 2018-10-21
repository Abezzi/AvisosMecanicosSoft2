
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
            <h1 class="my-4 text-center text-lg-left">Avisos</h1>

            <div class="row" align="left">
                @foreach($anuncio as $anu)
                <div class="col-lg-4 col-sm-6 portfolio-item">
                  <div class="card h-100">
                    <a href="{{url('revisor/anuncios/revisar/'.$anu->id)}}"><img class="card-img-top" src="{{ asset('storage/imagenes/'.$anu->imagen) }}" alt="" style="width: 250px;height: 250px"></a>
                    <div class="card-body">
                      <h4 class="card-title">
                        <a>{{$anu->titulo}}</a>
                      </h4>
                      <p class="card-text">{{$anu->descripcion}}</p>
                      <p class="card-text">$ {{$anu->precio}}</p>
                    </div>
                  </div>
                </div>
                @endforeach
            </div>
            {{ $anuncio->links('vendor.pagination.bootstrap-4') }} 
        </div>
    </div>
</div>
@endsection


@section('script')

@endsection