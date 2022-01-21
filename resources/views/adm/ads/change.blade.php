@extends('layouts.simple.master')

@section('title', 'Edit TopUp')

@section('css')
@endsection

@section('style')
@endsection

@section('mxwidth')
kecil
@endsection

@section('breadcrumb-title')
<h3>Edit TopUp</h3>
@endsection

@section('tambah')
<a href="{{route('ads.alltop')}}" class="btn-sm btn-danger d-inline-block"><i class="fa fa-long-arrow-left"></i> Cancel</a>
@endsection

@section('content')


<div class="container-fluid">
	<div class="row">
		
		<div class="col-md-12">
         <div class="card">
             <div class="card-body">
               <form class="theme-form" method="POST" action="{{ route('ads.change', $topups->idTop) }}">
                    @method('patch')
                  @csrf 
                     @foreach ($errors->all() as $error)
                     <p class="text-danger">{{ $error }}</p>
                     @endforeach 
                  <div class="row">
                        <div class="form-group">
                           <label class="col-form-label">Nama Campaign</label>
                           <input class="form-control" type="text" name="idAds" value="{{ $topups->namaAds }}" disabled>
                        </div>
      
                        <div class="form-group">
                           <label class="col-form-label">Saldo</label>
                           <input class="form-control" onkeypress="validate(event)" type="number" name="saldoTop" value="{{ $topups->saldoTop }}" required="">
                        </div>
                        <div class="form-group">
                           <label class="col-form-label">Tanggal TopUp</label>
                           <input class="form-control" type="date" name="tglTop" value="{{ $topups->tglTop }}" required="">
                        </div>
                  </div>
                  
                  

                  
                  <div class="form-group mt-5">
                     <button class="btn btn-primary btn-block w100" type="submit">Save Changes</button>
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
