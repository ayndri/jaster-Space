@include('layouts.main.head')
  <!-- <body @if(Route::current()->getName() == 'index') onload="startTime()" @endif> -->
  <body class="dark-only">
    @include('sweetalert::alert')

    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper horizontal-wrapper enterprice-type" id="pageWrapper">
      <!-- Page Header Start-->
      @include('layouts.simple.header')
      @include('layouts.simple.sidebar')
      <!-- Page Header Ends  -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <!-- Page Sidebar Ends-->
        <div class="page-body @yield('mxwidth')">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-6">
                  @yield('breadcrumb-title')
                </div>
                <div class="col-6 text-right">
                  @yield('tambah')
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          @yield('content')
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        @include('layouts.simple.footer')

      </div>
    </div>
    <!-- latest jquery-->
    @include('layouts.simple.script')
    <!-- Plugin used-->


  </body>
</html>
