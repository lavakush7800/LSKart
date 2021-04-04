@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<div class="container-fluid">
<div class="container ">	
<div id="register-page" class="row">
	<div class="col s12 z-depth-6 card-panel">
		<form class="register-form" method="POST" action="{{ route('register') }}"> 
        @csrf   
			<div class="row margin">
				<div class="input-field col s12">
					<i class="mdi-social-person-outline prefix"></i>
                    <i class="small material-icons">persone</i>
					<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
					<label for="name" class="center-align">Name</label>
					@error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
				</div>
			</div>
			<div class="row margin">
				<div class="input-field col s12">
					<i class="mdi-communication-email prefix"></i>
					<i class="small material-icons">email</i>
					<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
					<label for="user_email" class="center-align">Email</label>
					@error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
				</div>
			</div>
			<div class="row margin">
				<div class="input-field col s12">
					<i class="mdi-action-lock-outline prefix"></i>
					<i class="small material-icons">vpn_key</i>
					<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
					<label for="user_passw">Password</label>
					@error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
				</div>
			</div>
			<div class="row margin">
				<div class="input-field col s12">
					<i class="mdi-action-lock-outline prefix"></i>
					<i class="small material-icons">vpn_key</i>
					<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
					<label for="confirm_pass">Re-type password</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
					<button type="submit" class="btn waves-effect waves-light col s12">
                          {{ __('Register') }}
                    </button>
				</div>

			</div>
		</form>
	</div>
</div>
</div>
</div>
@endsection
