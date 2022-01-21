@extends('layouts.simple.master')

@section('title', 'History Order')

@section('css')
@endsection

@section('mxwidth')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>History Order</h3>
@endsection

@section('tambah')
<a href="{{route('jweb.add')}}" class="btn-sm btn-primary d-inline-block">Add New</a>
@endsection

@section('content')


<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
      <div class="card">
        <div class="card-body">
          
        <div class="table-responsive">
          <table class="table table-striped">
          <thead class="thead">
              <tr>
                <th scope="col" class="sort" data-sort="brandWeb">No.Order</th>
                <th scope="col" class="sort" data-sort="brandWeb">Tgl Order</th>
                <th scope="col" class="sort" data-sort="brandWeb">Nama Brand</th>
                <th scope="col" class="sort" data-sort="nama">Nama PIC</th>
                <th scope="col" class="sort" data-sort="paketBrief">Paket</th>
                <th class="text-right">Action</th>
              </tr>
          </thead>
          <tbody class="list">
            @foreach($webs as $web)
            <tr>
              <td>
              @if ($web->statusWeb == 2)
              <span class="small-icon bg-primary"><i data-feather="trending-up"></i></span>
              @else
              @endif
              #{{ $web->nomerOrder }}
              </td>
              <td>
                {{ Carbon\Carbon::parse($web->tglOrder)->locale('id')->translatedFormat('d F Y')}}
              </td>
              <td>
              {{ $web->brandComp }}
              </td>
              <td>
                {{ $web->nama }}
              </td>
              <td>
              {{ $web->paketBrief }}
              </td>
              <td class="text-right">
                {{-- <a class="btn-ic btn-primary m-r-5" href="{{route('progress', $web->idBrief)}}" data-toggle="tooltip" data-placement="top" title="View">
                  <i class="icon-pencil"></i>
                </a> --}}
                <a class="btn-ic btn-primary m-r-5" href="/web/{{ $web->idBrief }}/view" data-toggle="tooltip" data-placement="top" title="View">
                  <i data-feather="eye"></i>
                </a>
                <a class="btn-ic btn-secondary m-r-5" href="https://{{ $web->domainAkses }}/in" target="_blank" data-toggle="tooltip" data-placement="top" title="Login">
                  <i data-feather="log-in"></i>
                </a>
                <a class="btn-ic btn-success" href="https://{{ $web->domainAkses }}" target="_blank">
                  <i data-feather="globe" class="m-r-10"></i> Buka Web
                </a>
                {{-- <a class="btn-ic btn-success m-r-5" href="/web/{{ $web->idBrief }}/edit" data-toggle="tooltip" data-placement="top" title="Edit">
                  <i class="icon-pencil"></i>
                </a> --}}
               

              </td>
            </tr>
            
            @endforeach
              
              </tbody>
          </table>     
      </div>
        </div>
      </div>
    </div>
	</div>
</div>

@endsection

@section('script')

@endsection
