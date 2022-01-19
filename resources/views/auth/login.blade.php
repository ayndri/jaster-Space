@extends('layouts.auth.master')
@section('title', 'Team Area')

@section('css')
@endsection

@section('style')
<style>
body{
   background:#edecff;
}
</style>
@endsection

@section('content')
<div class="container-fluid p-0">
   <div class="row m-0">
      <div class="col-12 p-0">
         <div class="login-card">
            <div>
               <div><a class="logo" href="{{ route('/') }}"><img class="img-fluid for-light" src="{{asset('assets/img/logoweb.png')}}" alt="looginpage"><img class="img-fluid for-dark" src="{{asset('assets/images/logo/logo_dark.png')}}" alt="looginpage"></a></div>
               <div class="login-main m-t-15">
                <form class="theme-form" method="POST" action="{{ route('login') }}">
                    @csrf
                     <h4>Login dulu ya</h4>
                     <p>Awali dengan بسم الله الرحمن الرحيم 💪</p>
                     <div class="form-group">
                        <label class="col-form-label">Username</label>
                        @if(Session::has('error'))<span class="redalert"><i data-feather="info"></i> {{ Session::get('error')}}</span>@endif
                        @if(Session::has('error-all'))<span class="redalert"><i data-feather="info"></i> {{ Session::get('error-all')}}</span> @endif
                        <div class="form-icon-v2">
                           <span><i data-feather="at-sign"></i></span>
                           <input class="form-control" type="text" name="usrn" required="" placeholder="Masukkan Username">
                       </div>
                     </div>
                     <div class="form-group">
                        <label class="col-form-label">Password</label>
                        @if(Session::has('error-pass'))<span class="redalert"><i data-feather="info"></i> {{ Session::get('error-pass')}}</span> @endif
                        <div class="form-icon-v2">
                           <span><i data-feather="lock"></i></span>
                           <input class="form-control" type="password" name="password" required>
                       </div>
                     </div>
                     <div class="form-group mt-4">
                        <button class="btn btn-primary btn-block" type="submit">Masuk Sekarang</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

@section('script')
@endsection