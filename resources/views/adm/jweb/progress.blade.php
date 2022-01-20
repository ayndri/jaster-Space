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
                    <h6>🏢 Company Details</h6>
                </div>
                <div class="card-body">
                      {{-- @csrf  --}}
                    @foreach ($errors->all() as $error)
                    <p class="text-danger">{{ $error }}</p>
                    @endforeach
                   
                    <form class="" enctype="multipart/form-data" method="POST">
                        @csrf
                    
                    <div class="form-check">
                        <input class="myCheckBox" type="checkbox" value="" id="flexCheckDefault" @if( $brief->progressBrief == 25 || $brief->progressBrief >= 25  ) checked @endif >
                        <label class="form-check-label" for="flexCheckDefault">
                          Default checkbox
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="myCheckBox" type="checkbox" value="" id="flexCheckChecked" @if( $brief->progressBrief == 50 || $brief->progressBrief >= 50 ) checked @endif>
                        <label class="form-check-label" for="flexCheckChecked">
                          Checked checkbox
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="myCheckBox" type="checkbox" value="" id="flexCheckDefault" @if( $brief->progressBrief == 75 || $brief->progressBrief >= 75  ) checked @endif>
                        <label class="form-check-label" for="flexCheckDefault">
                          Default checkbox
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="myCheckBox" type="checkbox" value="" id="flexCheckChecked" @if( $brief->progressBrief == 100  ) checked @endif>
                        <label class="form-check-label" for="flexCheckChecked">
                          Checked checkbox
                        </label>
                      </div>

                      <input type="hidden" name="idBrief" id="idBrief" value="{{$brief->idBrief}}">
                      <input class="" type="hidden" name="progressBrief" value="" id="progress">
                    
                    </form>
    
                 </div>
              </div>
        </div>
    </div>
</div>

@endsection

@section('script')

<script>
   
  
  
var idBrief = $('#idBrief').val()
var url = "{{ route('progress.add', ":id") }}";
url = url.replace(':id', idBrief);



$('.myCheckBox').click(function() {

    var checkBoxes = document.querySelectorAll(".myCheckBox");
  var progress = document.querySelector(".progress-inner");
  var width = 0;
  
  
  for(let i = 0; i < checkBoxes.length; i++){
    if(checkBoxes[i].checked){
      width += 25;
    }   
  }

$('#progress').val(width);





        $.ajax({
            headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
         type: "POST",
         url: url,
         dataType: 'json',
         data: {
            "_token": "{{ csrf_token() }}",
             'progressBrief': width
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
