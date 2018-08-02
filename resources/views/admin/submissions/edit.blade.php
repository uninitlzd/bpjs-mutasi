@extends('admin.default')

@section('page-header')
	Update Data
@stop

@section('content')
	{!! Form::model($submission, [
			'action' => ['SubmissionController@update', $submission->id],
			'method' => 'put',
			'files' => true
		])
	!!}

		@include('satker.submissions.form')

		<button type="submit" class="btn btn-primary">{{ trans('app.edit_button') }}</button>

	{!! Form::close() !!}

@stop
