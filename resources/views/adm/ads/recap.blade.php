@extends('layouts.simple.master')

@section('title', 'Rekap Iklan')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/date-picker.css')}}">
@endsection

@section('style')
@endsection

@section('mxwidth')
@endsection

@section('breadcrumb-title')
<h3>Rekap Iklan</h3>
@endsection

@section('tambah')
<a href="{{route('ads.active')}}" class="btn-sm btn-primary d-inline-block">Active Ads</a>
@endsection

@section('content')


<div class="container-fluid">
    @foreach ($akun as $akun => $recap)
	<div class="col-md-12">
         <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="dttbls">
                        <thead class="thead">
                            <tr>
                            <th scope="col" class="sort" data-sort="no">No</th>
                            <th scope="col" class="sort" data-sort="namaAds">Nama</th>
                            <th scope="col" class="sort" data-sort="mulaiAds">Tgl Mulai</th>
                            <th scope="col" class="sort" data-sort="saldoAds">Saldo</th>
                            <th scope="col" class="sort" data-sort="nowAds">Berkurang</th>
                            <th scope="col" class="sort" data-sort="sisaAds">Sisa</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                        @php $no = 1; @endphp
                        @forelse ($recap as $gads)
                        <tr>
                            <td>
                            {{ $no++ }}
                            </td>
                            <td>
                            {{ $gads->namaAds }}
                            </td>
                            <td>
                                {{ date("d-m-Y", strtotime($gads->mulaiAds)) }}
                            </td>
                            <td>
                            @rupiah($gads->saldoAds)
                            </td>
                            <td width="300px">
                                <form class="contact-form" method="post" data-id="{{ $gads->idAds }}">
                                @csrf
                                <input class="form-control" id="saldoAds" name="saldoAds" type="hidden" data-id="{{ $gads->saldoAds }}" value="{{ $gads->saldoAds }}">
                                <input class="form-control idAds{{ $gads->idAds }}" id="idAds" name="idAds" type="hidden" data-id="{{ $gads->idAds }}" value="{{ $gads->idAds }}">
                                <div class="input-group inputjax">
                                <div class="input-group-prepend"><span class="input-group-text">Rp</span></div>
                                <input class="form-control nowAds_{{ $gads->nowAds }}" id="nowAds" name="nowAds" type="text" value="{{ $gads->nowAds }}">
                                </div> 
                                </form>                      
                            </td>
                            <td>
                                <span id="sisaAds_{{ $gads->idAds }}" data-id="{{ $gads->idAds }}">@rupiah($gads->sisaAds)</span>
                            </td>
                        </tr>
                        
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div> 
	</div>
    @endforeach
</div>



@endsection

@section('script')

<script>
    var timeoutId;

$('form').on('change', function(e) {
    e.preventDefault();
    form = $('.contact-form');
   
    var nowAds = $(this).parent().find('#nowAds').val();
    var saldoAds = $(this).parent().find('#saldoAds').val();
    var sisaAds = $(this).parent().find('#sisaAds').val();
    var idAds = $(this).data('id');

	$.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },
		url: "/ads/rec/" + idAds,
		type: "post",
        enctype: 'multipart/form-data',
		data: {
            nowAds:nowAds,
            saldoAds:saldoAds,
            sisaAds:sisaAds,
            idAds:idAds,
        },
        dataType: 'json',
		success: function(data) {

            

            $.each(data,function(key, value) {

                const formatRupiah = (value) => {
   return new Intl.NumberFormat('id-ID',
     { style: 'currency', currency: 'IDR', minimumFractionDigits: 0 }
   ).format(value);
}

           $('.table-striped').parent().find('#sisaAds_' + idAds).html(formatRupiah(value));
            });

		},
        complete: function () {
            
      }
        
	});
    return false;
});

</script>

<script src="{{asset('assets/js/datepicker/date-picker/datepicker.js')}}"></script>
<script src="{{asset('assets/js/datepicker/date-picker/datepicker.en.js')}}"></script>
<script src="{{asset('assets/js/datepicker/date-picker/datepicker.custom.js')}}"></script>
@endsection
