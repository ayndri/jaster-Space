@extends('layouts.simple.master')

@section('title', 'Send Notes')

@section('css')
@endsection

@section('mxwidth')
tengahkan
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Send Notes</h3>
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
                            <textarea class="ckeditor form-control" name="isiPesan" rows="3" id="valueArea" required="" placeholder="Masukkan Notes"></textarea>
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
<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>
<script>
    $('document').ready(function () {

    $('#nerima').on('change', function () {
        var selectedUserSend = $(this).children("option:selected").val();
        var lihatNote = [@php for($i = 0; $i < count($listNotes); $i++) { echo $listNotes[$i]->toJson(); if ($i + 1 < count($listNotes)) { echo ','; } } @endphp]

        lihatNote.forEach(function (item, index) {
            if (selectedUserSend == item.penerima && {{ auth()->user()->idUser }} == item.pengirim ) {
                document.getElementById("valueArea").value = item.isiPesan;
                console.log(item.isiPesan)
            }


    })

    })
    })
</script>

@endsection
