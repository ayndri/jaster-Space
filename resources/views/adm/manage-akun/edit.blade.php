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
<h3>Edit User</h3>
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
               <form class="theme-form" method="POST" action="{{ route('account.update',$user) }}" enctype="multipart/form-data">

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
                           <div class="form-icon">
                            <span>+62</span>
                            <input class="form-control" type="text" name="telpUser" value="{{ $user->telpUser }}">
                       </div>
                            </div>

                        <div class="form-group">
                            <label class="col-form-label">Kota User</label>
                            <input class="form-control" type="text" name="kotaUser" value="{{ $user->kotaUser }}">
                        </div>

                        <div class="form-group">
                            <label class="col-form-label">Role User</label>
                            @error('idRole')
                            <span class="text-danger text-right"><small>*{{ $message }}</small></span>
                            @enderror
                            <select name="idRole" class="form-control @error('idRole') is-invalid @enderror" required>
                                    <option disabled>-- Pilih salah satu --</option>
                                @foreach ($roles as $role)
                                    <option value="{{$role->id}}"  {{ $role->id == $user->roles->pluck('name')[0] ? 'selected' : '' }}>
                                        @if ($role->id == 1)
                                            Superadmin
                                        @elseif ($role->id == 2)
                                            Admin
                                        @elseif ($role->id == 3)
                                            Team
                                        @elseif ($role->id == 4)
                                            Client
                                        @else
                                            Magang
                                        @endif
                                    </option>
                                 @endforeach
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
