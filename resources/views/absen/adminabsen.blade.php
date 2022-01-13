@extends('layouts.simple.master')

@section('title', 'List Absen')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/date-picker.css')}}">
@endsection

@section('style')
@endsection

@section('mxwidth')
tengahkan
@endsection

@section('breadcrumb-title')
<h3>List Absen</h3>
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
                       <th scope="col" class="sort" data-sort="namaAds">Tgl Absen</th>
                       <th scope="col" class="sort" data-sort="akhirAds">Jumlah Absen</th>
                       <th scope="col" class="sort" data-sort="mulaiAds">Hal Absen</th>
                       <th scope="col" class="sort" data-sort="mulaiAds">Status Absen</th>
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
                     {{ $abs->created_at }}
                     </td>
                     <td>
                     {{ $abs->jmlAbsen }}
                     </td>
                     <td>
                        {{ $abs->perihalAbsen }}
                     </td>
                     <td>
                        @if ( $abs->statusAbsen == 1)
                        <span>On Hold</span>
                        @elseif ( $abs->statusAbsen == 2)
                        <span>Di izinkan</span>
                        @elseif ( $abs->statusAbsen == 3)
                        <span>Di tolak</span>
                        @elseif ( $abs->statusAbsen == 4)
                        <span>Time Out / Di izinkan</span>
                        @elseif ( $abs->statusAbsen == 5)
                        <span>Cancel</span>
                        @endif
                     </td>

                     <input class="form-control" type="hidden" name="idAbsen" id="idAbsen" value="{{ $abs->idAbsen }}">
                     <td class="text-right">
                        <a class="setuju btn-ic btn-primary m-r-5" href="{{ route('setuju.absen', $abs->idAbsen) }}" data-toggle="tooltip" data-placement="top" title="Edit">
                            <i class="icon-check"></i>
                          </a>
                         <a class="btn-ic btn-success m-r-5" href="#see-{{ $abs->idAbsen }}" data-bs-toggle="modal" data-target="#see-{{ $abs->idAbsen }}" id="modalnote"
                          data-note="{{ $abs->noteAds }}"
                          data-target="#viewNotes" title="View Notes">
                            <i class="icon-eye"></i>
                          </a>

                        <a href="{{ route('tolak.absen', $abs->idAbsen) }}" class="btn-ic btn-danger hilang"><i class="icon-close"></i></a>

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
                   
                 @endforeach
                  
                     
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
           buttons: ["Gajadi, maap", "Cancel!"],
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
<script src="{{asset('assets/js/datepicker/date-picker/datepicker.js')}}"></script>
<script src="{{asset('assets/js/datepicker/date-picker/datepicker.en.js')}}"></script>
<script src="{{asset('assets/js/datepicker/date-picker/datepicker.custom.js')}}"></script>
@endsection
