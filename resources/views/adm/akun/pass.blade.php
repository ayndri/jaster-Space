@extends('layouts.simple.master')

@section('title', 'Password')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/chartist.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/date-picker.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Password</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Dashboard</li>
<li class="breadcrumb-item active">Password</li>
@endsection

@section('content')


<div class="container-fluid">
	<div class="row">
		
		<div class="col-md-6">
         <div class="card">
            <div class="card-header">
                
               <h4>Ubah Password</h4>
               <span>Pastikan password baru kamu sudah benar dan kamu ingat ingat</span>
             </div>
             <div class="card-body">
                <form class="theme-form" method="POST" action="{{ route('change.pass') }}">

                    @csrf 
                       @foreach ($errors->all() as $error)
                       <p class="text-danger">{{ $error }}</p>
                       @endforeach 


                    <div class="form-group">
                       <label class="col-form-label">Password Baru</label>
                       <input class="form-control" type="password" name="new_password" autocomplete="current-password" required="" placeholder="*********">
                    </div>
                    <div class="form-group">
                       <label class="col-form-label">Ketik Ulang Password Baru</label>
                       <input class="form-control" type="password" name="new_confirm_password" autocomplete="current-password" required="" placeholder="*********">
                    </div>
                    <div class="form-group mt-5">
                       <button class="btn btn-primary btn-block" type="submit">Change Now</button>
                    </div>
                    
                 </form>
             </div>
          </div>
		</div>
	</div>
</div>

@endsection

@section('script')
<script src="{{asset('assets/js/datepicker/date-picker/datepicker.js')}}"></script>
<script src="{{asset('assets/js/datepicker/date-picker/datepicker.en.js')}}"></script>
<script src="{{asset('assets/js/datepicker/date-picker/datepicker.custom.js')}}"></script>
@endsection
