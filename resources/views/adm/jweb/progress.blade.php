@extends('layouts.simple.master')

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
                    <h6>🏢 Company Details- </h6>
                </div>
                <div class="card-body">
                      {{-- @csrf  --}}
                    @foreach ($errors->all() as $error)
                    <p class="text-danger">{{ $error }}</p>
                    @endforeach
                   
                    <form class="" enctype="multipart/form-data" method="POST">
                        @csrf
                    
                    <div class="form-check">
                        <input class="myCheckBox" type="checkbox" name="nilai[]" id="flexCheckDefault" value="7" data-nilai="1" >
                        <label class="form-check-label" for="flexCheckDefault">
                          Beli Domain
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="myCheckBox" type="checkbox" name="nilai[]" id="flexCheckChecked" value="3" data-nilai="2">
                        <label class="form-check-label" for="flexCheckChecked">
                          Setup Web
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="myCheckBox" type="checkbox" name="nilai[]" id="flexCheckDefault" value="0" data-nilai="3">
                        <label class="form-check-label" for="flexCheckDefault">
                          Data Awal
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="myCheckBox" type="checkbox" name="nilai[]" id="flexCheckChecked" value="5" data-nilai="4">
                        <label class="form-check-label" for="flexCheckChecked">
                          Konsep
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="myCheckBox" type="checkbox" name="nilai[]" id="flexCheckChecked" value="15" data-nilai="5">
                        <label class="form-check-label" for="flexCheckChecked">
                          Build Home
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="myCheckBox" type="checkbox" name="nilai[]" id="flexCheckChecked" value="10" data-nilai="6">
                        <label class="form-check-label" for="flexCheckChecked">
                          Briefing Konten
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="myCheckBox" type="checkbox" name="nilai[]" id="flexCheckChecked" value="10" data-nilai="7">
                        <label class="form-check-label" for="flexCheckChecked">
                          Kelengkapan Data
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="myCheckBox" type="checkbox" name="nilai[]" id="flexCheckChecked" value="15" data-nilai="8">
                        <label class="form-check-label" for="flexCheckChecked">
                          Upload Konten
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="myCheckBox" type="checkbox" name="nilai[]" id="flexCheckChecked" value="10" data-nilai="9">
                        <label class="form-check-label" for="flexCheckChecked">
                          Fix Other Pages
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="myCheckBox" type="checkbox" name="nilai[]" id="flexCheckChecked" value="10" data-nilai="10">
                        <label class="form-check-label" for="flexCheckChecked">
                          Checking
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="myCheckBox" type="checkbox" name="nilai[]" id="flexCheckChecked" value="2" data-nilai="11">
                        <label class="form-check-label" for="flexCheckChecked">
                          Poles
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="myCheckBox" type="checkbox" name="nilai[]" id="flexCheckChecked" value="3" data-nilai="12">
                        <label class="form-check-label" for="flexCheckChecked">
                          SuruhCek
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="myCheckBox" type="checkbox" name="nilai[]" id="flexCheckChecked" value="5" data-nilai="13">
                        <label class="form-check-label" for="flexCheckChecked">
                          Runtest, AAM & Packing
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="myCheckBox" type="checkbox" name="nilai[]" id="flexCheckChecked" value="2" data-nilai="14">
                        <label class="form-check-label" for="flexCheckChecked">
                          Lunas
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="myCheckBox" type="checkbox" name="nilai[]" id="flexCheckChecked" value="1" data-nilai="15">
                        <label class="form-check-label" for="flexCheckChecked">
                          Backup
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="myCheckBox" type="checkbox" name="nilai[]" id="flexCheckChecked" value="2" data-nilai="16">
                        <label class="form-check-label" for="flexCheckChecked">
                          Its Done!
                        </label>
                      </div>

                      <input type="hidden" name="idBrief" id="idBrief" value="{{$brief->idBrief}}">
                      <input class="" type="number" name="progressBrief" value="{{$brief->progressBrief}}" id="progtes">

                      <input class="" type="number" name="progressBrief" id="progress">
                      <input class="" type="text" name="nilaiBrief" id="nilai">
                    
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


    </div>
</div>

@endsection

@section('script')

<script>
   
  
  
var idBrief = $('#idBrief').val();
var url = "{{ route('progress.add', ":id") }}";
url = url.replace(':id', idBrief);



$('.myCheckBox').click(function() {

    var checkBoxes = document.querySelectorAll(".myCheckBox");
  var progress = document.querySelector(".progress-inner");
  var prog = parseInt($('#progtes').val());
  var els = document.getElementsByName("nilai[]");

  
  
  $("input:checked").each(function () {
    prog += parseInt($(this).val());

    var nilai = $(this).data('nilai');


  })

$('#progress').val(prog);





        $.ajax({
            headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
         type: "POST",
         url: url,
         dataType: 'json',
         data: {
            "_token": "{{ csrf_token() }}",
             'progressBrief': prog
         },

         success: function (data) {
           alert('Added successfully!');
         }


     });


      });




</script>


<script>


   
</script>

@endsection
