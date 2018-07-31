@extends('admin.default')

@section('page-header')
	User <small>{{ trans('app.update_item') }}</small>
@stop

@section('content')
	{!! Form::model($feedback, [
			'action' => ['FeedbackController@update', $feedback->id],
			'method' => 'put',
			'files' => true
		])
	!!}

		@include('admin.feedback.form')

		<button type="submit" class="btn btn-primary">{{ trans('app.edit_button') }}</button>

	{!! Form::close() !!}

@stop
