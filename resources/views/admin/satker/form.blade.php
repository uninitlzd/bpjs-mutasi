<div class="row mB-40">
	<div class="col-sm-8">
		<div class="bgc-white p-20 bd">

            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('departemen') ? ' has-error' : '' }}">
                <label for="departemen" class="text-normal text-dark">Departemen</label>
                <select name="departemen_satker_id" id="departemen-selection" class="form-control js-states ">
                    @foreach($departemen as $item)
                        <option value="{{ $item->id }}"> {{ $item->nama  }} </option>
                    @endforeach
                </select>
                @if ($errors->has('departemen'))
                    <span class="form-text text-danger">
                    <small>{{ $errors->first('departemen') }}</small>
                </span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('kode') ? ' has-error' : '' }}">
                <label for="kode" class="text-normal text-dark">Kode Satuan Kerja</label>
                <input type="text" class="form-control" name="kode" placeholder="Kode satuan kerja">
            </div>

            <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                <label for="nama" class="text-normal text-dark">Nama Satuan Kerja</label>
                <input type="text" class="form-control" name="nama" placeholder="Nama satuan kerja">
            </div>

            <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                <label for="status" class="text-normal text-dark">Status Satker</label>
                <select name="status_satker_id" id="status-selection" class="form-control js-states ">
                    @foreach($status as $item)
                        <option value="{{ $item->id }}"> {{ $item->deskripsi  }} </option>
                    @endforeach
                </select>
                @if ($errors->has('status'))
                    <span class="form-text text-danger">
                    <small>{{ $errors->first('status') }}</small>
                </span>
                @endif
            </div>

            <div class="form-group">
                <label for="alamat" class="text-normal text-dark">Alamat Satuan Kerja</label>
                <input type="text" class="form-control" name="alamat" placeholder="Alamat satuan kerja">
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="rt/rw" class="text-normal text-dark">RT/RW</label>
                        <input type="text" class="form-control" name="rt/rw" placeholder="RT/RW">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="kode_pos" class="text-normal text-dark">Kode Pos</label>
                        <input type="text" class="form-control" name="kode_pos" placeholder="Kode Pos">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="no_telp" class="text-normal text-dark">No Telp</label>
                        <input type="text" class="form-control" name="no_telp" placeholder="No Telp">
                    </div>
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
