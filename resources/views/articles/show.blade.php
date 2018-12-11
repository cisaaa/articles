@extends('layouts.app')

@section('content')

	<h2>Title: {{ $article->title}}</h2>

	@include('articles._error')

	{!! Form::model($article,['method' => 'put']) !!}

		@include('articles._form',['buttonText' => 'Save changes'])

	{!! Form::close() !!}
@stop