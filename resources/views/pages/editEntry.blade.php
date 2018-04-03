@extends('includes.head')

<div class="grid">
  <div class="row">
    <div class="col xs-12-12 md-12-12 sm-12-12 md-12-12 xl-12-12 xxl-12-12 text-center">
      <h3 class="text-center">Edit Your Selected Entry</h3>
    </div>

    <div class="col xs-12-12 md-12-12 sm-12-12 md-12-12 xl-12-12 xxl-12-12 text-center">

      {!! Form::open(['route' => ['entry_update', $entry->id], 'files' => true]) !!}

      {!! Form::label('title', 'Entry Title', ['class' => 'form-label']) !!}
      {!! Form::text(old('title'), $entry->title, array('class' => 'form-input', 'name' => 'title')) !!}
        @if ($errors->has('title'))
        <span class="invalid-feedback">
          <p class="validation-p text-center bold">{{ $errors->first('title') }}</p>
        </span>
        @endif

        {!! Form::label('date', 'Entry Date', ['class' => 'form-label']) !!}
        {!! Form::date(old('date'), $entry->date, array('class' => 'form-input', 'name' => 'date')) !!}

        {!! Form::label('description', 'Entry Description', ['class' => 'form-label']) !!}
        {!! Form::textarea(old('description'), $entry->description, array('class' => 'form-textarea', 'name' => 'description')) !!}
        @if ($errors->has('description'))
        <span class="invalid-feedback">
          <p class="validation-p text-center bold">{{ $errors->first('description') }}</p>
        </span>
        @endif

        {!! Form::label('trackUrl', 'Track URL', ['class' => 'form-label']) !!}
        {!! Form::text(old('trackUrl'), $entry->trackUrl, array('class' => 'form-input', 'name' => 'trackUrl')) !!}
          @if ($errors->has('trackUrl'))
          <span class="invalid-feedback">
            <p class="validation-p text-center bold">{{ $errors->first('trackUrl') }}</p>
          </span>
          @endif


        {!! Form::label('imageUrl', 'Entry Photo', ['class' => 'form-label']) !!}
        {!! Form::file('imageUrl', ['class' => 'form-input']) !!}
        @if ($errors->has('imageUrl'))
        <span class="invalid-feedback">
          <p class="validation-p text-center bold">{{ $errors->first('imageUrl') }}</p>
        </span>
        @endif

    </div>

    <div class="col xs-12-12 md-12-12 sm-12-12 md-12-12 xl-12-12 xxl-12-12 text-center">
      <div class="btns">
        <button type="submit" class="save-btn uppercase bold push-right">Save</button>
        <a href="{{ route('index') }}" class="back-btn bold uppercase">Back to main</a>
      </div>
    </div>


      {!! Form::close() !!}

  </div>
</div>
