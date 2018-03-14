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

<!-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reset Password</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
