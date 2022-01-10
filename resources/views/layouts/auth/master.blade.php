@include('layouts.main.head')
  <body>
    <!-- login page start-->
    @yield('content')  
    <!-- latest jquery-->
    @include('layouts.auth.script') 
  </body>
</html>