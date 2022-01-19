@extends('layouts.simple.master')

@section('title', 'Active Campaign')

@section('css')
@endsection

@section('style')
@endsection

@section('mxwidth')
tengahkan
@endsection

@section('breadcrumb-title')
<h3>Active Campaign</h3>
@endsection

@section('tambah')
<a href="{{route('ads.new')}}" class="btn-sm btn-primary d-inline-block">Add New</a>
@endsection

@section('content')


<div class="container-fluid">
	<div class="act">
		@foreach ($gads as $akun => $data)
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
                       <th scope="col" class="sort" data-sort="mulaiAds">Tgl Mulai</th>
                       <th scope="col" class="sort" data-sort="akhirAds">Tgl Akhir</th>
                       <th scope="col" class="sort" data-sort="saldoAds">Saldo</th>
                       <th class="text-right">Action</th>
                     </tr>
                 </thead>
                 <tbody class="list">
                  @php $no = 1; @endphp
                  @forelse ($data as $act)
                   <tr>
                     <td>
                     {{ $no++ }}
                     </td>
                     <td>
                     {{ $act->namaAds }}
                     </td>
                     <td>
                     {{ $act->mulaiAds }}
                     </td>
                     <td>
                       {{ $act->selesaiAds }}
                     </td>
                     <td>
                        @rupiah($act->saldoAds)
                     </td>
                     <td class="text-right">
                         <a class="btn-ic btn-primary m-r-5" href="edit/{{ $act->idAds }}" data-toggle="tooltip" data-placement="top" title="Edit">
                          <i data-feather="edit-2"></i>
                         </a>
                         <a class="btn-ic btn-success m-r-5" href="#see-{{ $act->idAds }}" data-bs-toggle="modal" data-target="#see-{{ $act->idAds }}" id="modalnote"
                          data-note="{{ $act->noteAds }}"
                          data-target="#viewNotes" title="View Notes">
                          <i data-feather="eye"></i>
                          </a>
                        <a href="{{route('ads.del', $act->idAds)}}" class="btn-ic btn-danger hilang"><i data-feather="trash-2"></i></a>
                     </td>
                   </tr>

<div class="modal fade" id="see-{{ $act->idAds }}" tabindex="-1" aria-labelledby="see" style="display: none;" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"> View Notes</h5>
        
        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close" data-bs-original-title="" title=""></button>
      </div>
      <div class="modal-body" id="viewNotes">
        {{ $act->noteAds }}
      </div>
    </div>
  </div>
</div>
                   
                 @endforeach
                  
                     
                     </tbody>
             </table>
         </div>
         </div>
             </div>
          </div>
          
		</div>
      @endforeach
	</div>
</div>





@endsection

@section('script')
<script>
   $('.hilang').on('click', function (event) {
       event.preventDefault();
       const url = $(this).attr('href');
       swal({
        title: 'Yakin mau dihapus ?',
           text: 'Pastikan dulu biar ngga salah 🙏',
           icon: 'warning',
           buttons: ["Gajadi, maap", "Hapus!"],
       }).then(function(value) {
           if (value) {
               window.location.href = url;
           }
       });
   });
   </script>
   <script>
    // jquerynya
    $('.modalnote').on('click', function (event) {
        event.preventDefault();
        var postBody = $(this).parents('.post').find('.article>p').text();
    
        // isi data2 modal yang dibutuhkan
        $('#viewNotes').text(postBody);
        // munculkan modal
        $('#comment-modal').modal();
    });
    </script>
@endsection
