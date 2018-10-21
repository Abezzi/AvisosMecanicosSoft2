@extends('adminlte::layouts.app')

@section('heading', 'Roles')

@section('main-content')

<div class="models--actions">
    <a class="btn btn-labeled btn-primary" href="{{ route('entrust-gui::roles.create') }}"><span class="btn-label"><i class="fa fa-plus"></i></span>{{ trans('  Nuevo Rol') }}</a>
</div>

<br>
<div class="col-md-8 col-md-offset-2">    
    <div class="box box-primary " >
        <div class="box-body">

            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <tr>
                    <th>Nombre</th>
                    
                </tr>
                @foreach($models as $model)
                    <tr>
                        <td>{{ $model->display_name }}</th>
                        <td class="col-xs-3">
                            <form action="{{ route('entrust-gui::roles.destroy', $model->id) }}" method="post">
                            
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <a href="{{ route('entrust-gui::roles.edit', $model->id) }}"><span class="btn-label"><i class="fa fa-pencil fa-2x"></i></span></a>

                                <button type="submit"><span class="btn-label"><i class="fa fa-trash fa-2x"></i></span></button>

                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>   
</div>

        <div class="text-center">
            {!! $models->render() !!}
        </div>


@endsection
