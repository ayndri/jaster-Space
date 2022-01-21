@extends('layouts.simple.master')

@section('title', 'Send Email')

@section('css')
@endsection

@section('mxwidth')
tengahkan
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Send Email</h3>
@endsection

@section('tambah')
<a href="{{route('email')}}" class="btn-sm btn-danger d-inline-block"><i class="fa fa-long-arrow-left"></i> Cancel</a>
@endsection

@section('content')


<div class="container-fluid">
	<div class="row">

		<div class="col-md-12">
         <div class="card">
             <div class="card-body">
               <form class="theme-form" method="POST" action="{{ route('email.send') }}">

                  @csrf
                    <div class="error-message">
                    @foreach ($errors->all() as $error)
                        <p class="text-danger mb-1">*{{ $error }}</p>
                    @endforeach
                    </div>
                  <div class="row">
                     <div class="col-md-12">

                        <div class="form-group">
                           <label class="col-form-label">Nomer Order</label>
                           <div class="form-icon">
                            <span>#</span>
                            <input class="form-control" type="text" name="noOrder" placeholder="Masukkan Nomer Order" value="{{ old('noOrder') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-form-label">Email User</label>
                            <input class="form-control" type="text" name="email" placeholder="Masukkan Email Client" value="{{ old('email') }}">
                        </div>


                        <div class="form-group">
                            <label class="col-form-label">Link GDrive</label>
                            <input class="form-control" type="text" name="gd" placeholder="Pastikan aksesnya can edit" value="{{ old('gd') }}" required>
                         </div>

                     </div>
                  </div>




                  <div class="form-group mt-5 text-center">
                      <span>Pastikan Order sudah lunas sebelum kamu Send Email</span>
                     <button class="btn btn-primary btn-block w100 m-t-10" type="submit">Send Now</button>
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
