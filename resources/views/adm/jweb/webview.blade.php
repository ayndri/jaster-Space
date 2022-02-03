@extends('layouts.simple.master')

@section('title', 'View Detail Order')

@section('css')
@endsection

@section('mxwidth')
@endsection

@section('style')

@endsection

@section('breadcrumb-title')
<h3>View Detail Order</h3>
@endsection

@section('tambah')
<a class="btn-ic btn-success m-r-10" href="{{route('jweb.active')}}"><i data-feather="arrow-left"></i></a>
<a class="btn-ic btn-danger m-r-10" href="{{ route('web.edit', $webs->idBrief) }}"><i data-feather="edit-2"></i></a>
<a class="btn-ic btn-warning m-r-10" href=""><i data-feather="eye"></i></a>
<a class="btn btn-primary" href="https://{{ $webs->domainAkses }}">Buka Web</a>
@endsection

@section('content')


<div class="container-fluid">

	<div class="row">
		<div class="col-md-12">
         <div class="card">

            <div class="card-header">
                <h3>{{ $webs->brandComp }}</h3>
                <p>{{ $webs->namaComp }} - {{ $webs->kotaComp }}</p>
            </div>
            <div class="card-body">
                <div class="bagi2">

                    <div class="div1">
                        <h5 class="m-b-30">☑️ Status Terakhir</h5>
                        {{-- @csrf  --}}
                       @foreach ($errors->all() as $error)
                       <p class="text-danger">{{ $error }}</p>
                       @endforeach
                      
                       <form class="formlatest" enctype="multipart/form-data" method="POST" action="{{route('status.add', $brief->idBrief)}}">
                           @csrf
                           <div class="form-group">
                                 <input class="form-control m-b-30" type="text" name="lastStatus" @if($brief->lastStatus != null) value="{{$brief->lastStatus}}" @endif placeholder="Kasih status terakhir disini...">
                         </div>
     
                       <button class="btn btn-primary btn-block" type="submit">Update Status</button>
                       @if($brief->dateStatus != null)
                       <span>{{ \Carbon\Carbon::parse($brief->dateStatus)->locale('id')->diffForHumans(null, true).' lalu' }} oleh {{$brief->updatedBy}}</span>
                       @endif
                       
                       </form>
                     </div>
                     <div class="div1">
                         <div class="form-group">
                             <label class="col-form-label">Username</label>
                             <input class="form-control" type="text" name="nama" value="{{ $webs->userAkses }}" readonly>
                         </div>
                         <div class="form-group">
                             <label class="col-form-label">Password</label>
                             <input class="form-control" type="text" name="nama" value="{{ $webs->passAkses }}" readonly>
                         </div>
                     </div>
                </div>

             </div>
          </div>
		</div>
        <div class="col-md-12">
            <div class="card">
   
               <div class="card-header">
                   <h5>🟡 Informasi Lain</h5>
               </div>
               <div class="card-body">
                 <ul class="proglist">
                    <li><b>Warna</b><p>: <span>{{ $webs->colorBrief }}</span></p></li>

                    <li><b>Tipe Post</b><p>: <span>{{ $webs->postBrief }}</span></p></li>

                    <li><b>Target</b><p>: <span>{{ $webs->targetBrief  }}</span></p></li>

                    <li><b>Paket</b><p>: <span>{{ $webs->paketBrief }}</span></p></li>

                    <li><b>Nama PIC</b><p>: <span>{{ $webs->nama }}</span></p></li>

                    <li><b>WhatsApp</b><p>: <span>0{{ $webs->telpUser }}</span></p></li>

                    <li><b>Jabatan</b><p>: <span>{{ $webs->jabatUser }}</span></p></li>

                    <li><b>Email PIC</b><p>: <span>{{ $webs->email }}</span></p></li>

                    <li><b>Deadline</b><p>: <span>
                        {{ Carbon\Carbon::parse($webs->deadlineOrder)->locale('id')->translatedFormat('d F Y')}}</span></p></li>
                 </ul>
                </div>
             </div>
        </div>
        <div class="col-md-12">
            <div class="card">
   
               <div class="card-header">
                   <h5>🟢 Social Media</h5>
               </div>
               <div class="card-body">
                 
                <div class="bagi2">
                    <div class="form-group">
                        <label class="col-form-label">No WhatsApp</label>
                        <textarea class="form-control" name="waBrief" readonly>{{ $webs->waBrief }}</textarea>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">No Telfon</label>
                        <textarea class="form-control" name="igBrief" readonly>{{ $webs->telfBrief }}</textarea>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Akun Facebook</label>
                        <textarea class="form-control" name="fbBrief" readonly>{{ $webs->fbBrief }}</textarea>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-form-label">Requestnya</label>
                        <textarea class="form-control" name="mpBrief" readonly>{{ $webs->reqBrief }}</textarea>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Akun Instagram</label>
                        <textarea class="form-control" name="sosBrief" readonly>{{ $webs->igBrief }}</textarea>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Akun Sosmed Lainnya</label>
                        <textarea class="form-control" name="telfBrief" readonly>{{ $webs->sosBrief }}</textarea>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Marketplace</label>
                        <textarea class="form-control" name="mpBrief" readonly>{{ $webs->mpBrief }}</textarea>
                    </div>
                    <div class="form-group" style="visibility: hidden">
                        <label class="col-form-label">Requestnya</label>
                        <textarea class="form-control" name="mpBrief" readonly>{{ $webs->reqBrief }}</textarea>
                    </div>
                    </div>
                </div>
             </div>
        </div>

	</div>
</div>

@endsection

@section('script')

@endsection
