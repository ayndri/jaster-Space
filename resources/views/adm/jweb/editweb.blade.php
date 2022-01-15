@extends('layouts.simple.master')

@section('title', 'Edit Order')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/animate.css')}}">
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
<h3>Edit Order</h3>
@endsection

@section('tambah')
<a href="{{route('jweb.semua')}}" class="btn-sm btn-danger d-inline-block"><i class="fa fa-long-arrow-left"></i> Cancel</a>
@endsection

@section('content')


<div class="container-fluid">
	<div class="row">
		<form class="d-flex theme-form" enctype="multipart/form-data" method="POST" action="{{ route('web.ubah', $webs->idBrief) }}">
            @csrf

		<div class="col-md-5">
         <div class="card">
             
            <div class="card-header">
                <h6>🏢 Company Details</h6>
            </div>
             <div class="card-body">

                  @csrf 
                     @foreach ($errors->all() as $error)
                     <p class="text-danger">{{ $error }}</p>
                     @endforeach 
                     <input class="form-control" type="hidden" name="idWeb" required>
                     <input class="form-control" type="hidden" name="statweb" value="1" required>
                     <div class="row">
                         <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-form-label">Nama Brand</label>
                                <input class="form-control" type="text" name="brandComp" value="{{ $webs->brandComp }}" required>
                             </div>
                             <div class="form-group">
                                <label class="col-form-label">Nama Instansi</label>
                                <input class="form-control" type="text" name="namaComp" value="{{ $webs->brandComp}}" required>
                             </div>
                             <div class="form-group">
                                 <label class="col-form-label">Email Aktif</label>
                                 <input class="form-control" type="mail" name="email" value="{{ $webs->email }}" required>
                              </div>
                         </div>
                         <div class="col-md-6">



                             <div class="form-group">
                                <label class="col-form-label">Nama PIC</label>
                                <input class="form-control" type="text" name="nama" value="{{ $webs->nama }}" required>
                             </div>
                             <div class="form-group">
                                <label class="col-form-label">Jabatan</label>
                                <input class="form-control" type="text" name="jabatUser" value="{{ $webs->jabatUser }}" required>
                             </div>
                             <div class="form-group">
                                <label class="col-form-label">No Whatsapp PIC</label>
                                <input class="form-control" type="text" onkeypress="validate(event)" value="{{ $webs->telpUser }}" name="telpUser" required>
                             </div>
                         </div>
                     </div>

                       
                        <div class="form-group">
                           <label class="col-form-label">Alamat Office</label>
                           <textarea class="form-control" name="addrComp" required> {{ $webs->addrComp }} </textarea>
                        </div>
            
             </div>
          </div>
		</div>
        
		<div class="col-md-7">
            <div class="card">
                <div class="card-header">
                    <h6>💻 Website Data</h6>
                </div>
                <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                               <div class="form-group">
                                   <label class="col-form-label">Domain</label>
                                   <input class="form-control" type="text" name="domainAkses" value="{{ $webs->domainAkses }}" required>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Username</label>
                                    <input class="form-control" type="text" name="userAkses" value="{{ $webs->userAkses }}" required>
                                 </div>
                                 <div class="form-group">
                                    <label class="col-form-label">Tipe Post</label>
                                    <select class="form-control" name="postBrief" id="selpost" required="">
                                        <option>{{ $webs->postBrief }}</option>
                                        <option @if ($webs->postBrief == "Artikel") style="display:none" @endif value="Artikel">Artikel</option>
                                        <option @if ($webs->postBrief == "Produk") style="display:none" @endif value="Produk">Produk</option>
                                        <option @if ($webs->postBrief == "Service") style="display:none" @endif value="Service">Service</option>
                                        <option @if ($webs->postBrief == "Gallery") style="display:none" @endif value="Gallery">Gallery</option>
                                        <option @if ($webs->postBrief == "Elementor") style="display:none" @endif value="Elementor">Elementor</option>
                                        <option @if ($webs->postBrief == "Landing") style="display:none" @endif value="Landing">Landing</option>
                                      </select>
                                 </div>
                                 <div class="form-group">
                                    <label class="col-form-label">Logo</label><br>
                                    <input class="form-control mb-1" accept="image/*" name="logoBrief" type="file">
                                    
                                    <small class="text-danger">Jika file lebih dari 4MB, Bisa dikirim via email : <span class="text-primary">data@jaster.co.id</span></small>
                                    <div id="image-holder" class="tempatnya"></div>
                                    <div class="invalid-feedback">Kolom ini belum terisi</div>
                                 </div>
                            </div>
                            <div class="col-md-6">
   
                                <div class="form-group">
                                    <label class="col-form-label">Color</label>
                                    <input class="form-control" type="text" name="colorBrief" value="{{ $webs->colorBrief }}" required>
                                 </div>
                                <div class="form-group">
                                   <label class="col-form-label">Password</label>
                                   <input class="form-control" type="text" name="passAkses" value="{{ $webs->passAkses }}" required>
                                </div>
                                <div class="form-group">
                                   <label class="col-form-label">Target</label>
                                   <select class="form-control" name="targetBrief" id="selpost" required="">
                                       <option>{{ $webs->targetBrief }}</option>
                                       <option @if ($webs->targetBrief == "WA atau Telepon") style="display:none" @endif value="WA atau Telepon">WA atau Telepon</option>
                                       <option @if ($webs->targetBrief == "Email") style="display:none" @endif value="Email">Email</option>
                                       <option @if ($webs->targetBrief == "Checkout") style="display:none" @endif value="Checkout">Checkout</option>
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
                                            <textarea class="ckeditor form-control" name="reqBrief" placeholder="Content">{{ $webs->reqBrief }}</textarea>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                <br/>
                                <br/>
                            </div>
                        </div>
   
                
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
                                <input class="form-control" type="text" onkeypress="validate(event)" name="dpTrx" value="{{ $webs->dpTrx }}" required>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Renewal</label>
                                <input class="form-control" type="text" onkeypress="validate(event)" name="renew" value="{{ $webs->renew }}" required>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-form-label">Payment Method</label>
                                <select class="form-control" name="pmOrder" id="selpost" required="">
                                    <option>{{ $webs->pmOrder }}</option>
                                    
                                    <option @if ($webs->pmOrder == "Bank BCA") style="display:none" @endif value="Bank BCA">Bank BCA</option>
                                    <option @if ($webs->pmOrder == "Bank Mandiri") style="display:none" @endif value="Bank Mandiri">Bank Mandiri</option>
                                    <option @if ($webs->pmOrder == "Bank BNI") style="display:none" @endif value="Bank BNI">Bank BNI</option>
                                    <option @if ($webs->pmOrder == "Bank BRI Syariah") style="display:none" @endif value="Bank BRI Syariah">Bank BRI Syariah</option>
                                    <option @if ($webs->pmOrder == "OVO") style="display:none" @endif value="OVO">OVO</option>
                                    <option @if ($webs->pmOrder == "DANA") style="display:none" @endif value="DANA">DANA</option>
                                    <option @if ($webs->pmOrder == "CASH") style="display:none" @endif value="CASH">CASH</option>
                                    </select>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Reference</label>
                                <input class="form-control" type="text" name="fromTrx" value="{{ $webs->fromTrx }}" required>
                            </div>
                            <input type="hidden" name="idOrder" value="{{ $webs->idOrder }}" />
                        </div>
                    </div>

                </div>
             </div>
        </div>
        
		<div class="col-md-7">
            <div class="card itemdet" id="itemdet">
                <div class="card-header" style="display: flex;justify-content: space-between;align-items: center">
                    <h6 class="m-0">🛒 Order Details</h6>
                    <a id="remove" class="btn-ic btn-danger hilang" style="padding: 3px 10px;width: 50px;margin-right: -490px;"><i class="icon-minus"></i></a>
                    <a id="add" class="btn-ic btn-danger hilang" style="padding: 3px 10px;width: 50px;"><i class="icon-plus"></i></a>
                </div>

                @foreach ($trxweb as $trx)

                <div class="card-body items itemlist" id="itemlist">
                
                    <div class="item_order targetfields d-flex" id="item_order">
                        <input type="hidden" name="idTrx[]" value="{{ $trx->idTrx }}" />
                            <div class="form-group">
                                <label class="col-form-label">Paket</label>
                                <select class="form-control" name="paketTrx[]" id="selpost" required="">
                                    <option>{{ $trx->paketTrx }}</option>
                                    <option @if ($trx->paketTrx == "Beli Hosting") style="display:none" @endif value="Beli Hosting">Beli Hosting</option>
                                    <option @if ($trx->paketTrx == "Beli Domain") style="display:none" @endif value="Beli Domain">Beli Domain</option>
                                    <option @if ($trx->paketTrx == "Web Company Profile") style="display:none" @endif value="Web Company Profile">Web Company Profile</option>
                                    <option @if ($trx->paketTrx == "Web Sales") style="display:none" @endif value="Web Sales">Web Sales</option>
                                    <option @if ($trx->paketTrx == "Web Listing") style="display:none" @endif value="Web Listing">Web Listing</option>
                                    <option @if ($trx->paketTrx == "Web Resto") style="display:none" @endif value="Web Resto">Web Resto</option>
                                    <option @if ($trx->paketTrx == "Web Dinas / Instansi") style="display:none" @endif value="Web Dinas / Instansi">Web Dinas / Instansi</option>
                                    <option @if ($trx->paketTrx == "Web Kecantikan") style="display:none" @endif value="Web Kecantikan">Web Kecantikan</option>
                                    <option @if ($trx->paketTrx == "Web Toko Online") style="display:none" @endif value="Web Toko Online">Web Toko Online</option>
                                    <option @if ($trx->paketTrx == "Web Rental") style="display:none" @endif value="Web Rental">Web Rental</option>
                                    <option @if ($trx->paketTrx == "Web Travel") style="display:none" @endif value="Web Travel">Web Travel</option>
                                    <option @if ($trx->paketTrx == "Blog") style="display:none" @endif value="Blog">Blog</option>
                                    <option @if ($trx->paketTrx == "Web Booking / Hotel") style="display:none" @endif value="Web Booking / Hotel">Web Booking / Hotel</option>
                                    <option @if ($trx->paketTrx == "Redesign / Web Custom") style="display:none" @endif value="Redesign / Web Custom">Redesign / Web Custom</option>
                                    <option @if ($trx->paketTrx == "Logo") style="display:none" @endif value="Logo">Logo</option>
                                    <option @if ($trx->paketTrx == "Brosur") style="display:none" @endif value="Brosur">Brosur</option>
                                    <option @if ($trx->paketTrx == "Company Profile") style="display:none" @endif value="Company Profile">Company Profile</option>
                                    <option @if ($trx->paketTrx == "Menu / Banner Service") style="display:none" @endif value="Menu / Banner Service">Menu / Banner Service</option>
                                    <option @if ($trx->paketTrx == "Kartu Nama") style="display:none" @endif value="Kartu Nama">Kartu Nama</option>
                                    <option @if ($trx->paketTrx == "Stempel") style="display:none" @endif value="Stempel">Stempel</option>
                                    <option @if ($trx->paketTrx == "ID Card") style="display:none" @endif value="ID Card">ID Card</option>
                                    <option @if ($trx->paketTrx == "Sticker") style="display:none" @endif value="Sticker">Sticker</option>
                                    <option @if ($trx->paketTrx == "Nota / Invoice") style="display:none" @endif value="Nota / Invoice">Nota / Invoice</option>
                                    <option @if ($trx->paketTrx == "Google Adwords") style="display:none" @endif value="Google Adwords">Google Adwords</option>
                                    <option @if ($trx->paketTrx == "Design Katalog") style="display:none" @endif value="Design Katalog">Design Katalog</option>
                                    <option @if ($trx->paketTrx == "Domain Security") style="display:none" @endif value="Domain Security">Domain Security</option>
                                    <option @if ($trx->paketTrx == "Google Business") style="display:none" @endif value="Google Business">Google Business</option>
                                    <option @if ($trx->paketTrx == "Foto Produk") style="display:none" @endif value="Foto Produk">Foto Produk</option>

                                    </select>
                            </div>
                        <div class="form-group" style="width: 100px;">
                            <label class="col-form-label">Qty</label>
                            <input class="qty form-control" type="number" name="qtyTrx[]" value="{{ $trx->qtyTrx }}" required>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Harga</label>
                            <input class="harga form-control" type="text" name="hargaTrx[]" value="{{ $trx->hargaTrx }}" required>
                        </div>
                    </div>    
                    </div>

                    @endforeach
                   
                    <input class="" id="totalasli" type="hidden" name="totalOrder">
                    Total: <span id="total">{{ $webs->totalOrder }}</span>
                
              
               

                <button class="btn btn-primary btn-block w100" type="submit">Save Changes</button>
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
    
<script type="text/javascript">

   

    var i = 0;
  
    document.getElementById("remove").style.display = "none";
   
    $("#add").click(function(){

        i++

        document.getElementById("remove").style.display = "block";

        $("#itemlist").append(
            '<div class="item_order targetfields d-flex" id="item_order['+i+']"><div class="form-group"><label class="col-form-label">Paket</label><select class="form-control" name="paketTrx[]" id="selpost" required=""><option disabled>--- Pilih salah satu ---</option><option value="Beli Hosting">Beli Hosting</option><option value="Beli Domain">Beli Domain</option><option value="Web Company Profile">Web Company Profile</option><option value="Web Sales">Web Sales</option><option value="Web Listing">Web Listing</option><option value="Web Resto">Web Resto</option><option value="Web Dinas / Instansi">Web Dinas / Instansi</option><option value="Web Kecantikan">Web Kecantikan</option><option value="Web Toko Online">Web Toko Online</option><option value="Web Rental">Web Rental</option><option value="Web Travel">Web Travel</option><option value="Blog">Blog</option><option value="Web Booking / Hotel">Web Booking / Hotel</option><option value="Redesign / Web Custom">Redesign / Web Custom</option><option value="Logo">Logo</option><option value="Brosur">Brosur</option><option value="Company Profile">Company Profile</option><option value="Menu / Banner Service">Menu / Banner Service</option><option value="Kartu Nama">Kartu Nama</option><option value="Stempel">Stempel</option><option value="ID Card">ID Card</option><option value="Sticker">Sticker</option><option value="Nota / Invoice">Nota / Invoice</option><option value="Google Adwords">Google Adwords</option><option value="Design Katalog">Design Katalog</option><option value="Domain Security">Domain Security</option><option value="Google Business">Google Business</option><option value="Foto Produk">Foto Produk</option></select></div><div class="form-group" style="width:100px"><label class="col-form-label">Qty</label><input class="qty form-control" type="number" name="qtyTrx[]" required></div><div class="form-group"><label class="col-form-label">Harga</label><input class="harga form-control" type="text" name="hargaTrx[]" required></div></div>');
    
    
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

        if($(".item_order").length == 2){
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

<script src="{{asset('assets/js/datepicker/date-picker/datepicker.js')}}"></script>
<script src="{{asset('assets/js/datepicker/date-picker/datepicker.en.js')}}"></script>
<script src="{{asset('assets/js/datepicker/date-picker/datepicker.custom.js')}}"></script>
@endsection
