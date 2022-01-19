@extends('layouts.simple.master')

@section('title', 'Add Campaign')

@section('css')
@endsection

@section('mxwidth')
tengahkan
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Add Campaign</h3>
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
               <form class="theme-form" method="POST" action="{{ route('ads.add') }}">

                  @csrf 
                     @foreach ($errors->all() as $error)
                     <p class="text-danger">{{ $error }}</p>
                     @endforeach 
                  <div class="row">
                     <div class="col-md-6">
                        <div class="form-group">
                           <label class="col-form-label">Nama Campaign</label>
                           <input class="form-control" type="text" name="namaAds" required>
                        </div>
      
                        <div class="form-group">
                           <label class="col-form-label">Akun Ads</label>
                           <select class="form-control digits" name="akunAds" id="exampleFormControlSelect9" required="">
                              <option disabled>--- Pilih salah satu ---</option>
                              <option value="Akun B">Akun B</option>
                              <option selected value="JasterAds">JasterAds</option>
                            </select>
                        </div>
      
                        <div class="form-group">
                           <label class="col-form-label">Saldo</label>
                           <input class="form-control" type="text" onkeypress="validate(event)" name="saldoAds" required="">
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <label class="col-form-label">Tanggal Mulai</label>
                           <input class="form-control" type="date" name="mulaiAds" required="">
                        </div>
      
                        <div class="form-group">
                           <label class="col-form-label">Tanggal Akhir</label>
                           <input class="form-control" type="date" name="selesaiAds" required="">
                        </div>
      
                        <div class="form-group">
                           <label class="col-form-label">Note Ads</label>
                           <textarea class="form-control"" name="noteAds" id="" rows="3" placeholder="Request Campaign ini"></textarea>
                        </div>
                     </div>
                  </div>
                  
                  

                  
                  <div class="form-group mt-5">
                     <button class="btn btn-primary btn-block w100" type="submit">Submit Campaign</button>
                  </div>
                  
               </form>
             </div>
          </div>
		</div>
	</div>
</div>

@endsection

@section('script')

@endsection
