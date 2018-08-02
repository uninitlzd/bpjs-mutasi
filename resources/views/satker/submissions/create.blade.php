@extends('admin.default')

@section('page-header')
	Upload Form
@stop

@section('content')
	{!! Form::open([
			'action' => ['SubmissionController@store'],
			'files' => true
		])
	!!}

		@include('satker.submissions.form')

		<button type="submit" class="btn btn-primary">{{ trans('app.add_button') }}</button>

	{!! Form::close() !!}

@stop
