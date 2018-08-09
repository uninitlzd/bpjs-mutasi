@extends('admin.default')

@section('page-header')
	Satker <small>{{ trans('app.update_item') }}</small>
@stop

@section('content')
	{!! Form::model($promotionalImages, [
			'action' => ['Admin\SatkerController@update', $promotionalImages->id],
			'method' => 'put',
			'files' => true
		])
	!!}

		@include('admin.satker.form')

		<button type="submit" class="btn btn-primary">{{ trans('app.edit_button') }}</button>

	{!! Form::close() !!}

@stop
