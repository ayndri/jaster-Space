@extends('layouts.simple.master')

@section('title', 'Edit Campaign')

@section('css')
@endsection

@section('mxwidth')
tengahkan
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Edit Campaign</h3>
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
               <form class="theme-form" method="POST" action="{{ route('ads.edit', $act->idAds) }}">
                    @method('patch')
                  @csrf 
                     @foreach ($errors->all() as $error)
                     <p class="text-danger">{{ $error }}</p>
                     @endforeach 
                  <div class="row">
                     <div class="col-md-6">
                        <div class="form-group">
                           <label class="col-form-label">Nama Campaign</label>
                           <input class="form-control" type="text" name="namaAds" value="{{ $act->namaAds }}" required>
                        </div>
      
                        <div class="form-group">
                           <label class="col-form-label">Akun Ads</label>
                           <select class="form-control digits" name="akunAds" id="exampleFormControlSelect9" required="">
                              <option disabled>--- Pilih salah satu ---</option>
                              <option value="Akun A" @if ( $act->akunAds == 'Akun A') selected @endif>Akun A</option>
                              <option value="Akun B" @if ( $act->akunAds == 'Akun B') selected @endif>Akun B</option>
                              <option value="JasterAds" @if ( $act->akunAds == 'JasterAds') selected @endif>JasterAds</option>
                            </select>
                        </div>
      
                        <div class="form-group">
                           <label class="col-form-label">Saldo</label>
                           <input class="form-control" onkeypress="validate(event)" type="number" name="saldoAds" value="{{ $act->saldoAds }}" required="">
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <label class="col-form-label">Tanggal Mulai</label>
                           <input class="form-control" type="date" name="mulaiAds" value="{{ $act->mulaiAds }}" required="">
                        </div>
      
                        <div class="form-group">
                           <label class="col-form-label">Tanggal Akhir</label>
                           <input class="form-control" type="date" name="selesaiAds" value="{{ $act->selesaiAds }}" required="">
                        </div>
      
                        <div class="form-group">
                           <label class="col-form-label">Note Ads</label>
                           <textarea class="form-control"" name="noteAds" id="" rows="3" placeholder="Request Campaign ini">{{ $act->noteAds }}</textarea>
                        </div>
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
