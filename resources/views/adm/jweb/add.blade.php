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
<a href="{{route('jweb.semua')}}" class="btn-sm btn-danger d-inline-block"><i class="fa fa-long-arrow-left"></i> Cancel</a>
@endsection

@section('content')


<div class="container-fluid">
		<form class="" enctype="multipart/form-data" method="POST" action="{{ route('jweb.tambah') }}">
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
                        <input class="form-control" type="text" name="brandComp" required>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Nama PIC</label>
                        <input class="form-control" type="text" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Email Aktif</label>
                        <input class="form-control" type="mail" name="email" required>
                    </div>

                    <div class="form-group">
                        <label class="col-form-label">Nama Instansi</label>
                        <input class="form-control" type="text" name="namaComp" required>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Jabatan</label>
                        <input class="form-control" type="text" name="jabatUser" required>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">No Whatsapp PIC</label>
                        <div class="form-icon">
                            <span>+62</span>
                            <input class="form-control" type="text" onkeypress="validate(event)" name="telpUser" required>
                        </div>
                        </div>
                </div>
                <div class="form-group">
                    <label class="col-form-label">Alamat Office</label>
                    <textarea class="form-control" name="addrComp" required></textarea>
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
                                <input class="form-control" type="text" name="domainAkses" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Username</label>
                            <input class="form-control" type="text" name="userAkses" required>
                        </div>
                        <div class="form-group">
                        <label class="col-form-label">Tipe Post</label>
                        <select class="form-control" name="postBrief" id="selpost" required="">
                            <option disabled selected>--- Pilih salah satu ---</option>
                            <option value="Artikel">Artikel</option>
                            <option value="Produk">Produk</option>
                            <option value="Service">Service</option>
                            <option value="Gallery">Gallery</option>
                            <option value="Elementor">Elementor</option>
                            <option value="Landing">Landing</option>
                            </select>
                        </div>
                            <div class="form-group">
                            <label class="col-form-label">Logo</label>
                            <input class="form-control mb-1" name="logoBrief" type="file" id="">
                            {{-- <div id="image-holder" class="tempatnya"></div> --}}
                            <div class="invalid-feedback">Kolom ini belum terisi</div>
                            </div>

                        <div class="form-group">
                            <label class="col-form-label">Color</label>
                            <input class="form-control" type="text" name="colorBrief" required>
                            </div>
                        <div class="form-group">
                            <label class="col-form-label">Password</label>
                            <input class="form-control" type="text" name="passAkses" required>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Target</label>
                            <select class="form-control" name="targetBrief" id="selpost" required="">
                                <option disabled selected>--- Pilih salah satu ---</option>
                                <option value="WA atau Telepon">WA atau Telepon</option>
                                <option value="Email">Email</option>
                                <option value="Checkout">Checkout</option>
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
                                <textarea id="" class="form-control" name="reqBrief" placeholder="Ketik disini"></textarea>
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
                                    <input class="form-control" type="text" onkeypress="validate(event)" onkeyup="kasihtitik(this);" name="dpTrx" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Renewal</label>
                                <div class="form-icon">
                                    <span>Rp</span>
                                    <input class="form-control" type="text" onkeypress="validate(event)" onkeyup="kasihtitik(this);" name="renew" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-form-label">Payment Method</label>
                                <select class="form-control" name="pmOrder" id="selpost" required="">
                                    <option disabled selected>--- Pilih salah satu ---</option>
                                    <option value="bca">Bank BCA</option>
                                    <option value="mandiri">Bank Mandiri</option>
                                    <option value="bni">Bank BNI</option>
                                    <option value="bsi">Bank BSI</option>
                                    <option value="ovo">OVO</option>
                                    <option value="dana">DANA</option>
                                    <option value="cash">CASH</option>
                                    </select>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Reference</label>
                                    <input class="form-control" type="test" name="fromTrx" required>
                            </div>
                        </div>
                    </div>

                </div>
             </div>
        </div>

		<div class="col-md-7">
            <div class="card itemdet" id="itemdet">
                <div class="card-header">
                    <h6 class="m-0">🛒 Order Details</h6>
                    <div class="flex-gap">
                        <a id="add" class="btn-ic btn-primary hilang"><i class="icon-plus"></i></a>
                        <a id="remove" class="btn-ic btn-danger hilang"><i class="icon-minus"></i></a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="itemlist" id="itemlist">

                        <div class="listtrx" id="item_order[0]">
                            <div class="form-group">
                                <label class="col-form-label">Paket</label>
                                <select class="form-control" name="paketTrx[]" id="selpost" required="">
                                    <option disabled selected>--- Pilih salah satu ---</option>
                                    <option value="Beli Hosting">Beli Hosting</option>
                                    <option value="Beli Domain">Beli Domain</option>
                                    <option value="Web Company Profile">Web Company Profile</option>
                                    <option value="Web Sales">Web Sales</option>
                                    <option value="Web Listing">Web Listing</option>
                                    <option value="Web Resto">Web Resto</option>
                                    <option value="Web Dinas / Instansi">Web Dinas / Instansi</option>
                                    <option value="Web Kecantikan">Web Kecantikan</option>
                                    <option value="Web Toko Online">Web Toko Online</option>
                                    <option value="Web Rental">Web Rental</option>
                                    <option value="Web Travel">Web Travel</option>
                                    <option value="Blog">Blog</option>
                                    <option value="Web Booking / Hotel">Web Booking / Hotel</option>
                                    <option value="Redesign / Web Custom">Redesign / Web Custom</option>
                                    <option value="Logo">Logo</option>
                                    <option value="Brosur">Brosur</option>
                                    <option value="Company Profile">Company Profile</option>
                                    <option value="Menu / Banner Service">Menu / Banner Service</option>
                                    <option value="Kartu Nama">Kartu Nama</option>
                                    <option value="Stempel">Stempel</option>
                                    <option value="ID Card">ID Card</option>
                                    <option value="Sticker">Sticker</option>
                                    <option value="Nota / Invoice">Nota / Invoice</option>
                                    <option value="Google Adwords">Google Adwords</option>
                                    <option value="Design Katalog">Design Katalog</option>
                                    <option value="Domain Security">Domain Security</option>
                                    <option value="Google Business">Google Business</option>
                                    <option value="Foto Produk">Foto Produk</option>

                                    </select>
                            </div>
                        <div class="form-group" style="width: 250px;">
                            <label class="col-form-label">Qty</label>
                            <input class="qty form-control" type="number" name="qtyTrx[]" onkeypress="validate(event)" required>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Harga</label>
                            <div class="form-icon">
                                <span>Rp</span>
                                <input class="harga form-control" type="text" name="hargaTrx[]" required>
                            </div>
                        </div>
                    </div>
                    </div>

                    <input class="" id="totalasli" type="hidden" name="totalOrder">

                    <span class="heading3">Total: <small id="total">Rp 2.500.000</small></span>
                    <button class="btn btn-primary btn-block w100" type="submit">Save Changes</button>
                    </div>


             </div>
        </div>

    </form>

	</div>
</div>

@endsection

@section('script')
<script type="text/javascript">
    var i = 0;
    document.getElementById("remove").style.display = "none";
    $("#add").click(function(){
        i++
        document.getElementById("remove").style.display = "block";
        $("#itemlist").append(
            '<div class="listtrx" id="item_order['+i+']"><div class="form-group"><label class="col-form-label">Paket</label><select class="form-control" name="paketTrx[]" id="selpost" required=""><option disabled selected>--- Pilih salah satu ---</option><option value="Beli Hosting">Beli Hosting</option><option value="Beli Domain">Beli Domain</option><option value="Web Company Profile">Web Company Profile</option><option value="Web Sales">Web Sales</option><option value="Web Listing">Web Listing</option><option value="Web Resto">Web Resto</option><option value="Web Dinas / Instansi">Web Dinas / Instansi</option><option value="Web Kecantikan">Web Kecantikan</option><option value="Web Toko Online">Web Toko Online</option><option value="Web Rental">Web Rental</option><option value="Web Travel">Web Travel</option><option value="Blog">Blog</option><option value="Web Booking / Hotel">Web Booking / Hotel</option><option value="Redesign / Web Custom">Redesign / Web Custom</option><option value="Logo">Logo</option><option value="Brosur">Brosur</option><option value="Company Profile">Company Profile</option><option value="Menu / Banner Service">Menu / Banner Service</option><option value="Kartu Nama">Kartu Nama</option><option value="Stempel">Stempel</option><option value="ID Card">ID Card</option><option value="Sticker">Sticker</option><option value="Nota / Invoice">Nota / Invoice</option><option value="Google Adwords">Google Adwords</option><option value="Design Katalog">Design Katalog</option><option value="Domain Security">Domain Security</option><option value="Google Business">Google Business</option><option value="Foto Produk">Foto Produk</option></select></div><div class="form-group" style="width:250px"><label class="col-form-label">Qty</label><input class="qty form-control" type="number" name="qtyTrx[]" onkeypress="validate(event)" required></div><div class="form-group"><label class="col-form-label">Harga</label><div class="form-icon"><span>Rp</span><input class="harga form-control" type="text" name="hargaTrx[]" required></div></div></div>');
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

 $("#total").html(total);
});

})

    });





    $("#remove").click(function(){
        if ($("item_order").length < i) {
        document.getElementById("item_order["+i--+"]").style.display = "none";
        }
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

 $("#total").html(total);
});

})

</script>

<script type="text/javascript">
    $("#logoWeb").on('change', function () {

        var imgPath = $(this)[0].value;
        var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();

        if (extn == "psd" || extn == "png" || extn == "jpg" || extn == "cdr" || extn == "pdf") {
           if (typeof (FileReader) != "undefined") {

               var image_holder = $("#image-holder");
               image_holder.empty();

               var reader = new FileReader();
               reader.onload = function (e) {
                   $("<img />", {
                       "src": e.target.result,
                           "class": "thumb-image"
                   });

               }
               image_holder.show();
               reader.readAsDataURL($(this)[0].files[0]);

               var maxfilesize = 2000  * 2400;  // 1 Mb
               var filesize    = this.files[0].size;

               if(filesize > maxfilesize) {
                   document.getElementById( 'image-holder').style.display = "none"
                   alert("File lebih dari 4MB, Anda bisa kirim manual lewat Email");
               }

               else {
                image_holder.show();
               reader.readAsDataURL($(this)[0].files[0]);
               }


           } else {
               alert("This browser does not support FileReader.");
           }
        } else {
           alert("Upload File berformat PSD/CDR/JPG/PNG/PDF");
        }
        });
    </script>

@endsection
