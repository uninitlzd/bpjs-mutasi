@extends('admin.default')

@section('page-header')
	QNA <small>{{ trans('app.add_new_item') }}</small>
@stop

@section('content')
	{!! Form::open([
			'action' => ['Admin\QNAController@store'],
			'files' => true
		])
	!!}

		@include('admin.qna.form')

		<button type="submit" class="btn btn-primary">{{ trans('app.add_button') }}</button>

	{!! Form::close() !!}

@stop
