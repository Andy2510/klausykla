@extends('layout.default')

@section('content')
<section id="blog" class="ver-p">
  <div class="grid full-wraper">
    <div class="row">
      <div class="col xs-12-12">
        <div class="section-title text-center uppercase">
          <h3>New Entries of Blog</h3>
          <div class="spacer text-center"></div>
        </div>

    </div>

@foreach ($entries as $entry)
    <div class="col lg-4-12 sm-4-12 md-4-12 xl-4-12 entry">
      <a href="{{ route('entry_show', $entry->id)}}">
      <div class="thumbnail">
        <img src="{{ $entry->url }}" alt="{{ $entry->title }}">
        @if(Auth::check() && Auth::user()->isAdmin())
          <div class="top-left admin-tools">
            <a href="{{ route('entry_edit', $entry->id) }}" role="button"><i class="fas fa-pencil-alt"></i></a>
            <a href="{{ route('entry_destroy', $entry->id) }}" role="button"><i class="fas fa-times"></i></a>
          </div>
        @endif
          <div class="bottom-left entry-date">{{ $entry->date }}</div>
          <div class="bottom-right entry-controlls">
            <i class="fas fa-share"></i>
            <i class="fas fa-heart"></i>
          </div>
      </div>
        <div class="entry-title bold text-center">
          <h4>{{ $entry->title }}</h4>
        </div>
      </a>
        <div class="entry-desc">
          <h5>{{ $entry->description }}</h5>
        </div>
    </div>
@endforeach
</div>

<div class="row">
  <div class="col xs-12-12 lg-12-12 sm-12-12 md-12-12 xl-12-12 text-center">
    {{ $entries->links() }}
  </div>
</div>

</section>

<section id="suggest" class="ver-p-sm">
    <div class="grid">
      <div class="row">

        <div class="col md-6-12 lg-6-12 sm-6-12 md-6-12 xl-6-12 xxl-6-12">
          <h2 class="text-center">Contact me with a song!</h2>
        </div>

        <div class="col md-6-12 lg-6-12 sm-6-12 md-6-12 xl-6-12 xxl-6-12 text-center">
          <form id="form" method="POST" action="{{ route('contact_create') }}" enctype="multipart/form-data">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <input id="name" type="text" placeholder="NAME">
            <input id="email" type="text" placeholder="E-MAIL">
            <textarea id="message" type="text" placeholder="MESSAGE"></textarea>
            <input id="submit" type="submit" value="Submit" class="bold uppercase">
          </form>
        </div>

      </div>
    </div>
</section>
@stop
