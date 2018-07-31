@extends('layouts.app')

@section('content')

    <h4 class="fw-300 c-grey-900 mB-40">Register</h4>
    <form method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="satker" class="text-normal text-dark">Satuan Kerja</label>
            <select name="satker" id="satker-selection" class="form-control js-states ">
                <option></option>
            </select>
            @if ($errors->has('satker'))
                <span class="form-text text-danger">
                    <small>{{ $errors->first('satker') }}</small>
                </span>
            @endif
        </div>


        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name" class="text-normal text-dark">Name</label>
            <input id="name" type="text" class="form-control" placeholder="Nama" name="name" value="{{ old('name') }}" required autofocus>

            @if ($errors->has('name'))
                <span class="form-text text-danger">
                    <small>{{ $errors->first('name') }}</small>
                </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="text-normal text-dark">Email</label>
            <input id="email" type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required>

            @if ($errors->has('email'))
                <span class="form-text text-danger">
                    <small>{{ $errors->first('email') }}</small>
                </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('nik') ? ' has-error' : '' }}">
            <label for="nik" class="text-normal text-dark">NIK</label>
            <input id="nik" type="text" class="form-control" name="nik" placeholder="NIK" value="{{ old('nik') }}" required>

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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#satker-selection').select2({
                placeholder: "Pilih Satuan Kerja",
                ajax : {
                    url : '/api/satker',
                    dataType : 'json',
                    delay : 200,
                    data : function(params){
                        return {
                            q : params.term,
                            page : params.page
                        };
                    },
                    processResults : function(data, params){
                        params.page = params.page || 1;
                        return {
                            results : data.data,
                            pagination: {
                                more : (params.page  * 10) < data.total
                            }
                        };
                    }
                },
                minimumInputLength : 1,
                templateResult : function (satker){
                    if(satker.loading) return satker.nama;
                    var markup = satker.nama;
                    return markup;
                },
                templateSelection : function(satker)
                {
                    return satker.nama;
                },
                escapeMarkup : function(markup){ return markup; }
            });

        });
    </script>


@endsection
