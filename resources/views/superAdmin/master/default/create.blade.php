@extends('superAdmin.master')

@section('title')
| Create
@endsection

@section('content')
	<h2>Create {{ ucfirst($module) }}</h2>
	{!! Form::open(['url'=>'admin/super/'.$module.'/']) !!}
		@include('superAdmin.modules.'.$module.'.form')
	{!! Form::close() !!}
@stop