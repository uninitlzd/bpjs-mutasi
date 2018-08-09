@extends('admin.default')

@section('page-header')
	Satker <small>{{ trans('app.add_new_item') }}</small>
@stop

@section('content')
	{!! Form::open([
			'action' => ['Admin\SatkerController@store'],
			'files' => true
		])
	!!}

		@include('admin.satker.form')

		<button type="submit" class="btn btn-primary">{{ trans('app.add_button') }}</button>

	{!! Form::close() !!}

@stop
