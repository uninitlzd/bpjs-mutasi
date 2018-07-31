@extends('admin.default')

@section('page-header')
	QNA <small>{{ trans('app.update_item') }}</small>
@stop

@section('content')
	{!! Form::model($qna, [
			'action' => ['QNAController@update', $qna->id],
			'method' => 'put',
			'files' => true
		])
	!!}

		@include('admin.qna.form')

		<button type="submit" class="btn btn-primary">{{ trans('app.edit_button') }}</button>

	{!! Form::close() !!}

@stop
