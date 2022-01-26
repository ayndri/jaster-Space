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
						<a href="#" class="btn btn-primary m-r-10"><i class="fa fa-envelope-o"></i> Inbox</a>
						<a href="#" class="btn btn-outline-warning"><i class="fa fa-check-square-o"></i> List Task</a>
					</div>
				</div>
			 </div>
		</div>
		<div class="col-md-7">
			<div class="card">
				<div class="card-header">
					<h5>🟡 Last Updates from Jasterweb</h5>
            	</div>
				<div class="card-body">
					<ul class="latestweb">
				  @foreach ($jweb as $web)
						<li class="itemlatest" id="hilang{{ $web->idBrief }}">
							<span>{{ $web->brandComp }} : <a href="/progress/{{ $web->idBrief }}" target="_blank">{{ $web->lastStatus }}</a></span> 
							<i id="kliken{{ $web->idBrief }}" data-feather="check"></i>
						</li>
					@endforeach
					</ul>
			  </div>
			</div>
		</div>
		<div class="col-md-5">
		
			<div class="card">
				<div class="card-header">
					<h5>🔴 Catatan Buat Kamu</h5>
            	</div>
				<div class="card-body">
				"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
				</div>
			</div>
		</div>
	</div>
</div>

@endsection

@section('script')

<script>

	@foreach ($jweb as $web)
		 $("#kliken{{ $web->idBrief }}").click(function(){
		$("#hilang{{ $web->idBrief }}").attr("style", "display: none !important");

	  }); @endforeach
	</script>
@endsection
