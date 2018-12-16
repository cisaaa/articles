@extends('layouts.app')

@section('content')

	@include('category._error')

	{!! Form::open(['url' => 'categories']) !!}

		@include('category._form',['buttonText' => 'Add new category'])
	{!! Form::close() !!}

@stop