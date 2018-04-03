@extends('layout.default')


@section('content')
<div class="grid">
  <div class="row">
    <div class="col xs-12-12 md-12-12 sm-12-12 md-12-12 xl-12-12 xxl-12-12 text-center">
      <h3>Sign In</h3>
    </div>

    <div class="col xs-12-12 md-12-12 sm-12-12 md-12-12 xl-12-12 xxl-12-12 text-center form">

      {!! Form::open(['url' => 'login']) !!}


      <label>Name:</label>
      {!! Form::text('name', old('name'), ['placeholder' => 'Your name']) !!}
        @if ($errors->has('name'))
        <span class="invalid-feedback">
          <p class="validation-p text-center bold">{{ $errors->first('name') }}</p>
        </span>
        @endif

      <label>Password:</label>
      {!! Form::password('password', ['placeholder' => 'Your password']) !!}
        @if ($errors->has('password'))
        <span class="invalid-feedback">
          <p class="validation-p text-center bold">{{ $errors->first('password') }}</p>
        </span>
        @endif

        <!-- <div class="col xs-12-12 md-12-12 sm-12-12 md-12-12 xl-12-12 xxl-12-12 text-center remember">
          <label>Remember Me</label>
          <input type="checkbox" name="remember" class="checkbox">
        </div> -->




      <button type="submit" class="submit-btn uppercase bold push-right">Sign In</button>
    </div>

    <div class="col xs-12-12 md-12-12 sm-12-12 md-12-12 xl-12-12 xxl-12-12 text-center">
      <a class="submit-btn btn-forgot uppercase bold" href="{{ route('password.request') }}">
          {{ __('Forgot Your Password?') }}
      </a>
    </div>


      {!! Form::close() !!}

  </div>
</div>
@endsection
