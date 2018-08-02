@extends('admin.default')

@section('page-header')
	Gambar <small>{{ trans('app.add_new_item') }}</small>
@stop

@section('content')
	{!! Form::open([
			'action' => ['Admin\PromotionalImagesController@store'],
			'files' => true
		])
	!!}

		@include('admin.images.form')

		<button type="submit" class="btn btn-primary">{{ trans('app.add_button') }}</button>

	{!! Form::close() !!}

@stop
