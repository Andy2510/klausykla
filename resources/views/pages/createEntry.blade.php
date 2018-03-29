@extends('includes.head')

<div class="grid">
  <div class="row">
    <div class="col xs-12-12 md-12-12 sm-12-12 md-12-12 xl-12-12 xxl-12-12 text-center">
      <h3 class="text-center">Create New Entry</h3>
    </div>

    <div class="col xs-12-12 md-12-12 sm-12-12 md-12-12 xl-12-12 xxl-12-12 text-center">

      {!! Form::open(['url' => 'createEntry', 'files' => true]) !!}

      {!! Form::label('Title') !!}
      {!! Form::text('title', 'Entry title') !!}
        @if ($errors->has('title'))
        <span class="invalid-feedback">
          <p class="validation-p text-center bold">{{ $errors->first('title') }}</p>
        </span>
        @endif

        {!! Form::label('Entry Date') !!}
        {!! Form::date(\Carbon\Carbon::now()) !!}

        {!! Form::label('Entry Description') !!}
        {!! Form::textarea('description', 'Describe what entry is about') !!}
        @if ($errors->has('description'))
        <span class="invalid-feedback">
          <p class="validation-p text-center bold">{{ $errors->first('description') }}</p>
        </span>
        @endif


        {!! Form::label('Entry Photo') !!}
        {!! Form::file('imageUrl') !!}
        @if ($errors->has('imageUrl'))
        <span class="invalid-feedback">
          <p class="validation-p text-center bold">{{ $errors->first('imageUrl') }}</p>
        </span>
        @endif

    </div>

    <div class="col xs-12-12 md-12-12 sm-12-12 md-12-12 xl-12-12 xxl-12-12 text-center">
      <div class="entry-btns">
        <button type="submit" class="submit-auth-btn uppercase bold push-right">Submit</button>
        <a href="{{ route('index') }}" class="back-btn bold uppercase">Back to main</a>
      </div>
    </div>


      {!! Form::close() !!}

  </div>
</div>
