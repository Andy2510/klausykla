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
    <div class="col lg-4-12 sm-4-12 md-4-12 xl-4-12 entry">
      <a href="#">
        <div class="thumbnail">
          <img src="/contents/img/newyork.jpg" alt="Entry1" class="entry-img">
          <div class="bottom-left entry-date">2018-03-09</div>
          <div class="bottom-right entry-controlls">
            <i class="fas fa-share"></i>
            <i class="fas fa-heart"></i>
          </div>
        </div>
        <div class="entry-title bold text-center">Title</div>
      </a>
      <div class="entry-desc justified">
        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h3>
      </div>
    </div>



    <div class="col lg-4-12 sm-4-12 md-4-12 xl-4-12">
        <div class="thumbnail">
          <a href="#">
            <img alt="Entry1" class="img-responsive" src="/contents/img/paris.jpg">
            <h3 class="text-center uppercase">Entry 2</h3>
          </a>
          <p class="text-center">SpaceTeam bootstrapping user centered design sticky note convergence fund </p>
        </div>
    </div>
    <div class="col lg-4-12 sm-4-12 md-4-12 xl-4-12">
      <a href="#">
        <div class="thumbnail">
          <img alt="Entry1" class="img-responsive" src="/contents/img/sanfrancisko.jpg">
          <h3 class="text-center uppercase">Entry 3</h3>
          <p class="text-center">SpaceTeam bootstrapping user centered design sticky note convergence fund </p>
        </div>
      </a>
  </div>
</div>

    <div class="row">
      <div class="col lg-4-12 sm-4-12 md-4-12 xl-4-12">
        <a href="#">
          <div class="thumbnail">
            <img alt="Entry1" class="img-responsive" src="/contents/img/newyork.jpg">
            <h3 class="text-center uppercase">Entry 1</h3>
            <p class="text-center">SpaceTeam bootstrapping user centered design sticky note convergence fund </p>
          </div>
        </a>
      </div>
</section>

<section id="suggest" class="ver-p-sm">
    <div class="grid">
      <div class="row">

        <div class="col md-6-12 lg-6-12 sm-6-12 md-6-12 xl-6-12 xxl-6-12">
          <h2 class="text-center">Contact me with a song!</h2>
        </div>

        <div class="col md-6-12 lg-6-12 sm-6-12 md-6-12 xl-6-12 xxl-6-12 text-center">
          <form id="form">
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
