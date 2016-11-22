@extends('template.layout')
@section('title', 'Sign In')

@section('content')
<div class="login-box">
	<div class="login-logo">
		<a href="../../index2.html"><b>Admin</b>LTE</a>
	</div><!-- /.login-logo -->
	<div class="login-box-body">
		<p class="login-box-msg">Sign in to start your session</p>
        {{ Form::open(array(
            'route' => 'auth.signin',
            'class' =>  '',
            'role'  =>  'form'
        )) }}

        {{-- section - email address --}}
		<div class="form-group has-feedback {{$errors->has('email')? 'has-error' : ''}}">
            {{ Form::text('email', Request::old('email') ?: '', $attr = array(
                'class' => 'form-control',
                'id'    => 'email',
                'placeholder'   =>  'Email',
            )) }}
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            @if($errors->has('email'))
                <span class="help-block">{{ $errors->first('email') }}</span>
            @endif
        </div>


        {{-- section - password --}}
        <div class="form-group has-feedback {{$errors->has('password')? 'has-error' : ''}}">
            {{ Form::password('email', $attr = array(
                'class' => 'form-control',
                'id'    => 'password',
                'placeholder'   =>  'Password',
            )) }}
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            @if($errors->has('password'))
                <span class="help-block">{{ $errors->first('password') }}</span>
            @endif
        </div>


		<div class="row">
			<div class="col-xs-8">
				<div class="checkbox icheck">
					<label>{{ Form::checkbox('remember', null, false) }} Remember me</label>
				</div>
			</div><!-- /.col -->
			<div class="col-xs-4">
                {{ Form::submit('Sign In', $attr = array(
                    'class' => 'btn btn-primary btn-block btn-flat'))
                }}
            </div><!-- /.col -->
		</div>
		{{ Form::close() }}
		<div class="social-auth-links text-center">
			<p>- OR -</p><a class="btn btn-block btn-social btn-facebook btn-flat" href="#"><i class="fa fa-facebook"></i> Sign in using Facebook</a> <a class="btn btn-block btn-social btn-google btn-flat" href="#"><i class="fa fa-google-plus"></i> Sign in using Google+</a>
		</div><!-- /.social-auth-links -->
		<a href="#">I forgot my password</a><br>
		<a class="text-center" href="register.html">Register a new membership</a>
	</div><!-- /.login-box-body -->
</div>
@endsection
