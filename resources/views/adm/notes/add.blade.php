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
<h3>Notes</h3>
@endsection

@section('tambah')
<a href="{{route('/')}}" class="btn-sm btn-danger d-inline-block"><i class="fa fa-long-arrow-left"></i> Cancel</a>
@endsection

@section('content')


<div class="container-fluid">
	<div class="row">

		<div class="col-md-12">
         <div class="card">
             <div class="card-body">
               <form class="theme-form" method="POST" action="{{ route('notes.store') }}">

                  @csrf
                     @foreach ($errors->all() as $error)
                     <p class="text-danger">{{ $error }}</p>
                     @endforeach
                  <div class="row">
                    <input type="text" hidden value="{{auth()->user()->idUser}}" name="pengirim">
                     <div class="col-md-12">
                        <div class="form-group">
                            <label class="col-form-label">Kirim Ke</label>
                            <select class="form-control digits" name="penerima" id="nerima" required>
                               <option>--- Pilih salah satu ---</option>
                               @foreach ($user as $users)
                               <option value="{{$users->idUser}}">{{$users->nama}}</option>
                               @endforeach
                             </select>
                         </div>


                        <div class="form-group">
                            <label class="col-form-label">Isi Notes</label>
                            <textarea class="form-control" name="isiPesan" rows="3" id="area" required="" placeholder="Masukkan Notes"></textarea>
                         </div>
                     </div>
                  </div>




                  <div class="form-group mt-5">
                     <button class="btn btn-primary btn-block w100" type="submit">Submit Notes</button>
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
 $('document').ready(function () {

    $('#nerima').on('change', function () {
        var selectedUserSend = $(this).children("option:selected").val();
        console.log(selectedUserSend);

    })

    })
</script>
<script>

@endsection
