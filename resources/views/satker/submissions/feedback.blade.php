@extends('admin.default')

@section('page-header')
    Feedback Data {{ $submission->id }}
@endsection

@section('content')

    <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <div class="form-group">
            <div class="row">
                <div class="col-md-4">
                    <label for="">User: </label>
                    <p>{{ $submission->user->name }}</p>
                </div>
                <div class="col-md-4">
                    <label for="">Satker: </label>
                    <p>{{ $submission->user->satker->nama}}</p>
                </div>
                <div class="col-md-4">
                    <label for="">Jenis Data: </label>
                    <p>{{ App\Models\Submission::$codes[$submission->code] }}</p>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="">File</label>
            <div>
                <a class="btn btn-info" href="{{ asset(config('variables.submissions.public').$submission->file) }}"
                   download>Lihat File</a>
            </div>
        </div>

        <div class="form-group">
            <label for="">Feedback</label>
            <p>{{ $submission->feedback }}</p>
        </div>
    </div>

    <div class="mB-20">
        <a href="{{ route(ADMIN . '.submissions.edit', $submission->id) }}" class="btn btn-info">
            Upload Ulang
        </a>
    </div>

@stop
