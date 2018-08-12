<div class="row mB-40">
	<div class="col-sm-8">
		<div class="bgc-white p-20 bd">

            @if(isset($submission))
                {!! Form::mySelect('code', 'Jenis Form', App\Models\Submission::$codes, $submission->code, ['disabled']) !!}
            @else
                {!! Form::mySelect('code', 'Jenis Form', App\Models\Submission::$codes) !!}
            @endif

			{!! Form::myInput('file', 'file', 'File') !!}
        </div>
	</div>
</div>
