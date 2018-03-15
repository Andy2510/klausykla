<div id="page-container">
      <header>
        <div class="grid">
          <div class="row">
              <nav class="clearfix full-wrapper">

                <!-- <div class="status-bar ">
                    @if (session('status'))
                    <div class="alert alert-success">
                      <h6 class="text-center bold">Jūs prisijungėte!</h6>
                    </div>
                    @endif
                </div> -->

                <div id="navbar" class="text-center">
                  <ul>
                    <li><a href='{{ route('index') }}'>Home</a></li>
                    <li><a href='#blog'>News</a></li>

                    @if(Auth::check() && Auth::user()->isAdmin())
                    <li class='active'>
                      <a href='#'><i class="fab fa-odnoklassniki"></i> Admin Panel</a>
                      <ul class="">
                        <li><a href='#'>Create New Entry</a></li>
                        <li><a href='#'>Edit Entries</a></li>
                        <li><a href='#'>Userlist</a></li>
                        <li><a href='#'>Sign Out</a></li>
                      </ul>
                    </li>
                    @endif

                  <li><a href='#suggest'>Suggest!</a></li>

                  @guest
                  <li><a href='{{ route('register') }}' class="auth-btn"><i class="far fa-arrow-alt-circle-right"></i> Register</a></li>
                  <li><a href='{{ route('login') }}' class="auth-btn"><i class="fas fa-lock"></i> Sign In</a></li>
                  @endguest

                  @if(Auth::user())
                  <li class='active'>
                  <a href='#'><i class="fas fa-user"></i> {{ Auth::user()->name }}</a>
                  <ul class="">
                    <!-- <li><a href="{{ route('editUser') }}">Edit My Profile</a></li> -->
                    <li><a href="{{ route('logout') }}"><i class="fas fa-lock-open"></i> Sign Out</a></li>
                  </ul>
                </li>
                  @endif


                 </ul>
               </div>
              </nav>
          </div>
        </div>
      </header>


      <section id="intro">
        <div class="intro__content">
          <div class="grid">
            <div class="row">
              <div class="col md-6-12 md-push-left-3-12">
                <h1 class="text-center bold">Klausykla Blog</h1>
                <h2 class="text-center">Haters gonna say it's fake</h2>
                <!-- <div class="spacer-box"></div> -->
              </div>
            </div>
          </div>
        </div>
      </section>
