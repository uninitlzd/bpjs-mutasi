@extends('admin.default')

@section('page-header')
	Gambar <small>{{ trans('app.update_item') }}</small>
@stop

@section('content')
	{!! Form::model($promotionalImages, [
			'action' => ['Admin\PromotionalImagesController@update', $promotionalImages->id],
			'method' => 'put',
			'files' => true
		])
	!!}

		@include('admin.images.form')

		<button type="submit" class="btn btn-primary">{{ trans('app.edit_button') }}</button>

	{!! Form::close() !!}

@stop
