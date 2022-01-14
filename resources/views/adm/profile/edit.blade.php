@extends('layouts.simple.master')

@section('title', 'Edit Profile')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/date-picker.css')}}">
@endsection

@section('mxwidth')
tengahkan
@endsection

@section('style')
<style>
    .bagi2 {
	columns: 2;
    }
</style>
@endsection

@section('breadcrumb-title')
<h3>Edit Profile</h3>
@endsection

@section('tambah')
<a href="{{route('account.index')}}" class="btn-sm btn-danger d-inline-block"><i class="fa fa-long-arrow-left"></i> Cancel</a>
@endsection

@section('content')


<div class="container-fluid">
	<div class="row">

		<div class="col-md-12">
         <div class="card">
             <div class="card-body">
               <form class="theme-form" method="POST" action="{{ route('profile.update',$user->nama) }}" enctype="multipart/form-data">

                  @csrf
                    <div class="error-message">
                    @foreach ($errors->all() as $error)
                        <p class="text-danger mb-1">*{{ $error }}</p>
                    @endforeach
                    </div>
                  <div class="row">
                     <div class="col-md-6">
                         <div class="bagi2">
                            <div class="form-group">
                                <label class="col-form-label">Nama User</label>
                                <input class="form-control" type="text" name="nama" value="{{ $user->nama }}" required>
                             </div>
                             <div class="form-group">
                                <label class="col-form-label">Username User</label>
                                @error('usrn')
                                <span class="text-danger text-right"><small>*{{ $message }}</small></span>
                                @enderror
                                <input class="form-control @error('usrn') is-invalid @enderror" type="text" name="usrn" value="{{ $user->usrn }}" >
                             </div>
                         </div>

                        <div class="form-group">
                           <label class="col-form-label">Tanggal Lahir User</label>
                           <input class="form-control" type="date" name="tglUser" value="{{ $user->tglUser }}">
                        </div>

                        <div class="form-group">
                           <label class="col-form-label">Alamat User</label>
                           <input class="form-control" type="text" name="addrUser" value="{{ $user->addrUser }}">
                        </div>

                        <div class="form-group">
                            <label class="col-form-label">Jabatan User</label>
                            <input class="form-control" type="text" name="jabatUser" value="{{ $user->jabatUser }}">
                         </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <label class="col-form-label">Email User</label>
                           @error('email')
                                <span class="text-danger text-right"><small>*{{ $message }}</small></span>
                            @enderror
                           <input class="form-control  @error('email') is-invalid @enderror" type="email" name="email" value="{{ $user->email }}">
                        </div>

                        <div class="form-group">
                           <label class="col-form-label">Nomer Whatsapp</label>
                           <input class="form-control" type="text" name="waUser" value="{{ $user->waUser }}">
                        </div>

                        <div class="form-group">
                            <label class="col-form-label">Kota User</label>
                            <input class="form-control" type="text" name="kotaUser" value="{{ $user->kotaUser }}">
                        </div>

                        <div class="form-group mt-4">
                            <label class="form-label">Upload foto profile</label>
                            @if ($user->fotoUser == NULL)
                            <br>
                            <img src="{{asset('assets/images/user/10.jpg')}}" alt="NULL" srcset="" width="120px">
                            @else
                            <img src="{{asset('storage/'.$user->fotoUser)}}" alt="" srcset="">
                            @endif
                            <input class="form-control mt-2" name="fotoUser" type="file">
                        </div>
                     </div>
                  </div>
                  <div class="form-group mt-5">
                     <button class="btn btn-primary btn-block w100" type="submit">Submit</button>
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

<script>
    setTimeout(function() {
        $('.error-message').hide()
    }, 4000);
</script>
@endsection
