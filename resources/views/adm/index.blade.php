@extends('layouts.simple.master')

@section('title', 'Dashboard')

@section('css')
@endsection

@section('style')

@endsection

@section('breadcrumb-title')
<h3>Dashboard</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Dashboard</li>
<li class="breadcrumb-item active">Default</li>
@endsection

@section('content')
<div class="container-fluid">
	<div class="row second-chart-list third-news-update">

		<div class="col-md-12">
			<div class="card">
				<div class="card-body row flex-center">
					<div class="col-md-6 flex flex-center">
						<img src="{{asset('assets/img/face1.jpg')}}" class="round w65"/>
						<div class="flex flex-col m-l-20">
						    @php
						    $jam = date('H:i');
						    if ($jam > '05:30' && $jam < '11:00') {
                            $salam = 'Buenos dias';
                            } elseif ($jam >= '10:00' && $jam < '15:00') {
                            $salam = 'Sugeng Siang';
                            } elseif ($jam < '18:00') {
                            $salam = 'Good Evening';
                            } else {
                            $salam = 'Gute Nacht';
                            }
                            echo '<h4 class="m-b-7">'. $salam;
						    @endphp,
							{{ auth()->user()->nama }}</h4>
							<p class="flex flex-center"><i data-feather="bell" class="m-r-10"></i> You have 2 new messages and 15 new tasks</p>
						</div>
					</div>
					<div class="col-md-6 text-right">
						<a href="{{route('notes.add')}}" class="btn btn-primary m-r-10"><i class="fa fa-envelope-o"></i> Send Notes</a>
						<a href="#" class="btn btn-outline-warning"><i class="fa fa-check-square-o"></i> List Task</a>
					</div>
				</div>
			 </div>
		</div>
		
		@if (auth()->user()->hasRole('5'))
		@else
			<div class="col-md-7">
				<div class="card">
					<div class="card-header">
						<h5>🟡 Last Updates from Jasterweb</h5>
					</div>
					<div class="card-body">
						<ul class="latestweb">
						@foreach ($jweb as $web)
								<li class="itemlatest" id="hilang{{ $web->idBrief }}">
									<span>{{ $web->brandComp }} : <a href="/jweb/{{ $web->idBrief }}/view" target="_blank">{{ $web->lastStatus }}</a></span>
									<i id="kliken{{ $web->idBrief }}" data-feather="check"></i>
								</li>
						@endforeach
						</ul>
					</div>
				</div>
			</div>
		@endif
		
		<div class="col-md-5">

			<div class="card">
				<div class="card-header">
					<h5>🟢 Notes for you</h5>
            	</div>
                <div class="card-body">
                @forelse ($notes as $note)

                   <div class="default-according mb-2" id="accordionclose">
                    <div class="card">
                      <div class="card-header" id="heading1">
                        <h5 class="mb-0">
                          <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#{{$note->id}}" aria-expanded="false" aria-controls="heading1" data-original-title="" title="">Dari <span>{{$note->namaPengirim}}</span></button>
                        </h5>
                      </div>
                      <div class="collapse" id="{{$note->id}}" aria-labelledby="heading1" data-parent="#accordionclose" style="">
                        <div class="card-body">{{$note->isiPesan}}</div>
                      </div>
                    </div>
                  </div>
                  @empty
                  no message
                  @endforelse
                </div>

			</div>
		</div>
	</div>
</div>

@endsection

@section('script')
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>

	@foreach ($jweb as $web)
		 $("#kliken{{ $web->idBrief }}").click(function(){
		$("#hilang{{ $web->idBrief }}").attr("style", "display: none !important");

	  }); @endforeach
	</script>
@endsection
