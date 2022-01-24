@extends('layouts.simple.master')
@section('title', 'Notifikasi')


@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
Notifikasi
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item active">Notifikasi</li>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Semua Notifikasi</h5>
                        <span>History Notifikasi kamu berada disini semua</span>
                    </div>
                    <div class="card-body">


                        @forelse ($allnotif as $notifications)
                        <div class="notifikasi">
                                <div class="iconnote">

                                <svg class="w-6 h-6" width="20" fill="none" stroke="#fff" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>

                                </div>

                                @if ($notifications->data['notifType'] == 'createorder')

                                <div class="isinote">
                                    <b>Project
                                  
                                    <input class="idnotif" type="hidden" name="id" value="{{ $notifications->id }}"/>
                                    {!! $notifications->data['text'] !!}</b>

                                    <span>{{ $notifications->created_at->locale('id')->diffForHumans() }}</span>
                                </div>

                                @elseif($notifications->data['notifType'] == 'addStatus')

                                <div class="isinote">

                                    <input class="idnotif" type="hidden" name="id" value="{{ $notifications->id }}"/>

                                    <b>{!! $notifications->data['text'] !!}</b>

                                    <span>{{ $notifications->created_at->locale('id')->diffForHumans() }}</span>
                                </div>

                                @elseif($notifications->data['notifType'] == 'setujuabsen')

                                <div class="isinote">
                                    <input class="idnotif" type="hidden" name="id" value="{{ $notifications->id }}"/>

                                    <b>{!! $notifications->data['text'] !!}</b>

                                    <span>{{ $notifications->created_at->locale('id')->diffForHumans() }}</span>
                                </div>

                                @elseif($notifications->data['notifType'] == 'selesaiTf')

                                <div class="isinote">
                                    <input class="idnotif" type="hidden" name="id" value="{{ $notifications->id }}"/>

                                    <b>{!! $notifications->data['text'] !!}</b> 
                                    <span>{{ $notifications->created_at->locale('id')->diffForHumans() }}</span>
                                </div>

                                @elseif($notifications->data['notifType'] == 'CreateTiket')

                                <div class="isinote">
                                    <input class="idnotif" type="hidden" name="id" value="{{ $notifications->id }}"/>

                                    <b> Tiket bernomor

                                    {{ $notifications->data['nomerTiket'] }}
                                    {!! $notifications->data['text'] !!}</b>
                                    <span>{{ $notifications->created_at->locale('id')->diffForHumans() }}</span>
                                </div>

                                @elseif($notifications->data['notifType'] == 'ClearTiket')

                                <div class="isinote">
                                    <input class="idnotif" type="hidden" name="id" value="{{ $notifications->id }}"/>
                                <b>{!! $notifications->data['text'] !!}</b>
                                <span>{{ $notifications->created_at->locale('id')->diffForHumans() }}</span>
                                </div>

                                @elseif($notifications->data['notifType'] == 'StatusTiket')

                                <div class="isinote">
                                    <input class="idnotif" type="hidden" name="id" value="{{ $notifications->id }}"/>
                                    <b>{!! $notifications->data['text'] !!}</b>
                                    <span>{{ $notifications->created_at->locale('id')->diffForHumans() }}</span>
                                </div>

                                @elseif($notifications->data['notifType'] == 'CreateReview')

                                <div class="isinote">
                                    <input class="idnotif" type="hidden" name="id" value="{{ $notifications->id }}"/>
                                    @if (auth()->user()->idUser == 1 or auth()->user()->idUser == 2)
                                    {{ $notifications->data['adminText'] }}
                                    @else
                                    {{ $notifications->data['text'] }}
                                    @endif
                                </div>

                                @elseif($notifications->data['notifType'] == 'createRevisi')

                                <div class="isinote">
                                    <input class="idnotif" type="hidden" name="id" value="{{ $notifications->id }}"/>
                                    @role('4')
                                    <a href="{{route('revisi',$notifications->data['idPro'])}}">
                                        {{ $notifications->data['textClient'] }}
                                    </a>
                                    @endrole
                                    @role('3')
                                    <a href="{{route('revisi',$notifications->data['idPro'])}}">
                                        {{ $notifications->data['textTeam'] }}
                                    </a>
                                    @endrole
                                </div>

                                @elseif($notifications->data['notifType'] == 'handleRev')

                                <div class="isinote">
                                    <input class="idnotif" type="hidden" name="id" value="{{ $notifications->id }}"/>
                                    @role('4')
                                    <a href="{{route('revisi',$notifications->data['idPro'])}}">
                                        {{ $notifications->data['textClient'] }}
                                    </a>
                                    @endrole
                                    @role('3')
                                    <a href="{{route('revisi',$notifications->data['idPro'])}}">
                                        {{ $notifications->data['textTeam'] }}
                                    </a>
                                    @endrole
                                </div>

                                @elseif($notifications->data['notifType'] == 'clientProgress')

                                <div class="isinote">
                                    <input class="idnotif" type="hidden" name="id" value="{{ $notifications->id }}"/>

                                {{-- <a href="{{route('progress',$notifications->data['idPro'])}}"> --}}
                                <b>{!! $notifications->data['text']!!}</b>
                                {{-- </a> --}}

                                <span>{{ $notifications->updated_at->locale('id')->diffForHumans() }}</span>
                                </div>

                                @elseif($notifications->data['notifType'] == 'teamProgress')

                                <div class="isinote">
                                    <input class="idnotif" type="hidden" name="id" value="{{ $notifications->id }}"/>

                                {{-- <a href="{{route('history')}}"> --}}
                                    <b> {!! $notifications->data['text']!!}</b>
                                {{-- </a> --}}

                                <span>{{ $notifications->created_at->locale('id')->diffForHumans() }}</span>

                                </div>

                                @endif

                                @if ($notifications->read_at != null)
                                <span></span>
                                @else
                                <div id="pull-right-bell" class="pull-right">
                                    <a id="tes mark-as-read" class="tes mark-as-read float-right"
                                        data-id="{{ $notifications->id }}">
                                        <svg width="20" stroke="#fff" className="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z" /></svg>

                                    </a>
                                </div>
                            </div>
                                @endif

                            @empty
                            <div class="blanktable">
                                <p class="red-blank"><svg width="30" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                                Kamu belum memiliki Notifikasi</p>
                            </div>


                            @endforelse
                        </div>

                    </div>
                    {{-- <a class="btn btn-primary mt-3" href="#" id="mark-all">
                        Baca semua
                      </a> --}}


            </div>
        </div>
    </div>

@endsection

@section('script')
<script>
    var id = $('.idnotif').value;
    var url = "{{ route('markread', ":id") }}";
    url = url.replace(':id', id);

   

    $(document).on('click', '.tes', function(){



    $.ajax({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },

        url: url,
        type: "POST",
        data: id,
		dataType: "json",

		success: function (result) {

		}


	});
}

	});
</script>
@endsection
