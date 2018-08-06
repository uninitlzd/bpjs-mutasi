<div class="row mB-40">
	<div class="col-sm-8">
		<div class="bgc-white p-20 bd">
			{!! Form::myInput('text', 'name', 'Username') !!}

				{!! Form::myInput('email', 'email', 'Email') !!}

				{!! Form::myInput('password', 'password', 'Password Baru') !!}

				{!! Form::myInput('password', 'password_confirmation', 'Password Again ') !!}

                @if(auth()->user()->isSuperAdmin())

				{!! Form::mySelect('role', 'Role', config('variables.role')) !!}

                @endif
        </div>
	</div>
</div>
