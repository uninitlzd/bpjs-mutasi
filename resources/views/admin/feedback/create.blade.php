@extends('admin.default')

@section('page-header')
	feedback <small>{{ trans('app.add_new_item') }}</small>
@stop

@section('content')
	{!! Form::open([
			'action' => ['FeedbackController@store'],
			'files' => true
		])
	!!}

		@include('admin.feedback.form')

		<button type="submit" class="btn btn-primary">{{ trans('app.add_button') }}</button>
		
	{!! Form::close() !!}
	
@stop
