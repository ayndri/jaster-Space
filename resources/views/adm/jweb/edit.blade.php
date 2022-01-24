@extends('layouts.simple.master')

@section('title', 'Edit Detail Order')

@section('css')
@endsection

@section('mxwidth')
@endsection

@section('style')

@endsection

@section('breadcrumb-title')
<h3>Edit Detail Order</h3>
@endsection

@section('tambah')
<a href="{{route('jweb.active')}}" class="btn-sm btn-success inflex m-r-10"><svg class="w-6 h-6 m-r-5" width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18"></path></svg> Go Back</a>
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
                        <input class="form-control" type="text" name="brandComp" value="{{  $coba[0]['brandWeb']  }}">
                    </div>

                    @if(strpos($coba[0]['namaWeb'], '-'))

                    @php $pic = explode(' - ', $coba[0]['namaWeb']) @endphp

                    @if( $pic != null)


                    <div class="form-group">
                        <label class="col-form-label">Nama PIC</label>
                        <input class="form-control" type="text" name="nama" value="{{ $pic[0] }}" required>
                     </div>

                     @else

                     <div class="form-group">
                        <label class="col-form-label">Nama PIC</label>
                        <input class="form-control" type="text" name="nama" value="{{ $coba[0]['namaWeb'] }}" required>
                     </div>

                    @endif

                    @elseif(strpos($coba[0]['namaWeb'], ','))

                    @php $pic = explode(' , ', $coba[0]['namaWeb']) @endphp

                    @if( $pic != null)

                    <div class="form-group">
                        <label class="col-form-label">Nama PIC</label>
                        <input class="form-control" type="text" name="nama" value="{{ $pic[0] }}" required>
                    </div>

                    @else

                    <div class="form-group">
                        <label class="col-form-label">Nama PIC</label>
                        <input class="form-control" type="text" name="nama" value="{{ $coba[0]['namaWeb'] }}" required>
                    </div>

                    @endif

                    @else

                    <div class="form-group">
                        <label class="col-form-label">Nama PIC</label>
                        <input class="form-control" type="text" name="nama" value="{{ $coba[0]['namaWeb'] }}" required>
                    </div>

                    @endif


                    <div class="form-group">
                        <label class="col-form-label">Email Aktif</label>
                        <input class="form-control" type="mail" name="email" value="{{ $coba[0]['emailWeb'] }}">
                    </div>

                    <div class="form-group">
                        <label class="col-form-label">Nama Instansi</label>
                        <input class="form-control" type="text" name="namaComp" value="{{ $coba[0]['brandWeb'] }}">
                    </div>

                    @if(strpos($coba[0]['namaWeb'], '-'))

                    @php $pic = explode(' - ', $coba[0]['namaWeb']) @endphp

                    @if( $pic != null)

                    <div class="form-group">
                        <label class="col-form-label">Jabatan</label>
                        <input class="form-control" type="text" name="jabatUser" value="{{ $pic[1] }}">
                    </div>

                    @else

                    <div class="form-group">
                        <label class="col-form-label">Jabatan</label>
                        <input class="form-control" type="text" name="jabatUser" required>
                     </div>

                    @endif

                    @elseif(strpos($coba[0]['namaWeb'], ','))

                    @php $pic = explode(' , ', $coba[0]['namaWeb']) @endphp

                    @if( $pic != null)

                    <div class="form-group">
                        <label class="col-form-label">Jabatan</label>
                        <input class="form-control" type="text" name="jabatUser" value="{{ $pic[1] }}" required>
                     </div>

                     @else

                     <div class="form-group">
                        <label class="col-form-label">Jabatan</label>
                        <input class="form-control" type="text" name="jabatUser" required>
                     </div>

                    @endif

                    @else

                    <div class="form-group">
                        <label class="col-form-label">Jabatan</label>
                        <input class="form-control" type="text" name="jabatUser" required>
                     </div>

                     @endif



                    <div class="form-group">
                        <label class="col-form-label">No Whatsapp PIC</label>
                        <div class="form-icon">
                            <span>+62</span>
                            <input class="form-control" type="text" onkeypress="validate(event)" value="{{ $coba[0]['waWeb'] }}" name="telpUser">
                        </div>
                        </div>
                </div>
                <div class="form-group">
                    <label class="col-form-label">Alamat Office</label>
                    <textarea class="form-control" name="addrComp">{{ $webs->addrWeb ?? $coba[0]['almWeb'] }}, {{ $coba[0]['posWeb'] }}</textarea>
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
                                <input class="form-control" type="text" name="domainAkses" value="{{ $coba[0]['domWeb'] }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Username</label>
                            <input class="form-control" type="text" name="userAkses">
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
                            <label class="col-form-label">Paket Website</label>
                            <select class="form-control" name="paketBrief" id="selpost" required="">
                                <option disabled selected>--- Pilih salah satu ---</option>
                                <option value="Ekonomis">Ekonomis</option>
                                <option value="Basic">Basic</option>
                                <option value="Premium">Premium</option>
                                <option value="Business">Business</option>
                                <option value="Luxury">Luxury</option>
                                <option value="Pro">JasterPro</option>
                                <option value="Custom">Custom</option>
                                </select>
                        </div>

                        <div class="form-group">
                            <label class="col-form-label">Logo</label>
                            <a href="https://myjaster.com/img/logo/{{ $coba[0]['logoweb'] }}" target="_blank" class="btn btn-secondary form-control" download> Download File</a>
                         </div>

                         <div class="form-group">
                            <label class="col-form-label">Hosting</label>
                            <select class="form-control" name="idHost" id="selpost" required="">
                                <option disabled selected>--- Pilih salah satu ---</option>
                                @foreach ( $host as $hos)
                                <option value="{{$hos->idHost}}">{{$hos->domHost}}</option>
                                @endforeach
                                </select>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Color</label>
                            <input class="form-control" type="text" name="colorBrief" value="{{ $coba[0]['warnaWeb'] }}">
                            </div>
                        <div class="form-group">
                            <label class="col-form-label">Password</label>
                            <input class="form-control" type="text" name="passAkses">
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
                            title="View Notes" class="btn w-100 text-center btn-success d-inline-block">View Request</a>
                        </div>

                        <div class="modal fade" id="see" tabindex="-1" aria-labelledby="see" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title"> Add Request</h5>
                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close" data-bs-original-title="" title=""></button>
                            </div>
                            <div class="modal-body" id="viewNotes">
                                <textarea id="" class="form-control" name="reqBrief" placeholder="Ketik disini">{{ $coba[0]['reqWeb'] }}</textarea>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>

                    <span class="inblock" style="margin-top: 22px !important;"><b>Note :</b> Klik Tombol Edit untuk merubah data</span>
                </div>
             </div>
        </div>
    <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h6>💻 Social Media</h6>
                </div>
                <div class="card-body">
                    <div class="bagi2">
                        <div class="form-group">
                            <label class="col-form-label">No WhatsApp</label>
                            <div class="form-icon">
                                <span>+62</span>
                                <input class="form-control" type="text" name="waBrief" value="{{ $coba[0]['waWeb'] }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Akun Instagram</label>
                            <div class="form-icon">
                                <span>@</span>
                                <input class="form-control" type="text" name="igBrief" value="{{ $coba[0]['igWeb'] }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Akun Facebook</label>
                            <input class="form-control" type="text" name="fbBrief" value="{{ $coba[0]['fbWeb'] }}">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Akun Sosmed Lainnya</label>
                            {{-- <textarea id="w3review" name="w3review" rows="4" cols="10">{{ $coba[0]['sosWeb'] }}</textarea> --}}
                            <input class="form-control" type="text" name="sosBrief" value="{{ $coba[0]['sosWeb'] }}">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">No Telfon</label>
                                <input class="form-control" type="text" name="telfBrief" value="{{ $coba[0]['telWeb'] }}">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Marketplace</label>
                                <input class="form-control" type="text" name="mpBrief" value="{{ $coba[0]['mrkWeb'] }}">
                        </div>
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
                                <div class="form-icon">
                                    <span>Rp</span>
                                    <input class="rupiah form-control" type="text" id="dp" onkeyup="kasihtitik(this);"  onkeypress="validate(event)"  name="dpTrx">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Renewal</label>
                                <div class="form-icon">
                                    <span>Rp</span>
                                    <input class="rupiah form-control" type="text" id="renew" onkeyup="kasihtitik(this);"  onkeypress="validate(event)" name="renew">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Tanggal Order</label>
                                <input class="rupiah form-control" type="date"  onkeypress="validate(event)" name="tglOrder">
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
                                    <select class="form-control digits" name="fromTrx" id="exampleFormControlSelect9" required="">
                                        <option>{{ $coba[0]['kenalWeb'] }}</option>
                                        <option value="website">Website</option>
                                        <option value="google">Pencarian Google</option>
                                        <option value="instagram">Instagram</option>
                                        <option value="facebook">Facebook</option>
                                        <option value="youtube">Youtube</option>
                                        <option value="media">Media Online</option>
                                        <option value="jalan">Jalan (Spanduk)</option>
                                        <option value="teman">Teman / Kerabat</option>
                                      </select>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Deadline</label>
                                    <input class="form-control" type="date" name="deadlineOrder">
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
                    <div class="itemlist" id="itemlist">

                        <div class="item_order targetfields listtrx" id="item_order[0]">
                            <div class="form-group">
                                <label class="col-form-label">Service</label>
                                <select class="form-control" name="paketTrx[]" id="selpost" required="">

                                    <option disabled selected>--- Pilih salah satu ---</option>
                                    <option value="Web Company Profile">Web Company Profile</option>
                                    <option value="Web Toko Online">Web Toko Online</option>
                                    <option value="Web Company Profile">Web Artikel</option>
                                    <option value="Web Rental">Web Rental</option>
                                    <option value="Web Travel">Web Travel</option>
                                    <option value="Redesign / Web Custom">Redesign / Web Custom</option>
                                    <option value="Web Sales">Web Sales</option>
                                    <option value="Web Listing">Web Listing</option>
                                    <option value="Web Resto">Web Resto</option>
                                    <option value="Web Dinas / Instansi">Web Dinas / Instansi</option>
                                    <option value="Web Booking / Hotel">Web Booking / Hotel</option>
                                    <option value="Beli Hosting">Beli Hosting</option>
                                    <option value="Beli Domain">Beli Domain</option>
                                    <option value="Logo">Logo</option>
                                    <option value="Brosur">Brosur</option>
                                    <option value="Company Profile">Company Profile</option>
                                    <option value="Kartu Nama">Kartu Nama</option>
                                    <option value="ID Card">ID Card</option>
                                    <option value="Google Business">Google Business</option>

                                    </select>
                            </div>
                        <div class="form-group" style="width: 250px;">
                            <label class="col-form-label">Qty</label>
                            <input class="qty form-control" type="number" name="qtyTrx[]" required>
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

                    <span class="heading3">Total: <small id="total">Rp </small></span>
                    <button class="btn btn-primary btn-block w100" type="submit">Submit New Order</button>
                    </div>


             </div>
        </div>

    </form>

	</div>


@endsection

@section('script')

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



        var i = 0;

        document.getElementById("remove").style.display = "none";

        $("#add").click(function(){

            i++

            document.getElementById("remove").style.display = "block";

            $("#itemlist").append(
                '<div class="item_order targetfields listtrx" id="item_order[0]"><div class="form-group"><label class="col-form-label">Service</label><select class="form-control" name="paketTrx[]" id="selpost" required=""><option disabled selected>--- Pilih salah satu ---</option><option value="Beli Hosting">Beli Hosting</option><option value="Beli Domain">Beli Domain</option><option value="Web Company Profile">Web Company Profile</option><option value="Web Toko Online">Web Toko Online</option><option value="Web Company Profile">Web Artikel</option><option value="Web Rental">Web Rental</option><option value="Web Travel">Web Travel</option><option value="Redesign / Web Custom">Redesign / Web Custom</option><option value="Web Sales">Web Sales</option><option value="Web Listing">Web Listing</option><option value="Web Resto">Web Resto</option><option value="Web Dinas / Instansi">Web Dinas / Instansi</option><option value="Web Booking / Hotel">Web Booking / Hotel</option><option value="Logo">Logo</option><option value="Brosur">Brosur</option><option value="Company Profile">Company Profile</option><option value="Kartu Nama">Kartu Nama</option><option value="ID Card">ID Card</option><option value="Google Business">Google Business</option></select></div><div class="form-group" style="width: 250px;"><label class="col-form-label">Qty</label><input class="qty form-control" type="number" name="qtyTrx[]" required></div><div class="form-group"><label class="col-form-label">Harga</label><div class="form-icon"><span>Rp</span><input class="harga form-control" type="text" name="hargaTrx[]" required></div></div></div>');


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

     var	reverse = total.toString().split('').reverse().join(''),
        ribuan 	= reverse.match(/\d{1,3}/g);
        ribuan	= ribuan.join('.').split('').reverse().join('');

     $("#total").text('Rp '+ribuan);
    });

    })

    </script>


@endsection
