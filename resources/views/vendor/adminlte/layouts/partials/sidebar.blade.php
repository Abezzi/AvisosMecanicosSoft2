<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest() )
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ asset('storage/upload/'.$user->foto) }}" class="img-square" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
{{--         <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form> --}}
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">{{ trans('Menú') }}</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.home') }}</span></a></li>

            @if ( $user->role  == "1" )

            <li class="treeview">
                <a href="#"><i class='fa fa-user-circle-o'></i> <span>{{ trans('Administrador') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/admin/users') }}">{{ trans('Usuarios') }}</a></li>
                    <li><a href="{{ url('/admin/roles') }}">{{ trans('Roles') }}</a></li>

                   <!-- <li><a href="{{ url('/registros') }}">{{ trans('Registros') }}</a></li>
                    <li><a href="{{ url('/ambitosacedemicos') }}">{{ trans('Ámbitos Academicos') }}</a></li>
                    <li><a href="{{ url('/ambitosgeograficos') }}">{{ trans('Ámbitos Geograficos') }}</a></li>
                    <li><a href="{{ url('/criterios') }}">{{ trans('Criterios de Acreditación') }}</a></li>
                    <li><a href="{{ url('/debilidades') }}">{{ trans('Debilidades') }}</a></li>
                    <li><a href="{{ url('/folio') }}">{{ trans('Folio') }}</a></li>
                    <li><a href="{{ url('/graficos') }}">{{ trans('Graficos') }}</a></li>
                    <li><a href="{{ url('/grafico') }}">{{ trans('Otros Graficos') }}</a></li> -->
                </ul>
            </li>
             @endif

            <!-- Informes -->
            @if ( $user->role  == "1" )
            <li class="treeview">
                <a href="#"><i class='fa fa-pie-chart'></i> <span>{{ trans('Informes') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/administrador/informes/rechazados') }}">{{ trans('Avisos Rechazados por Región') }}</a></li>
                    <li><a href="{{ url('/administrador/informes/aceptados') }}">{{ trans('Avisos Aceptados por Región') }}</a></li>
                    <li><a href="{{ url('/administrador/informes/totalavisos') }}">{{ trans('Total de Avisos') }}</a></li>
                    <li><a href="{{ url('/administrador/informes/personalizado') }}">{{ trans('Informe Personalizado') }}</a></li>
                </ul>
            </li>
             @endif

            @if ( $user->role  == "1" || $user->role  == "3")
            <li class="treeview">
                <a href="#"><i class='fa fa-address-book'></i> <span>{{ trans('Anuncios') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/cliente/anuncios/publicar') }}">{{ trans('Publicar Anuncio') }}</a></li>
                    <li><a href="{{ url('/cliente/anuncios/ver') }}">{{ trans('Mis Anuncios') }}</a></li>
                    <li><a href="{{ url('/cliente/anuncios/ver') }}">{{ trans('Ver Likes') }}</a></li>
        
                </ul>
            </li>
            @endif

            @if ( $user->role  == "1" || $user->role  == "2")
            <li class="treeview">
                <a href="#"><i class='fa fa-address-book'></i> <span>{{ trans('Revisor') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/revisor/anuncios/ver') }}">{{ trans('Revisar Anuncios') }}</a></li>       
                </ul>
            </li>
            @endif

        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
