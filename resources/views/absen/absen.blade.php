@extends('layouts.simple.master')

@section('title', 'Add Absen')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/date-picker.css')}}">
@endsection

@section('mxwidth')
tengahkan
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Add Absen</h3>
@endsection

@section('tambah')
<a href="{{route('ads.active')}}" class="btn-sm btn-danger d-inline-block"><i class="fa fa-long-arrow-left"></i> Cancel</a>
@endsection

@section('content')


<div class="container-fluid">
	<div class="row">
		
		<div class="col-md-12">
         <div class="card">
             <div class="card-body">
               <form class="theme-form" method="POST" action="{{ route('add.absen') }}">

                  @csrf 
                     @foreach ($errors->all() as $error)
                     <p class="text-danger">{{ $error }}</p>
                     @endforeach 
                  <div class="row">
                     <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-form-label">Tanggal Absen</label>
                            <input class="form-control" type="date" name="tglAbsen" required="">
                         </div>
      
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-form-label">Berapa Hari Kerja</label>
                            <div class="input-group mb-3">
                            <input class="form-control" type="text" name="jmlAbsen" required>
                            <span class="input-group-text" id="basic-addon2">Hari</span>
                            </div>
                         </div>
      
      
                     </div>

                     <div class="col-md-12">
                        <div class="form-group">
                            <label class="col-form-label">Perihal Absen</label>
                            <select class="form-control digits" name="perihalAbsen" id="exampleFormControlSelect9" required>
                               <option>--- Pilih salah satu ---</option>
                               <option value="fit">Kurang Fit</option>
                               <option value="sakit">Sakit</option>
                               <option value="keluarga">Acara Keluarga</option>
                               <option value="lain">Acara Lain</option>
                               <option value="lainnya">Lainnya (Jelaskan di rincian)</option>                            
                             </select>
                         </div>

                         
                        <div class="form-group">
                            <label class="col-form-label">Rincian Absen</label>
                            <textarea class="form-control"" name="isiAbsen" id="" rows="3" required="" placeholder="Request Campaign ini"></textarea>
                         </div>
                     </div>
                  </div>
                  
                  

                  
                  <div class="form-group mt-5">
                     <button class="btn btn-primary btn-block w100" type="submit">Submit Absen</button>
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
