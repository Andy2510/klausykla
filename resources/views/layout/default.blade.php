<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('includes.head')
    </head>


    <body>
      <!-- Beginning of Header -->
        @include('includes.header')
      <!-- End of Header -->

      <main>
      <!-- Beginning of Main -->
         @yield('content')
      <!-- End of Main -->
      </main>

      <footer>
      <!-- Beginning of Footer -->
      @include('includes.footer')
      <!-- End of Footer -->
      </footer>

      <!-- Scripts -->
      <!-- jQuery -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

      <!-- Bootstrap JavaScript -->
      <script src="{{ asset('assets/js/bootstrap.js') }}"></script>

      <!-- My Custom JavaScript -->
      <script src="{{ asset('assets/js/script.js') }}"></script>

    </body>

</html>
