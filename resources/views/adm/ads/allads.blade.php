@extends('layouts.simple.master')

@section('title', 'History Top Up')

@section('css')
@endsection

@section('mxwidth')
@endsection

@section('style')
@endsection


@section('breadcrumb-title')
<h3>History Top Up</h3>
@endsection

@section('tambah')
<a href="{{route('ads.active')}}" class="btn-sm btn-primary d-inline-block">Active Ads</a>
@endsection

@section('content')


<div class="container-fluid">
		
		<div class="col-md-12">
         <div class="card">
            
             <div class="card-body">
                
        <div class="card">
         <div class="table-responsive">
            <table class="table table-striped" id="dtbasic">
                 <thead class="thead">
                     <tr>
                       <th scope="col" class="sort" data-sort="no">No</th>
                       <th scope="col" class="sort" data-sort="tglTop">Tgl Topup</th>
                       <th scope="col" class="sort" data-sort="namaAds">Nama</th>
                       <th scope="col" class="sort" data-sort="akunAds">Akun</th>
                       <th scope="col" class="sort" data-sort="saldoTop">Saldo</th>
                       <th scope="col" class="sort" data-sort="tglTop">Status</th>
                     </tr>
                 </thead>
                 <tbody class="list">
                  @php $no = 1; @endphp
                  @forelse ($semuaads as $all)
                   <tr>
                     <td>
                     {{ $no++ }}
                     </td>
                     <td>
                      {{ $all->tglTop }}
                     </td>
                     <td>
                     {{ $all->namaAds }}
                     </td>
                     <td>
                     {{ $all->akunAds }}
                     </td>
                     <td>
                      @rupiah($all->saldoTop)
                     </td>
                     <td>
                        @if ($all->doneTop == "ya")
                        <span class="text-warning">Transfered</span>
                        ( {{ date("d-m-Y", strtotime($all->updated_at)) }} )
                            
                        @else
                        <span class="text-light">Waiting</span>
                        @endif
                     </td>
                   </tr>
                    @empty
                   <tr>
                   <td colspan="6" class="text-center">Nothing</td>
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
