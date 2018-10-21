@extends('adminlte::layouts.app')


@section('htmlheader_title')
    {{ trans('Editar Usuario') }}
@endsection

@section('main-content')

<form action="{{ route('entrust-gui::users.update', $user2->id) }}" method="post" role="form">
  
    <input type="hidden" name="_method" value="put">

    <div class="container-fluid spark-screen">
	    <div class="row">
	    	<div class="col-md-8 col-md-offset-2">
	    		<div class="box-body">
	        		<div class="box box-primary">
	                	<div class="box-body">

    @include('entrust-gui::users.partials.form')

    
  
    <button type="submit" id="save" class="btn btn-labeled btn-primary"><span class="btn-label"><i class="fa fa-check"></i></span>{{ trans('    Editar') }}</button>
   
    <a class="btn btn-labeled btn-default" href="{{ route('entrust-gui::users.index') }}"><span class="btn-label"><i class="fa fa-chevron-left"></i></span>{{ trans('       Cancelar') }}</a> <br><br>

    </div></div></div></div></div></div>
</form>

@endsection

