@extends('layouts.simple.master')

@section('title', 'Add TopUp')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Add TopUp</h3>
@endsection

@section('tambah')
<a href="{{route('ads.alltop')}}" class="btn-sm btn-danger d-inline-block"><i class="fa fa-long-arrow-left"></i> Cancel</a>
@endsection

@section('content')


<div class="container-fluid">
	<div class="row">
		
		<div class="col-md-5">
         <div class="card">
             <div class="card-body">
               <form class="theme-form" method="POST" action="{{ route('ads.storetop') }}">

                  @csrf 
                     @foreach ($errors->all() as $error)
                     <p class="text-danger">{{ $error }}</p>
                     @endforeach 
                  <div class="row">
                        <div class="form-group">
                           <label class="col-form-label">Nama Campaign</label>
                           
                           <select class="form-control digits" name="idAds" id="exampleFormControlSelect9" required="">
                            <option disabled>--- Choose one ---</option>
                            @forelse ($gads as $gad)
                            <option value="{{ $gad->idAds }}">{{ $gad->namaAds }}</option>
                            @endforeach
                          </select>

                        </div>
      
                        <div class="form-group">
                           <label class="col-form-label">Saldo</label>
                           <input class="form-control" type="text" onkeypress="validate(event)" name="saldoTop" required="">
                        </div>
                     <div class="form-group">
                        <label class="col-form-label">Tanggal Top Up</label>
                        <input class="form-control" type="date" name="tglTop" required="">
                     </div>
                    
                  </div>
                  
                  

                  
                  <div class="form-group mt-5">
                     <button class="btn btn-primary btn-block w100" type="submit">Submit Top Up</button>
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
