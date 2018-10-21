@extends('adminlte::layouts.auth')

@section('htmlheader_title')
    Log in
@endsection

@section('content')
<body background="{{ asset('/img/fondo.jpg') }}" class="hold-transition login-page" >
    <div id="app" v-cloak>
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="login-logo">
                
            </div><!-- /.login-logo -->

                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> {{ trans('adminlte_lang::message.someproblems') }}<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

            <div class="login-box-body">
               <div class="login-logo">


                <a href="{{ url('/home') }}"><b>Iniciar </b>Sesión</a>
               
            </div><!-- /.login-logo -->


            
            <p class="login-box-msg"> {{ trans('adminlte_lang::message.siginsession') }} </p>

            <login-form name="{{ config('auth.providers.users.field','email') }}"
                        domain="{{ config('auth.defaults.domain','') }}"></login-form>

                       <!-- <br><br> <img src="{{ asset('/img/login (2).jpg') }}" alt="" align="center"> -->
            </div>

        </div>
    </div>
    @include('adminlte::layouts.partials.scripts_auth')

    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
</body>

@endsection
