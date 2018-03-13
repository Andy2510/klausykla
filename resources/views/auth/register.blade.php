@extends('layout.default')

@section('content')
<div class="grid">
  <div class="row">
    <div class="col xs-12-12 md-12-12 sm-12-12 md-12-12 xl-12-12 xxl-12-12 text-center">
      <h3>Register</h3>
    </div>

    <div class="col xs-12-12 md-12-12 sm-12-12 md-12-12 xl-12-12 xxl-12-12 text-center reg-form">

      {!! Form::open(['url' => 'register']) !!}


      <label>Name:</label>
      {!! Form::text('name', old('name'), ['placeholder' => 'Your name']) !!}
        @if ($errors->has('name'))
        <span class="invalid-feedback">
          <p class="validation-p text-center bold">{{ $errors->first('name') }}</p>
        </span>
        @endif


      <label>Email:</label>
      {!! Form::email('email', old('email'), ['placeholder' => 'Your email']) !!}
        @if ($errors->has('email'))
        <span class="invalid-feedback">
          <p class="validation-p text-center bold">{{ $errors->first('email') }}</p>
        </span>
        @endif

      <label>Password:</label>
      {!! Form::password('password', ['placeholder' => 'Choose and type your password']) !!}
        @if ($errors->has('password'))
        <span class="invalid-feedback">
          <p class="validation-p text-center bold">{{ $errors->first('password') }}</p>
        </span>
        @endif

      <label>Repeat password:</label>
      {!! Form::password('password_confirmation', ['placeholder' => 'Confirm your chosen password']) !!}
        @if ($errors->has('password_confirmation'))
        <span class="invalid-feedback">
          <p class="validation-p text-center bold">{{ $errors->first('password_confirmation') }}</p>
        </span>
        @endif


      <button type="submit" class="submit-auth-btn uppercase bold push-right">Register</button>
    </div>

    <!-- <div class="col xs-12-12 md-12-12 sm-12-12 md-12-12 xl-12-12 xxl-12-12 text-center">
      <button class="social-signin facebook">Log in with facebook</button>
    </div> -->

      {!! Form::close() !!}



  </div>
</div>
@stop
