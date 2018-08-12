@extends('admin.default')

@section('page-header')
	Reject Data
@stop

@section('content')
	{!! Form::model($submission, [
			'action' => ['Admin\SubmissionHistoryController@doReject', $submission->id],
			'method' => 'post',
			'files' => true
		])
	!!}

		@include('admin.submissions.form')

		<button type="submit" class="btn btn-danger">Reject</button>

	{!! Form::close() !!}

@stop
