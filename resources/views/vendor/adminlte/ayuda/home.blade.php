@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('Ayuda') }}
@endsection


@section('html_css')
  
@endsection

@section('main-content')
  
    <div align="center">

    <embed src="{{ asset('storage/upload/ayuda.pdf') }}" style="border:rgba(6,92,0,0.3) solid 2px; width:100%" height="1000" />
    </div>
                  


@endsection

@section('script')


  
@endsection