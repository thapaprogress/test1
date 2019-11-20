<!DOCTYPE html>
<html lang="en">
  <head>
    @include('partials._head')
  </head>

    <body data-spy="scroll" data-target=".navbar" data-offset="50">

    @include('partials._nav')
    <div class="sidebar">
      @include('partials._sidebar')
    </div>



    <div class="container">
      @include('partials._messages')

      @yield('content')

    

    </div> <!-- end of .container -->
      @include('partials._footer')

        @include('partials._javascript')

        @yield('scripts')

  </body>
</html>
