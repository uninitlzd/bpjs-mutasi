@extends('admin.default')

@section('page-header')
	Berita <small>{{ trans('app.update_item') }}</small>
@stop

@section('content')
	{!! Form::model($news, [
			'action' => ['Admin\NewsController@update', $news->id],
			'method' => 'put',
			'files' => true
		])
	!!}

		@include('admin.news.form')

		<button type="submit" class="btn btn-primary">{{ trans('app.edit_button') }}</button>

	{!! Form::close() !!}

@stop
