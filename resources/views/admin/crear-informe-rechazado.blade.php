<!DOCTYPE html>

<html lang="en">

@section('htmlheader')
    @include('adminlte::layouts.partials.htmlheader')
@show

<body class="{{$user->color}}   sidebar-mini ">

<div id="app" v-cloak>
    <div class="wrapper">

        @include('adminlte::layouts.partials.mainheader')

        @include('adminlte::layouts.partials.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            @include('adminlte::layouts.partials.contentheader')

            <!-- Main content -->
            <section class="content">
                <!-- Your Page Content Here -->

				@include('layouts.main-content-avisos-rechazados')


                @yield('main-content')
                
            </section><!-- /.content -->

        </div><!-- /.content-wrapper -->

        @include('adminlte::layouts.partials.controlsidebar')

        @include('adminlte::layouts.partials.footer')

    </div>
</div>

<script src="{{ url (mix('/js/app.js')) }}" type="text/javascript"></script>
@yield('script')

</body>
</html>