<div id="page-container">
      <header>
        <div class="grid">
          <div class="row">
              <nav class="clearfix full-wrapper">
                <div id="navbar" class="text-center">
                  <ul>
                  @guest
                    <li><a href='{{ route('index') }}'>Home</a></li>
                    <li><a href='#blog'>News</a></li>
                  @endguest

                  @if (Auth::check())
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

                  @guest
                   <li><a href='#suggest'>Suggest!</a></li>
                   <li><a href='{{ route('register') }}' class="auth-btn"><i class="far fa-arrow-alt-circle-right"></i> Register</a></li>
                   <li><a href='{{ route('login') }}' class="auth-btn"><i class="fas fa-lock"></i> Sign In</a></li>
                  @endguest

                  @if (Auth::check())
                    <li>
                      <a class="auth-btn" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();"
                  ><i class="fas fa-lock"></i> Sign Out</a></li>
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
                <h1 class="text-center bold">Blog</h1>
                <h2 class="text-center">Haters gonna say it's fake</h2>
                <!-- <div class="spacer-box"></div> -->
              </div>
            </div>
          </div>
        </div>
      </section>
