@extends('superAdmin.master')

@section('content')
	{!! Form::open(['url'=>'admin/super/pdfs/']) !!}
	@include('superAdmin.modules.pdfs.form')
	{!! Form::close() !!}
@stop