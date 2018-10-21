 @extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('Perfil Usuario') }}
@endsection

@section('html_css')

@endsection

@section('main-content')

 <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-square" src="{{ asset('storage/upload/'.$user->foto) }}" alt="User profile picture">

              <h3 class="profile-username text-center">{{$user->name}}</h3>

              <p class="text-muted text-center">{{$user->email}}</p>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

       
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab"><strong> Perfil</strong></a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
			            <div class="box-body">
			            	<small>Cambiar Foto de Perfil</small>
  							<form action={{'/foto/'.$user->id}} method="post" class="form-horizontal" enctype="multipart/form-data">

  							{{csrf_field()}}
  								<input required="" type="file" name="file">
  								<br>
  								<input type="submit">
  								

  							</form><br>

			                <div class="form-group">
			                  <label><strong> Nombre</strong></label>
			                  <input name="nombre" readonly class="form-control" placeholder="" type="text" value="{{$user->name}}">
			                </div>

							<div class="form-group">
			                  <label><strong> Email</strong></label>
			                  <input name="email"  readonly class="form-control" placeholder="" type="text" value="{{$user->email}}" >
			                </div>

			                <div class="form-group">
			                  <label><strong> Roles </strong></label>
			                  @foreach ($roles as $rol)
			                  	@if ( $rol->role_id  == 1 )
			                 	 <input name="role_ids"  readonly class="form-control" placeholder="" type="text" value="ADMINISTRADOR" >
			                  	@endif
			                  	@if ( $rol->role_id  == 2 )
			                 	 <input name="role_ids"  readonly class="form-control" placeholder="" type="text" value="REVISOR" >
			                  	@endif
			                  	@if ( $rol->role_id  == 3 )
			                 	 <input name="role_ids"  readonly class="form-control" placeholder="" type="text" value="CLIENTE" >
			                  	@endif
			                  @endforeach
			                </div>
			            </div>

              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="timeline">
                <!-- The timeline -->
                <ul class="timeline timeline-inverse">

                </ul>
              </div>
              <!-- /.tab-pane -->
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
@endsection

@section('script')


<script type="text/javascript">


</script>


@endsection