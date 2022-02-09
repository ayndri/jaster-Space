@extends('layouts.simple.master')
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

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
<a class="btn btn-primary" target="_blank" href="https://{{ $webs->domainAkses }}">Buka Web</a>
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

                  <div class="col-md-12">
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
