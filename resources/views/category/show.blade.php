@extends('layouts.app')

@section('content')

	<h2>Name: {{ $category->name}}</h2>

	@include('category._error')

	{!! Form::model($category,['method' => 'put']) !!}

		@include('category._form',['buttonText' => 'Save changes'])

	{!! Form::close() !!}
@stop


