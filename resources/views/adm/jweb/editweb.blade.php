@extends('layouts.simple.master')

@section('title', 'Add Order')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/date-picker.css')}}">
@endsection

@section('mxwidth')
@endsection

@section('style')
<style>

.d-flex.theme-form {
  flex-wrap: wrap;
}
.d-flex.theme-form div {
  padding: 9px;
}
</style>
@endsection

@section('breadcrumb-title')
<h3>Add Order</h3>
@endsection

@section('tambah')
<a href="{{route('jweb.active')}}" class="btn-sm btn-danger d-inline-block"><i class="fa fa-long-arrow-left"></i> Cancel</a>
@endsection

@section('content')


<div class="container-fluid">
		<form class="" enctype="multipart/form-data" method="POST" action="{{ route('web.ubah', $webs->idBrief) }}">
            @csrf

	<div class="row">
		<div class="col-md-6">
         <div class="card">

            <div class="card-header">
                <h6>🏢 Company Details</h6>
            </div>
            <div class="card-body">
                  {{-- @csrf  --}}
                @foreach ($errors->all() as $error)
                <p class="text-danger">{{ $error }}</p>
                @endforeach
                <input class="form-control" type="hidden" name="idWeb" required>
                <input class="form-control" type="hidden" name="statweb" value="1" required>
                <div class="bagi2">
                    <div class="form-group">
                        <label class="col-form-label">Nama Brand</label>
                        <input class="form-control" type="text" name="brandComp" value="{{ $webs->brandComp }}" required>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Nama PIC</label>
                        <input class="form-control" type="text" name="nama" value="{{ $webs->nama }}" required>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Email Aktif</label>
                        <input class="form-control" type="mail" name="email" value="{{ $webs->email }}" required>
                    </div>

                    <div class="form-group">
                        <label class="col-form-label">Nama Instansi</label>
                        <input class="form-control" type="text" name="namaComp" value="{{ $webs->namaComp }}" required>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Jabatan</label>
                        <input class="form-control" type="text" name="jabatUser" value="{{ $webs->jabatUser }}" required>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">No Whatsapp PIC</label>
                        <div class="form-icon">
                            <span>+62</span>
                            <input class="form-control" type="text" onkeypress="validate(event)" value="{{ $webs->telpUser }}" name="telpUser" required>
                        </div>
                        </div>
                </div>
                <div class="form-group">
                    <label class="col-form-label">Alamat Office</label>
                    <textarea class="form-control" name="addrComp" required>{{ $webs->addrComp }}</textarea>
                </div>

             </div>
          </div>
		</div>

		<div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h6>💻 Website Data</h6>
                </div>
                <div class="card-body">
                    <div class="bagi2">
                        <div class="form-group">
                            <label class="col-form-label">Domain</label>
                            <div class="form-icon">
                                <span>https://</span>
                                <input class="form-control" type="text" name="domainAkses" value="{{ $webs->domainAkses }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Username</label>
                            <input class="form-control" type="text" name="userAkses" value="{{ $webs->userAkses }}" required>
                        </div>
                        <div class="form-group">
                        <label class="col-form-label">Tipe Post</label>
                        <select class="form-control" name="postBrief" id="selpost" required="">
                            <option @if ( $webs->postBrief == "Artikel") selected @endif value="Artikel">Artikel</option>
                            <option @if ( $webs->postBrief == "Produk") selected @endif value="Produk">Produk</option>
                            <option @if ( $webs->postBrief == "Service") selected @endif value="Service">Service</option>
                            <option @if ( $webs->postBrief == "Gallery") selected @endif value="Gallery">Gallery</option>
                            <option @if ( $webs->postBrief == "Elementor") selected @endif value="Elementor">Elementor</option>
                            <option @if ( $webs->postBrief == "Landing") selected @endif value="Landing">Landing</option>
                          </select>
                        </div>
                        
                        
                        <div class="form-group">
                            <label class="col-form-label">Paket Website</label>
                            <select class="form-control" name="paketBrief" id="selpost" required="">
                                <option @if ( $webs->paketBrief == "ekonomis") selected @endif value="ekonomis">Ekonomis</option>
                                <option @if ( $webs->paketBrief == "ekonomis") selected @endif value="ekonomis">Basic</option>
                                <option @if ( $webs->paketBrief == "premium") selected @endif value="premium">Premium</option>
                                <option @if ( $webs->paketBrief == "business") selected @endif value="business">Business</option>
                                <option @if ( $webs->paketBrief == "luxury") selected @endif value="luxury">Luxury</option>
                                <option @if ( $webs->paketBrief == "pro") selected @endif value="pro">JasterPro</option>
                                <option @if ( $webs->paketBrief == "custom") selected @endif value="custom">Custom</option>
                                </select>
                        </div>

                        <div class="form-group">
                            <label class="col-form-label">Color</label>
                            <input class="form-control" type="text" name="colorBrief" value="{{ $webs->colorBrief }}" required>
                            </div>
                        <div class="form-group">
                            <label class="col-form-label">Password</label>
                            <input class="form-control" type="text" name="passAkses" value="{{ $webs->passAkses }}" required>
                        </div>

                        <div class="form-group">
                            <label class="col-form-label">Hosting</label>
                            <select class="form-control" name="idHost" id="selpost" required="">
                                <option disabled selected>--- Pilih salah satu ---</option>
                                @foreach ( $host as $hos)
                                <option @if ( $webs->host_id == $hos->idHost) selected @endif value="{{$hos->idHost}}">{{$hos->domHost}}</option>
                                @endforeach
                                </select>
                            </div>


                        <div class="form-group">
                            <label class="col-form-label">Target</label>
                            <select class="form-control" name="targetBrief" id="selpost" required="">
                                <option @if ( $webs->paketBrief == "WA atau Telepon") selected @endif value="WA atau Telepon">WA atau Telepon</option>
                                <option @if ( $webs->paketBrief == "Email") selected @endif value="Email">Email</option>
                                <option @if ( $webs->paketBrief == "Checkout") selected @endif value="Checkout">Checkout</option>
                                </select>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label d-block">Request</label>
                            <a href="#see" data-bs-toggle="modal" data-target="#see" id="modalnote"
                            data-note="" data-target="#viewNotes"
                            title="View Notes" class="btn-sm w-100 text-center btn-success d-inline-block" style="padding: 13px 10px;">View Request</a>
                        </div>

                        <div class="modal fade" id="see" tabindex="-1" aria-labelledby="see" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title"> Add Request</h5>
                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close" data-bs-original-title="" title=""></button>
                            </div>
                            <div class="modal-body" id="viewNotes">
                                <textarea id="" class="form-control" name="reqBrief" placeholder="Ketik disini">{{ $webs->reqBrief }}</textarea>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <span class="inblock" style="margin-top: 22px !important;"><b>Note :</b> Pastikan data diatas sudah benar, Double Check</span>

                </div>
             </div>
        </div>

		<div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    <h6>🔰 Payment Details</h6>

                </div>
                <div class="card-body">
                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">
                                <label class="col-form-label">Down Payment</label>
                                <div class="form-icon">
                                    <span>Rp</span>
                                    <input class="rupiah form-control" type="text" id="dp" value="@money($webs->dpTrx)" onkeypress="validate(event)" onkeyup="kasihtitik(this);"  name="dpTrx" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Renewal</label>
                                <div class="form-icon">
                                    <span>Rp</span>
                                    <input class="rupiah form-control" type="text" id="renew" value="@money($webs->renew)" onkeypress="validate(event)" onkeyup="kasihtitik(this);" name="renew" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Tanggal Order</label>
                                <input class="rupiah form-control" type="date" value="{{ $webs->tglOrder }}" onkeypress="validate(event)" name="tglOrder" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-form-label">Payment Method</label>
                                <select class="form-control" name="pmOrder" id="selpost" required="">
                                    <option @if ( $webs->paketBrief == "bca") selected @endif value="bca">Bank BCA</option>
                                    <option @if ( $webs->paketBrief == "mandiri") selected @endif value="mandiri">Bank Mandiri</option>
                                    <option @if ( $webs->paketBrief == "bni") selected @endif value="bni">Bank BNI</option>
                                    <option @if ( $webs->paketBrief == "bsi") selected @endif value="bsi">Bank BSI</option>
                                    <option @if ( $webs->paketBrief == "ovo") selected @endif value="ovo">OVO</option>
                                    <option @if ( $webs->paketBrief == "dana") selected @endif value="dana">DANA</option>
                                    <option @if ( $webs->paketBrief == "cash") selected @endif value="cash">CASH</option>
                                    </select>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Reference</label>
                                    <input class="form-control" type="text" value="{{ $webs->fromTrx }}" name="fromTrx" required>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Deadline</label>
                                    <input class="form-control" type="date" name="deadlineOrder" value="{{ $webs->deadlineOrder }}" required>
                            </div>
                        </div>
                    </div>

                </div>
             </div>
        </div>

		<div class="col-md-7">
            <div class="card itemdet" id="itemdet">
                <div class="card-header flexbetween">
                    <h6 class="m-0">🛒 Order Details</h6>
                    <div class="flex-gap">
                        <a id="add" class="btn-ic btn-primary hilang"><i class="icon-plus"></i></a>
                        <a id="remove" class="btn-ic btn-danger hilang"><i class="icon-minus"></i></a>
                    </div>
                </div>

                <div class="card-body">
                    
                    <input type="hidden" name="count" id="count" value="{{ $count }}"/>
                    <input type="hidden" name="plusone" id="plusone" value="{{ $plusone }}"/>
                    <input type="hidden" name="idOrder" id="idOrder" value="{{ $webs->idOrder }}"/>
                   

                    

                    <div class="itemlist" id="itemlist">

                        @foreach ($trxweb as $trx)

                       

                        <div class="item_order targetfields listtrx" id="item_order[{{$count}}]">
                            <input type="hidden" name="idTrx[]" value="{{$trx->idTrx}}"/>
                            <div class="form-group">
                                <label class="col-form-label">Service</label>
                                <select class="form-control" name="paketTrx[]" id="selpost" required="">
                                    <option @if ( $trx->paketTrx == "Beli Hosting") selected @endif value="Beli Hosting">Beli Hosting</option>
                                    <option @if ( $trx->paketTrx == "Beli Domain") selected @endif value="Beli Domain">Beli Domain</option>
                                    <option @if ( $trx->paketTrx == "Web Company Profile") selected @endif value="Web Company Profile">Web Company Profile</option>
                                    <option @if ( $trx->paketTrx == "Web Sales") selected @endif value="Web Sales">Web Sales</option>
                                    <option @if ( $trx->paketTrx == "Web Listing") selected @endif value="Web Listing">Web Listing</option>
                                    <option @if ( $trx->paketTrx == "Web Resto") selected @endif value="Web Resto">Web Resto</option>
                                    <option @if ( $trx->paketTrx == "Web Dinas / Instansi") selected @endif value="Web Dinas / Instansi">Web Dinas / Instansi</option>
                                    <option @if ( $trx->paketTrx == "Web Kecantikan") selected @endif value="Web Kecantikan">Web Kecantikan</option>
                                    <option @if ( $trx->paketTrx == "Web Toko Online") selected @endif value="Web Toko Online">Web Toko Online</option>
                                    <option @if ( $trx->paketTrx == "Web Rental") selected @endif value="Web Rental">Web Rental</option>
                                    <option @if ( $trx->paketTrx == "Web Travel") selected @endif value="Web Travel">Web Travel</option>
                                    <option @if ( $trx->paketTrx == "Blog") selected @endif value="Blog">Blog</option>
                                    <option @if ( $trx->paketTrx == "Web Booking / Hotel") selected @endif value="Web Booking / Hotel">Web Booking / Hotel</option>
                                    <option @if ( $trx->paketTrx == "Redesign / Web Custom") selected @endif value="Redesign / Web Custom">Redesign / Web Custom</option>
                                    <option @if ( $trx->paketTrx == "Logo") selected @endif value="Logo">Logo</option>
                                    <option @if ( $trx->paketTrx == "Brosur") selected @endif value="Brosur">Brosur</option>
                                    <option @if ( $trx->paketTrx == "Company Profile") selected @endif value="Company Profile">Company Profile</option>
                                    <option @if ( $trx->paketTrx == "Menu / Banner Service") selected @endif value="Menu / Banner Service">Menu / Banner Service</option>
                                    <option @if ( $trx->paketTrx == "Kartu Nama") selected @endif value="Kartu Nama">Kartu Nama</option>
                                    <option @if ( $trx->paketTrx == "Stempel") selected @endif value="Stempel">Stempel</option>
                                    <option @if ( $trx->paketTrx == "ID Card") selected @endif value="ID Card">ID Card</option>
                                    <option @if ( $trx->paketTrx == "Sticker") selected @endif value="Sticker">Sticker</option>
                                    <option @if ( $trx->paketTrx == "Nota / Invoice") selected @endif value="Nota / Invoice">Nota / Invoice</option>
                                    <option @if ( $trx->paketTrx == "Google Adwords") selected @endif value="Google Adwords">Google Adwords</option>
                                    <option @if ( $trx->paketTrx == "Design Katalog") selected @endif value="Design Katalog">Design Katalog</option>
                                    <option @if ( $trx->paketTrx == "Domain Security") selected @endif value="Domain Security">Domain Security</option>
                                    <option @if ( $trx->paketTrx == "Google Business") selected @endif value="Google Business">Google Business</option>
                                    <option @if ( $trx->paketTrx == "Foto Produk") selected @endif value="Foto Produk">Foto Produk</option>

                                    </select>
                            </div>
                        <div class="form-group" style="width: 250px;">
                            <label class="col-form-label">Qty</label>
                            <input class="qty form-control" type="number" value="{{$trx->qtyTrx}}" name="qtyTrx[]" required>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Harga</label>
                            <div class="form-icon">
                                <span>Rp</span>
                                <input class="harga form-control" type="text" value="{{$trx->hargaTrx}}" name="hargaTrx[]" required>
                            </div>
                        </div>
                    </div>

                    @endforeach
                    </div>

                   

                    <input class="" id="totalasli" type="hidden" name="totalOrder">
            
                    <span class="heading3">Total: <small id="total">Rp @money($webs->totalOrder)</small></span>
                    <button class="btn btn-primary btn-block w100" type="submit">Submit New Order</button>
                    </div>


             </div>
        </div>

    </form>

	</div>
</div>

@endsection

@section('script')
<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>

<script>
function kasihtitik(objek) {
    separator = ".";
    a = objek.value;
    b = a.replace(/[^\d]/g,"");
    c = "";
    panjang = b.length;
    j = 0;
    for (i = panjang; i > 0; i--) {
      j = j + 1;
      if (((j % 3) == 1) && (j != 1)) {
        c = b.substr(i-1,1) + separator + c;
    } else {
        c = b.substr(i-1,1) + c;
    }
}
objek.value = c;
}
</script>
    
<script type="text/javascript">

   var count = $("#count").val();
   
    var i = count;

    var plusc = $("#plusone").val();
  
    document.getElementById("remove").style.display = "none";
   
    $("#add").click(function(){

        i++

        document.getElementById("remove").style.display = "block";

        $("#itemlist").append(
            '<div class="item_order targetfields listtrx" id="item_order['+i+']"><input type="hidden" name="idTrx[]"/><div class="form-group"><label class="col-form-label">Service</label><select class="form-control" name="paketTrx[]" id="selpost" required=""><option disabled selected>--- Pilih salah satu ---</option><option value="Beli Hosting">Beli Hosting</option><option value="Beli Domain">Beli Domain</option><option value="Web Company Profile">Web Company Profile</option><option value="Web Sales">Web Sales</option><option value="Web Listing">Web Listing</option><option value="Web Resto">Web Resto</option><option value="Web Dinas / Instansi">Web Dinas / Instansi</option><option value="Web Kecantikan">Web Kecantikan</option><option value="Web Toko Online">Web Toko Online</option><option value="Web Rental">Web Rental</option><option value="Web Travel">Web Travel</option><option value="Blog">Blog</option><option value="Web Booking / Hotel">Web Booking / Hotel</option><option value="Redesign / Web Custom">Redesign / Web Custom</option><option value="Logo">Logo</option><option value="Brosur">Brosur</option><option value="Company Profile">Company Profile</option><option value="Menu / Banner Service">Menu / Banner Service</option><option value="Kartu Nama">Kartu Nama</option><option value="Stempel">Stempel</option><option value="ID Card">ID Card</option><option value="Sticker">Sticker</option><option value="Nota / Invoice">Nota / Invoice</option><option value="Google Adwords">Google Adwords</option><option value="Design Katalog">Design Katalog</option><option value="Domain Security">Domain Security</option><option value="Google Business">Google Business</option><option value="Foto Produk">Foto Produk</option></select></div><div class="form-group" style="width: 250px;"><label class="col-form-label">Qty</label><input class="qty form-control" type="number" name="qtyTrx[]" required></div><div class="form-group"><label class="col-form-label">Harga</label><div class="form-icon"><span>Rp</span><input class="harga form-control" type="text" name="hargaTrx[]" required></div></div></div>');
    
    
            $(function() {

$(".item_order").on('keyup change', function(e) {
 var total = 0;
 
 $(".item_order").each(function() {

     var qty = parseInt($(this).find(".qty").val());
     var harga = parseInt($(this).find(".harga").val());
     var subtotal = qty * harga;
     $(this).find(".subtotal").val(subtotal);
     if(!isNaN(subtotal))
         total+=subtotal;

         $("#totalasli").val(total);

         

});
var	reverse = total.toString().split('').reverse().join(''),
   ribuan 	= reverse.match(/\d{1,3}/g);
   ribuan	= ribuan.join('.').split('').reverse().join('');

$("#total").text('Rp '+ribuan);
});

})

    });

    

    

    $("#remove").click(function(){  


        if($(".item_order").length == plusc){
            document.getElementById("remove").style.display = "none";
        }
        $('.item_order').not(':first').last().remove();



    });  

   

</script>

<script>

$(function() {

$(".item_order").on('keyup change', function(e) {
 var total = 0;
 
 $(".item_order").each(function() {

     var qty = parseInt($(this).find(".qty").val());
     var harga = parseInt($(this).find(".harga").val());
     var subtotal = qty * harga;
     $(this).find(".subtotal").val(subtotal);
     if(!isNaN(subtotal))
         total+=subtotal;

         $("#totalasli").val(total);

         

});
var	reverse = total.toString().split('').reverse().join(''),
   ribuan 	= reverse.match(/\d{1,3}/g);
   ribuan	= ribuan.join('.').split('').reverse().join('');

$("#total").text('Rp '+ribuan);
});

})

</script>



<script src="{{asset('assets/js/datepicker/date-picker/datepicker.js')}}"></script>
<script src="{{asset('assets/js/datepicker/date-picker/datepicker.en.js')}}"></script>
<script src="{{asset('assets/js/datepicker/date-picker/datepicker.custom.js')}}"></script>
@endsection
