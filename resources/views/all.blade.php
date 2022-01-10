@extends('layouts.front.master')
@section('title', 'All Order')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3 class="mb-0">All Order</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Order</li>
<li class="breadcrumb-item active">All Order</li>
@endsection

@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-sm-12">
        <div class="card">
        <div class="table-responsive p-3">
            {{-- <form action="{{ route('komisi.filter') }}" method="GET"  class="pilter">
              @include('layouts.filter')  </form><br/> --}}
            <table class="table table-striped table-bordered" id="dttbls">
                <thead class="thead">
                    <tr>
                      <th scope="col" class="sort" data-sort="brandWeb">Tanggal</th>
                      <th scope="col" class="sort" data-sort="brandWeb">Brand</th>
                      <th scope="col" class="sort" data-sort="namaWeb">Nama</th>
                      <th scope="col" class="sort" data-sort="domWeb">Domain</th>
                      <th>Action</th>
                    </tr>
                </thead>
                <tbody class="list">
                    @foreach($response as $data)
                  <tr>
                    <td>
                    {{ $data['created_at'] }}
                    </td>
                    <td>
                    {{ $data['brandWeb'] }}
                    </td>
                    <td>
                      {{ $data['namaWeb'] }}
                    </td>
                    <td>
                      {{ $data['domWeb'] }}
                    </td>
                    <td class="text-right">
                      <a class="btn btn-primary text-light" href="view/{{ $data['idWeb'] }}" data-toggle="tooltip" data-placement="top" title="View">
                        <i class="icon-eye"></i>
                      </a>
                      <a class="btn btn-info text-light" href="{{ $data['idWeb'] }}/edit" data-toggle="tooltip" data-placement="top" title="Edit">
                        <i class="icon-pencil"></i>
                      </a>
                      <!-- <form action="{{ $data['idWeb'] }}" method="post" class="dinline">
                        @csrf
                        @method('delete')
                      <a class="btn btn-danger  text-light" onclick="confirm('{{ __("Yakin Mau hapus data ini?") }}') ? this.parentElement.submit() : ''" data-toggle="tooltip" data-placement="top" title="Delete">
                        <i class="icon-close"></i>
                      </a>
                    </form> -->

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


@endsection

@section('script')

@endsection