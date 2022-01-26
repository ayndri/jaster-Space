@extends('layouts.simple.master')

@section('title', 'Izin Absen')

@section('css')
@endsection

@section('mxwidth')
tengahkan
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Izin Absen</h3>
@endsection

@section('tambah')
<a href="{{route('team.absen')}}" class="btn-sm btn-danger d-inline-block"><i class="fa fa-long-arrow-left"></i> Cancel</a>
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
                            <label class="col-form-label">Berapa Hari Kerja ?</label>
                            <div class="input-group mb-3">
                              <div class="form-icon-right">
                                 <input class="rupiah form-control" type="text" name="jmlAbsen" id="renew" onkeypress="validate(event)" required>
                                 <span>Hari</span>
                             </div>
                            </div>
                         </div>
      
      
                     </div>

                     <div class="col-md-12">
                        <div class="form-group">
                            <label class="col-form-label">Perihal Absen</label>
                            <select class="form-control digits" name="perihalAbsen" id="exampleFormControlSelect9" required>
                               <option>--- Pilih salah satu ---</option>
                               <option value="Kurang Fit">Kurang Fit</option>
                               <option value="Sakit">Sakit</option>
                               <option value="Acara Keluarga">Acara Keluarga</option>
                               <option value="Acara Lain">Acara Lain</option>
                               <option value="Lainnya">Lainnya</option>                            
                             </select>
                         </div>

                         
                        <div class="form-group">
                            <label class="col-form-label">Rincian Absen</label>
                            <textarea class="form-control" name="isiAbsen" id="" rows="3" required="" placeholder="Request Campaign ini"></textarea>
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

@endsection
