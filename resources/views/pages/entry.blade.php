@extends ('layout.default')


@section('content')
<div class="grid">
  <div class="row">
    <div class="col xs-12-12 md-12-12 sm-12-12 md-12-12 xl-12-12 xxl-12-12 text-center">
      <div class="entry-title_int bold uppercase text-center">
        <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h2>
      </div>


      <div class="entry-img_int text-center">
        <img src="/contents/img/owens.jpg" alt="Entry1">
      </div>

      <div class="entry-date_int text-right bold">
        <h6>2018-03-09</h6>
      </div>

      <div class="entry-desc_int text-left">
        <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h5>
      </div>

      <div class="entry-btns">
        <a href="{{ route('index') }}" class="back-btn bold uppercase">Back to main</a>
      </div>

    </div>
  </div>
</div>
@stop
