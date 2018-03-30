@extends ('layout.default')
@extends('includes.head')


@section('content')
<div class="grid">
  <div class="row">
    <div class="col xs-12-12 md-12-12 sm-12-12 md-12-12 xl-12-12 xxl-12-12 text-center">
      <div class="entry-title_int bold uppercase text-center">
        <h2>{{ $entry->title }}</h2>
      </div>


      <div class="entry-img_int text-center">
        <img src="{{ $entry->url }}" alt="Entry1">
      </div>

      <div class="entry-date_int text-right bold">
        <h6>{{ $entry->date }}</h6>
      </div>

      <div class="entry-desc_int text-left">
        <h5>{{ $entry->description }}</h5>
      </div>

      <div class="entry-track">
        <iframe width="100%" height="300" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url={{ $entry->trackUrl }}&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
      </div>

      <div class="entry-btns">
        @if(Auth::check() && Auth::user()->isAdmin())
          <a href="{{ route('entry_edit', $entry->id) }}" role="button" class="edit-btn bold uppercase">Edit</a>
        @endif
        <a href="{{ route('index') }}" class="btn bold uppercase">Back to main</a>
      </div>


    </div>
  </div>
</div>
@stop
