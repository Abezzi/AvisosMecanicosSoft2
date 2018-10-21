@extends('adminlte::layouts.app')

@section('heading', 'Create Role')

@section('main-content')

<div class="box box-primary">
<div class="box-body">

<form action="{{ route('entrust-gui::roles.store') }}" method="post" role="form">
    @include('entrust-gui::roles.partials.form')
    <button type="submit" class="btn btn-labeled btn-primary"><span class="btn-label"><i class="fa fa-plus"></i></span>{{ trans('  Crear') }}</button>
    <a class="btn btn-labeled btn-default" href="{{ route('entrust-gui::roles.index') }}"><span class="btn-label"><i class="fa fa-chevron-left"></i></span>{{ trans('  Atrás') }}</a>
</form>

</div></div>
@endsection
