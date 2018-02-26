<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('includes.head')
    </head>


    <body>
      <!-- Beginning of Header -->
        @include('includes.header')
      <!-- End of Header -->

      <!-- Beginning of Main -->
         @yield('content')
      <!-- End of Main -->

      <!-- Beginning of Footer -->
      @include('includes.footer')
      <!-- End of Footer -->

      <script src="{{ asset('assets/js/script.js') }}"></script>

    </body>

</html>
