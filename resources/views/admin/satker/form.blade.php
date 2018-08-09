<div class="row mB-40">
	<div class="col-sm-8">
		<div class="bgc-white p-20 bd">

            {{ csrf_field() }}

            @if(isset($satker))

                {!! Form::mySelect('departemen_satker_id', 'Departemen', $departemen, $satker->departemen->id) !!}

            @else

                {!! Form::mySelect('departemen_satker_id', 'Departemen', $departemen) !!}

            @endif

            {!! Form::myInput('text', 'kode', 'Kode Satuan Kerja') !!}

            {!! Form::myInput('text', 'nama', 'Nama Satuan Kerja') !!}

            @if(isset($satker))

                {!! Form::mySelect('status_satker_id', 'Status', $status, $satker->status->id) !!}

            @else

                {!! Form::mySelect('status_satker_id', 'Status', $status) !!}

            @endif

            {!! Form::myInput('text', 'alamat', 'Alamat') !!}

            {!! Form::myInput('text', 'rt/rw', 'RT/RW') !!}



            <div class="row">
                <div class="col-md-4">
                    {!! Form::myInput('text', 'rt/rw', 'RT/RW') !!}
                </div>
                <div class="col-md-4">
                    {!! Form::myInput('text', 'kode_pos', 'Kode Pos') !!}
                </div>
                <div class="col-md-4">
                    {!! Form::myInput('text', 'no_telp', 'Nomor Telepon') !!}
                </div>
            </div>

        </div>
	</div>
</div>

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

    <script>

        $(document).ready(function() {


        });
    </script>
@endsection
