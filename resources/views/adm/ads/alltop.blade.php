@extends('layouts.simple.master')

@section('title', 'Latest Top Up')

@section('css')
@endsection

@section('style')
@endsection

@section('mxwidth')
tengahkan
@endsection

@section('breadcrumb-title')
<h3>Latest Top Up</h3>
@endsection

@section('tambah')
<a href="{{route('ads.addtop')}}" class="btn-sm btn-primary d-inline-block">Add New</a>
@endsection

@php


$salB = DB::table('iklans')
        ->leftJoin('topups','topups.idAds','iklans.idAds')
        ->where('topups.doneTop', 'no')
        ->where('iklans.akunAds', 'Akun B')
        ->sum('topups.saldoTop');
$rumusb = $salB * 10/100;
$fixb = $salB + $rumusb;
        
$salC = DB::table('iklans')
        ->leftJoin('topups','topups.idAds','iklans.idAds')
        ->where('topups.doneTop', 'no')
        ->where('iklans.akunAds', 'JasterAds')
        ->sum('topups.saldoTop');
$rumusc = $salC * 10/100;
$fixc = $salC + $rumusc;
@endphp

@section('content')


<div class="container-fluid">
		<div class="row">
		<div class="col-md-6">
            <div class="card-sm">
                    <span class="btn-sm btn-danger d-inline-block m-b-15">Akun B</span>
                    <h4>@rupiah($fixb)</h4>
                    <p class="m-0">@rupiah($salB) x PPN 10%</p>
            </div>
        </div>
		<div class="col-md-6">
            <div class="card-sm">
                    <span class="btn-sm btn-success d-inline-block m-b-15">JasterAds</span>
                    <h4>@rupiah($fixc)</h4>
                    <p class="m-0">@rupiah($salC) x PPN 10%</p>
            </div>
        </div>
		
        </div>
        <br/>
		<div class="col-md-12">
         <div class="card">
            
             <div class="card-body">
                
        <div class="card">
         <div class="table-responsive">
             <table class="table table-striped" id="dttbls">
                 <thead class="thead">
                     <tr>
                       <th scope="col" class="sort" data-sort="no">No</th>
                       <th scope="col" class="sort" data-sort="namaAds">Nama</th>
                       <th scope="col" class="sort" data-sort="akunAds">Akun</th>
                       <th scope="col" class="sort" data-sort="saldoTop">Saldo</th>
                       <th scope="col" class="sort" data-sort="tglTop">Tgl Topup</th>
                       <th class="text-right">Action</th>
                     </tr>
                 </thead>
                 <tbody class="list">
                  @php $no = 1; @endphp
                  @forelse ($antri as $ant)
                   <tr>
                     <td>
                     {{ $no++ }}
                     </td>
                     <td>
                     {{ $ant->namaAds }}
                     </td>
                     <td>
                     {{ $ant->akunAds }}
                     </td>
                     <td>
                      @rupiah($ant->saldoTop)
                     </td>
                     <td>
                      {{ $ant->tglTop }}
                     </td>
                     <td class="text-right">
                         <a class="btn-ic btn-primary m-r-5" href="change/{{ $ant->idTop }}" data-toggle="tooltip" data-placement="top" title="Edit">
                          <i class="fa fa-pencil"></i>
                         </a>
                         
                        <a href="{{route('ads.pay', $ant->idTop)}}" class="btn-ic btn-success hilang"><i class="fa fa-check"></i></a>
                     </td>
                   </tr>
                   @empty
                   <tr>
                   <td colspan="6" class="text-center">All Clear</td>
                   </tr>
                   
                 @endforelse
                  
                     
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
<script>
   $('.hilang').on('click', function (event) {
       event.preventDefault();
       const url = $(this).attr('href');
       swal({
        title: 'Yakin sudah topup?',
           text: 'Pastikan dulu biar ngga salah 🙏',
           icon: 'warning',
           buttons: ["Gajadi, maap", "Ya, Sudah!"],
       }).then(function(value) {
           if (value) {
               window.location.href = url;
           }
       });
   });
   </script>
@endsection
