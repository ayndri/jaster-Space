@extends('layouts.simple.master')

@section('title', 'Manage Absen')

@section('css')
@endsection

@section('style')
@endsection

@section('mxwidth')
tengahkan
@endsection

@section('breadcrumb-title')
<h3>Manage Absen</h3>
@endsection



@section('content')


<div class="container-fluid">
	<div class="act">
		<div class="col-md-12">
         <div class="card">
             <div class="card-body">
                
        <div class="card">
         <div class="table-responsive">
             <table class="table table-striped" id="dttbls">
                 <thead class="thead">
                     <tr>
                       <th scope="col" class="sort" data-sort="no">No</th>
                       <th scope="col" class="sort">Tgl Absen</th>
                       <th scope="col" class="sort">Tgl Submit</th>
                       <th scope="col" class="sort">Jumlah Absen</th>
                       <th scope="col" class="sort">Alasan</th>
                       <th scope="col" class="sort">Status</th>
                       <th class="text-right">Action</th>
                     </tr>
                 </thead>
                 <tbody class="list">
                  @php $no = 1; @endphp
                  @forelse ($absen as $abs)
                   <tr>
                     <td>
                     {{ $no++ }}
                     </td>
                     <td>
                      {{ Carbon\Carbon::parse($abs->tglAbsen)->locale('id')->translatedFormat('d F Y')}}
                     </td>
                     <td>
                      {{ $abs->created_at }}
                     </td>
                     <td>
                     {{ $abs->jmlAbsen }} Hari Kerja
                     </td>
                     <td>
                        {{ $abs->perihalAbsen }}
                     </td>
                     <td>
                        @if ( $abs->statusAbsen == 1)
                        <span>On Hold</span>
                        @elseif ( $abs->statusAbsen == 2)
                        <span>Diizinkan</span>
                        @elseif ( $abs->statusAbsen == 3)
                        <span>Ditolak</span>
                        @elseif ( $abs->statusAbsen == 4)
                        <span>Time Out / Diizinkan</span>
                        @elseif ( $abs->statusAbsen == 5)
                        <span>Cancel</span>
                        @endif
                     </td>

                     <input class="form-control" type="hidden" name="idAbsen" id="idAbsen" value="{{ $abs->idAbsen }}">
                     <td class="text-right">
                        
                      <a class="btn-ic btn-success m-r-5" href="#see-{{ $abs->idAbsen }}" data-bs-toggle="modal" data-target="#see-{{ $abs->idAbsen }}" id="modalnote"
                        data-note="{{ $abs->noteAds }}"
                        data-target="#viewNotes" title="View Notes">
                        <i data-feather="eye"></i>
                        </a>
                        
                        <a class="setuju btn-ic btn-primary m-r-5" href="{{ route('setuju.absen', $abs->idAbsen) }}" data-toggle="tooltip" data-placement="top" title="Edit">
                          <i data-feather="check"></i>
                          </a>

                        <a href="{{ route('tolak.absen', $abs->idAbsen) }}" class="btn-ic btn-danger hilang"><i data-feather="slash"></i></a>

                     </td>
                   </tr>

<div class="modal fade" id="see-{{ $abs->idAbsen }}" tabindex="-1" aria-labelledby="see" style="display: none;" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"> Alasan Absen</h5>
        
        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close" data-bs-original-title="" title=""></button>
      </div>
      <div class="modal-body" id="viewNotes">
        {{ $abs->isiAbsen }}
      </div>
    </div>
  </div>
</div>
@empty
<tr>
<td colspan="7" class="text-center">Belum ada yang izin</td>
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
</div>





@endsection

@section('script')
<script>
   $('.hilang').on('click', function (event) {
       event.preventDefault();
       var idAbsen = $('#idAbsen').val();


       const url = $(this).attr('href');
       swal({
        title: 'Yakin mau ditolak ?',
           text: 'Pastikan dulu biar ngga salah 🙏',
           icon: 'warning',
           buttons: ["Gajadi, maap", "Tolak"],
       }).then(function(value) {
           if (value) {
               window.location.href = url;
           }
       });
   });
   </script>

<script>
    $('.setuju').on('click', function (event) {
        event.preventDefault();
        var idAbsen = $('#idAbsen').val();
 
 
        const url = $(this).attr('href');
        swal({
         title: 'Yakin mau disetujui ?',
            text: 'Pastikan dulu biar ngga salah 🙏',
            icon: 'warning',
            buttons: ["Gajadi, maap", "Ya setuju!"],
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
