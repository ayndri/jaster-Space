@extends('layouts.simple.master')
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

@section('title', 'Progress Order')

@section('css')
@endsection

@section('mxwidth')
@endsection

@section('style')
<style>
    .progress{
  width: 150px;
  height: 20px;
  background-color: #333;
  border: 1px solid black;
  }

.progress-inner{
  background-color: #f7f;
  width: 0%;
  height: 100%;
  }
</style>
@endsection

@section('breadcrumb-title')
<h3>Progress Order</h3>
@endsection

@section('tambah')

@endsection

@section('content')


<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">

                <div class="card-header">
                    <h6>🏢 Progress </h6>
                </div>
                <div class="card-body">
                      {{-- @csrf  --}}
                    @foreach ($errors->all() as $error)
                    <p class="text-danger">{{ $error }}</p>
                    @endforeach

                    <form class="" enctype="multipart/form-data" method="POST">
                        @csrf

                    <div class="form-check">
                        <input class="myCheckBox" type="checkbox" name="nilai[]" id="flexCheckDefault" value="7" data-nilai="a" @if (str_contains($brief->nilaiBrief, "a")) checked @endif >
                        <label class="form-check-label" for="flexCheckDefault">
                          Beli Domain
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="myCheckBox" type="checkbox" name="nilai[]" id="flexCheckChecked" value="3" data-nilai="b" @if (str_contains($brief->nilaiBrief, "b")) checked @endif>
                        <label class="form-check-label" for="flexCheckChecked">
                          Setup Web
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="myCheckBox" type="checkbox" name="nilai[]" id="flexCheckDefault" value="0" data-nilai="c" @if (str_contains($brief->nilaiBrief, "c")) checked @endif>
                        <label class="form-check-label" for="flexCheckDefault">
                          Data Awal
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="myCheckBox" type="checkbox" name="nilai[]" id="flexCheckChecked" value="5" data-nilai="d" @if (str_contains($brief->nilaiBrief, "d")) checked @endif>
                        <label class="form-check-label" for="flexCheckChecked">
                          Konsep
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="myCheckBox" type="checkbox" name="nilai[]" id="flexCheckChecked" value="15" data-nilai="e" @if (str_contains($brief->nilaiBrief, "e")) checked @endif>
                        <label class="form-check-label" for="flexCheckChecked">
                          Build Home
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="myCheckBox" type="checkbox" name="nilai[]" id="flexCheckChecked" value="10" data-nilai="f" @if (str_contains($brief->nilaiBrief, "f")) checked @endif>
                        <label class="form-check-label" for="flexCheckChecked">
                          Briefing Konten
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="myCheckBox" type="checkbox" name="nilai[]" id="flexCheckChecked" value="10" data-nilai="g" @if (str_contains($brief->nilaiBrief, "g")) checked @endif>
                        <label class="form-check-label" for="flexCheckChecked">
                          Kelengkapan Data
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="myCheckBox" type="checkbox" name="nilai[]" id="flexCheckChecked" value="15" data-nilai="h" @if (str_contains($brief->nilaiBrief, "h")) checked @endif>
                        <label class="form-check-label" for="flexCheckChecked">
                          Upload Konten
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="myCheckBox" type="checkbox" name="nilai[]" id="flexCheckChecked" value="10" data-nilai="i" @if (str_contains($brief->nilaiBrief, "i")) checked @endif>
                        <label class="form-check-label" for="flexCheckChecked">
                          Fix Other Pages
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="myCheckBox" type="checkbox" name="nilai[]" id="flexCheckChecked" value="10" data-nilai="j" @if (str_contains($brief->nilaiBrief, "j")) checked @endif>
                        <label class="form-check-label" for="flexCheckChecked">
                          Checking
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="myCheckBox" type="checkbox" name="nilai[]" id="flexCheckChecked" value="2" data-nilai="k" @if (str_contains($brief->nilaiBrief, "k")) checked @endif>
                        <label class="form-check-label" for="flexCheckChecked">
                          Poles
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="myCheckBox" type="checkbox" name="nilai[]" id="flexCheckChecked" value="3" data-nilai="l" @if (str_contains($brief->nilaiBrief, "l")) checked @endif>
                        <label class="form-check-label" for="flexCheckChecked">
                          SuruhCek
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="myCheckBox" type="checkbox" name="nilai[]" id="flexCheckChecked" value="5" data-nilai="m" @if (str_contains($brief->nilaiBrief, "m")) checked @endif>
                        <label class="form-check-label" for="flexCheckChecked">
                          Runtest, AAM & Packing
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="myCheckBox" type="checkbox" name="nilai[]" id="flexCheckChecked" value="2" data-nilai="n" @if (str_contains($brief->nilaiBrief, "n")) checked @endif>
                        <label class="form-check-label" for="flexCheckChecked">
                          Lunas
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="myCheckBox" type="checkbox" name="nilai[]" id="flexCheckChecked" value="1" data-nilai="o" @if (str_contains($brief->nilaiBrief, "o")) checked @endif>
                        <label class="form-check-label" for="flexCheckChecked">
                          Backup
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="myCheckBox" type="checkbox" name="nilai[]" id="flexCheckChecked" value="2" data-nilai="p" @if (str_contains($brief->nilaiBrief, "p")) checked @endif>
                        <label class="form-check-label" for="flexCheckChecked">
                          Its Done!
                        </label>
                      </div>

                      <input type="hidden" name="idBrief" id="idBrief" value="{{$brief->idBrief}}">

                      <input class="" type="hidden" name="progressBrief" id="progress">
                      <input class="" type="hidden" name="nilaiBrief" id="nilai">

                    </form>


                 </div>
              </div>
        </div>

        <div class="col-md-6">
          <div class="card">

              <div class="card-header">
                  <h6>☑️ Status Terakhir</h6>
              </div>
              <div class="card-body">
                    {{-- @csrf  --}}
                  @foreach ($errors->all() as $error)
                  <p class="text-danger">{{ $error }}</p>
                  @endforeach

                  <form class="formlatest" enctype="multipart/form-data" method="POST" action="{{route('status.add', $brief->idBrief)}}">
                      @csrf
                      <div class="form-group">
                            <input class="form-control" type="text" name="lastStatus" @if($brief->lastStatus != null) value="{{$brief->lastStatus}}" @endif placeholder="Kasih status terakhir disini...">
                    </div>

                  <button class="btn btn-primary btn-block" type="submit">Submit New Order</button>
                  @if($brief->dateStatus != null)
                  <span>{{ \Carbon\Carbon::parse($brief->dateStatus)->locale('id')->diffForHumans(null, true).' lalu' }} oleh {{$brief->updatedBy}}</span>
                  @endif

                  </form>

               </div>
            </div>
      </div>

      <div class="col-md-6">
        <div class="card">

            <div class="card-header">
                <h6>☑️ Progress</h6>
            </div>
            <div class="card-body">
                  {{-- @csrf  --}}
                @foreach ($errors->all() as $error)
                <p class="text-danger">{{ $error }}</p>
                @endforeach

                <form class="formlatest" enctype="multipart/form-data" method="POST" action="{{route('progress.upd', $brief->idBrief)}}">
                    @csrf
                    <div class="form-group">
                          <input class="form-control" id="progresstext" type="text" name="progressBrief" @if($brief->lastStatus != null) value="{{$brief->progressBrief}}" @endif placeholder="Kasih progress terakhir disini...">
                  </div>

                <button class="btn btn-primary btn-block" type="submit">Submit Progress</button>
                @if($brief->tglProgress != null)
                <span>{{ \Carbon\Carbon::parse($brief->tglProgress)->locale('id')->diffForHumans(null, true).' lalu' }} oleh {{$brief->progressBy}}</span>
                @endif

                </form>

             </div>
          </div>
    </div>


    </div>
</div>

@endsection

@section('script')

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>



var idBrief = $('#idBrief').val();
var url = "{{ route('progress.add', ":id") }}";
url = url.replace(':id', idBrief);

var urldel = "{{ route('progress.del', ":id") }}";
urldel = urldel.replace(':id', idBrief);



$('.myCheckBox').click(function() {

    var checkBoxes = document.querySelectorAll(".myCheckBox");
  var progress = document.querySelector(".progress-inner");
  var prog = 0;
  var nilai = 0;
  var toastLiveExample = document.getElementById('liveToast')
  var gagal = document.getElementById('gagal')


          if($(this).prop("checked") == true){

            Swal.fire({
      toast: true,
  position: 'bottom-end',
  icon: 'success',
  title: 'Progress Berhasil Ditambahkan',
  showConfirmButton: false,
  timer: 1500
})

            $("input:checked").each(function () {
              prog += parseInt($(this).val());

              nilai += $(this).data('nilai');

             })

             $('#progress').val(prog);
             $('#progresstext').val(prog);

             var tanpa = nilai.replace(/^0+/, '');

              $('#nilai').val(tanpa);

              var sempur = $('#progress').val();



              if( sempur != 100)
  {
    $.ajax({
            headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
         type: "POST",
         url: url,
         dataType: 'json',
         data: {
            "_token": "{{ csrf_token() }}",
             'progressBrief': prog,
             'nilaiBrief': tanpa
         },

         success: function (data) {
           alert('Added successfully!');
         }


     });
  }

  else {

    Swal.fire({
        title: "Delete Order?",
        text: "Apakah anda yakin order ini telah selesai semua progress nya?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: `Iya`,
        denyButtonText: `Maaf Tidak Jadi`,
        dangerMode: true,
      }).then((result) => {
          if (result.isConfirmed) {

            $.ajax({
            headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
         type: "POST",
         url: urldel,
         dataType: 'json',
         data: {
            "_token": "{{ csrf_token() }}"
         },

         complete: function () {
          window.location.href = "{{URL::to('jweb/active')}}"
         }


     });






} else {
            swal.fire("Tidak jadi", "Project tidak jadi dihapus", "error");
          }
        });



  }






            }
            else if($(this).prop("checked") == false){
              Swal.fire({
      toast: true,
  position: 'bottom-end',
  icon: 'error',
  title: 'Progress Berhasil Dihapus',
  showConfirmButton: false,
  timer: 1500
})
            }




      });




</script>


<script>



</script>

@endsection
