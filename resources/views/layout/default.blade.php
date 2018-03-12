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
      <script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>

        <!-- Bootstrap JavaScript -->
        <script src="{{ asset('contents/js/bootstrap.js') }}"></script>

      <!-- My Custom JavaScript -->
      <script src="{{ asset('contents/js/script.js') }}"></script>


    </body>

</html>
