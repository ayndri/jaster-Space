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
<h3>Add User</h3>
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
               <form class="theme-form" method="POST" action="{{ route('account.store') }}">

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
                                <input class="form-control" type="text" name="nama" value="{{ old('nama') }}" required>
                             </div>
                             <div class="form-group">
                                <label class="col-form-label">Username User</label>
                                @error('usrn')
                                <span class="text-danger text-right"><small>*{{ $message }}</small></span>
                                @enderror
                                <input class="form-control @error('usrn') is-invalid @enderror" type="text" name="usrn" value="{{ old('usrn') }}" >
                             </div>
                         </div>

                        <div class="form-group">
                           <label class="col-form-label">Tanggal Lahir User</label>
                           <input class="form-control" type="date" name="tglUser" value="{{ old('tglUser') }}">
                        </div>

                        <div class="form-group">
                           <label class="col-form-label">Alamat User</label>
                           <input class="form-control" type="text" name="addrUser" value="{{ old('addrUser') }}">
                        </div>

                        <div class="form-group">
                            <label class="col-form-label">Jabatan User</label>
                            <input class="form-control" type="text" name="jabatUser" value="{{ old('jabatUser') }}">
                         </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <label class="col-form-label">Email User</label>
                           @error('email')
                                <span class="text-danger text-right"><small>*{{ $message }}</small></span>
                            @enderror
                           <input class="form-control  @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}">
                        </div>

                        <div class="form-group">
                           <label class="col-form-label">Nomer Whatsapp</label>
                           <div class="form-icon">
                            <span>+62</span>
                            <input class="form-control" type="text" name="telpUser" value="{{ old('telpUser') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-form-label">Kota User</label>
                            <input class="form-control" type="text" name="kotaUser" value="{{ old('kotaUser') }}">
                        </div>

                        <div class="form-group">
                            <label class="col-form-label">Role User</label>
                            @error('idRole')
                            <span class="text-danger text-right"><small>*{{ $message }}</small></span>
                            @enderror
                            <select name="idRole" class="form-control @error('idRole') is-invalid @enderror" required>
                                <option disabled selected>-- Pilih salah satu --</option>
                                <option value="1">Superadmin</option>
                                <option value="2">Admin</option>
                                <option value="3">Team</option>
                                <option value="4">Client</option>
                                <option value="5">Magang</option>
                            </select>
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

<script>
    setTimeout(function() {
        $('.error-message').hide()
    }, 4000);
</script>
@endsection
