<div class="row mB-40">
	<div class="col-sm-8">
		<div class="bgc-white p-20 bd">

            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('departemen') ? ' has-error' : '' }}">
                <label for="departemen" class="text-normal text-dark">Departemen</label>
                <select name="departemen" id="departemen-selection" class="form-control js-states ">
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

            <div class="form-group{{ $errors->has('satker') ? ' has-error' : '' }}">
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


        </div>
	</div>
</div>

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

    <script>

        $(document).ready(function() {


            $('#satker-selection').select2({
                placeholder: "Pilih Departemen",
                ajax : {
                    url : '/api/satker',
                    dataType : 'json',
                    delay : 200,
                    data : function(params){
                        return {
                            departemen_id: $('#departemen-selection').val(),
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
                minimumInputLength : 0,
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
