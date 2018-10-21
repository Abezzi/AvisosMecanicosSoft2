@extends('adminlte::layouts.app')

@section('heading', 'Nuevo Usuario')

@section('main-content')

<form action="{{ route('entrust-gui::users.store') }}" method="post" role="form">

	<div class="container-fluid spark-screen">
	    <div class="row">
	    	<div class="col-md-8 col-md-offset-2">
	    		<div class="box-body">
	        		<div class="box box-primary">
	                	<div class="box-body">

    @include('entrust-gui::users.partials.form')


    <button type="submit" id="create" class="btn btn-labeled btn-primary"><span class="btn-label"><i class="fa fa-plus"></i></span>{{ trans('	Crear') }}</button>
    
    <a class="btn btn-labeled btn-default" href="{{ route('entrust-gui::users.index') }}"><span class="btn-label"><i class="fa fa-chevron-left"></i></span>{{ trans('		Atrás') }}</a>

     </div></div></div></div></div></div>

</form>
@endsection
