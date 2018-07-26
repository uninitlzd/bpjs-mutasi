@extends('admin.default')

@section('page-header')
    User <small>Set Password</small>
@stop

@section('content')
    {!! Form::model($user, [
            'action' => ['UserController@setPassword', $user->id],
            'method' => 'put',
            'files' => true
        ])
    !!}

    <div class="row mB-40">
        <div class="col-sm-8">
            <div class="bgc-white p-20 bd">

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Nama</label>
                            <p class="font-weight-bold">{{ $user->name }}</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Email</label>
                            <p class="font-weight-bold">{{ $user->email}}</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">NIK</label>
                            <p class="font-weight-bold">{{ $user->nik }}</p>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="">Kata Sandi</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="password" id="password_field" placeholder="Kata Sandi" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-outline-info" id="generate" type="button">Buat Otomatis</button>
                        </div>
                    </div>

                </div>

                <div class="form-group">
                    <label for="">Konfirmasi Password</label>
                    <input type="password" name="password_confirmation" placeholder="Konfirmasi Kata Sandi" id="password_confirmation_field" class="form-control">
                </div>

                <div class="mt-5">
                    <p>*Klik "Buat Otomatis" untuk langsung membuat password secara acak</p>
                </div>

            </div>
        </div>
    </div>


    <button type="submit" class="btn btn-primary">Simpan</button>

    {!! Form::close() !!}

@stop

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $('#generate').click(function () {
            let val = Math.random().toString(36).substr(2, 8);
            $('#password_field').val(val)
            $('#password_confirmation_field').val(val)
        });
    </script>
@stop
