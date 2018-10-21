@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('Usuarios') }}
@endsection

@section('main-content')

<div class="box box-primary">
<div class="box-body">

    <div class="models--actions">
        <a class="btn btn-labeled btn-primary" href="{{ route('entrust-gui::users.create') }}"><span class="btn-label"><i class="fa fa-plus"></i></span>{{ trans('  Nuevo usuario') }}</a>
    </div>
    <br>

              <p>
              
                <span id="archivo-total"> {{ $usuarios->total()}} </span> registros |
                página {{ $usuarios->currentPage() }}
                de {{ $usuarios->lastPage()}}
              
              </p>
 

    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
      <tr>
        <th>Nombre</th>
        <th>Email</th>
        <th>Tiempo Registrado</th>
      </tr>
      @foreach($users as $userl)
        <tr>
          <td>{{ $userl->name }}</td>
          <td>{{ $userl->email }}</td>
           <td>{{ $userl->created_at->diffForHumans() }}</td>

          <td class="col-xs-3">

            <form action="{{ route('entrust-gui::users.destroy', $userl->id) }}" method="post">
              <input type="hidden" name="_method" value="DELETE">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">

              <a href="{{ route('entrust-gui::users.edit', $userl->id) }}"><span class="btn-label"><i class="fa fa-pencil fa-2x"></i></span></a>
              <button type="submit"><span class="btn-label"><i class="fa fa-trash fa-2x"></i></span></button>

            </form>

          </td>

        </tr>
      @endforeach
    </table>

</div></div>

<div class="text-center">
  {!! $users->render() !!}
</div>

@endsection
