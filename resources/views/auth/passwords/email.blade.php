@extends('layout.default')

@section('content')
<div class="grid">
<div class="row">
<div class="col xs-12-12 md-12-12 sm-12-12 md-12-12 xl-12-12 xxl-12-12 text-center reg-form">
<h3>{{ __('Reset Password') }}</h3>

@if (session('status'))
<div class="alert alert-success">
{{ session('status') }}
</div>
@endif

{!! Form::open(['url' => 'reset']) !!}

<label>{{ __('E-Mail Address') }}</label>
{!! Form::text('email', old('email'), ['placeholder' => 'Your email']) !!}
@if ($errors->has('email'))
<span class="invalid-feedback">
<p class="validation-p text-center bold">{{ $errors->first('email') }}</p>
</span>
@endif


<button type="submit" class="submit-auth-btn uppercase bold">
{{ __('Send Reset Link') }}
</button>


{!! Form::close() !!}
</div>
</div>
@endsection
