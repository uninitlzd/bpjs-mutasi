@extends('admin.default')

@section('page-header')
	Berita <small>{{ trans('app.add_new_item') }}</small>
@stop

@section('content')
	{!! Form::open([
			'action' => ['Admin\NewsController@store'],
			'files' => true
		])
	!!}

		@include('admin.news.form')

		<button type="submit" class="btn btn-primary">{{ trans('app.add_button') }}</button>

	{!! Form::close() !!}

@stop
