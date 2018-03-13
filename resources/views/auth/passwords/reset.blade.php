@extends('layout.default')

@section('content')
<div class="grid">
  <div class="row">
    <div class="col xs-12-12 md-12-12 sm-12-12 md-12-12 xl-12-12 xxl-12-12 text-center">
      <h3>Reset Password</h3>
    </div>

    <div class="col xs-12-12 md-12-12 sm-12-12 md-12-12 xl-12-12 xxl-12-12 text-center reg-form">

      {!! Form::open(['url' => 'reset']) !!}

      <label for="email">Type your e-mail:</label>
      {!! Form::text('email', old('email'), ['placeholder' => 'Your email']) !!}
        @if ($errors->has('email'))
        <span class="invalid-feedback">
          <p class="validation-p text-center bold">{{ $errors->first('email') }}</p>
        </span>
        @endif



      <button type="submit" class="submit-auth-btn uppercase bold push-right">
        {{ __('Reset Password') }}
      </button>
    </div>

    {!! Form::close() !!}

  </div>
</div>
@stop
