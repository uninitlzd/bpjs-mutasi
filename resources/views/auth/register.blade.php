@extends('layouts.app')

@section('content')

    <h4 class="fw-300 c-grey-900 mB-40">Register</h4>
    <form method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name" class="text-normal text-dark">Name</label>
            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

            @if ($errors->has('name'))
                <span class="form-text text-danger">
                    <small>{{ $errors->first('name') }}</small>
                </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="text-normal text-dark">Email</label>
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

            @if ($errors->has('email'))
                <span class="form-text text-danger">
                    <small>{{ $errors->first('email') }}</small>
                </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('nik') ? ' has-error' : '' }}">
            <label for="nik" class="text-normal text-dark">NIK</label>
            <input id="nik" type="nik" class="form-control" name="nik" value="{{ old('nik') }}" required>

            @if ($errors->has('nik'))
                <span class="form-text text-danger">
                    <small>{{ $errors->first('nik') }}</small>
                </span>
            @endif
        </div>

        <div class="form-group">
            <div class="peers ai-c jc-sb fxw-nw">
                <div class="peer">
                    <a href="/login">I have an account</a>
                </div>
                <div class="peer">
                    <button class="btn btn-primary">Register</button>
                </div>
            </div>
        </div>
    </form>

@endsection
