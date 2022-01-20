@extends('layouts.simple.master')

@section('title', 'View Detail Order')

@section('css')
@endsection

@section('mxwidth')
@endsection

@section('style')

@endsection

@section('breadcrumb-title')
<h3>View Detail Order</h3>
@endsection

@section('tambah')
<a href="{{route('jweb.active')}}" class="btn-sm btn-success inflex m-r-10"><svg class="w-6 h-6 m-r-5" width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18"></path></svg> Go Back</a>
<a class="btn-sm btn-danger" href="{{ route('jweb.edit', $coba[0]['idWeb']) }}">Edit</a>
@endsection

@section('content')


<div class="container-fluid">
		<form class="" enctype="multipart/form-data" method="POST">
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
                        <input class="form-control" type="text" name="brandComp" value="{{  $coba[0]['brandWeb']  }}" readonly>
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
                        <input class="form-control" type="mail" name="email" value="{{ $coba[0]['emailWeb'] }}" readonly>
                    </div>

                    <div class="form-group">
                        <label class="col-form-label">Nama Instansi</label>
                        <input class="form-control" type="text" name="namaComp" value="{{ $coba[0]['brandWeb'] }}" readonly>
                    </div>

                    @if(strpos($coba[0]['namaWeb'], '-'))

                    @php $pic = explode(' - ', $coba[0]['namaWeb']) @endphp

                    @if( $pic != null)

                    <div class="form-group">
                        <label class="col-form-label">Jabatan</label>
                        <input class="form-control" type="text" name="jabatUser" value="{{ $pic[1] }}" readonly>
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
                            <input class="form-control" type="text" onkeypress="validate(event)" value="{{ $coba[0]['waWeb'] }}" name="telpUser" readonly>
                        </div>
                        </div>
                </div>
                <div class="form-group">
                    <label class="col-form-label">Alamat Office</label>
                    <textarea class="form-control" name="addrComp" readonly>{{ $webs->addrWeb ?? $coba[0]['almWeb'] }}, {{ $coba[0]['posWeb'] }}</textarea>
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
                                <input class="form-control" type="text" name="domainAkses" value="{{ $coba[0]['domWeb'] }}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Username</label>
                            <input class="form-control" type="text" name="userAkses" readonly>
                        </div>
                        <div class="form-group">
                        <label class="col-form-label">Tipe Post</label>
                        <input class="form-control" type="text" name="postBrief"  readonly>
                        </div>
                        
                        
                        <div class="form-group">
                            <label class="col-form-label">Paket Website</label>
                            <input class="form-control" type="text" name="paketBrief" readonly>
                        </div>

                        <div class="form-group">
                            <label class="col-form-label">Logo</label><br>
                            <input class="form-control mb-1" accept="image/*" name="logoBrief" type="file" id="myImageInput" style="display: none;">
                            <embed src="https://myjaster.com/img/logo/{{ $coba[0]['logoweb'] }}" width="300" />
                            <br><br>
                            <a href="https://myjaster.com/img/logo/{{ $coba[0]['logoweb'] }}" target="_blank" download=""> Download File</a>
                            
                         </div>

                        <div class="form-group">
                            <label class="col-form-label">Color</label>
                            <input class="form-control" type="text" name="colorBrief" value="{{ $coba[0]['warnaWeb'] }}" readonly>
                            </div>
                        <div class="form-group">
                            <label class="col-form-label">Password</label>
                            <input class="form-control" type="text" name="passAkses" readonly>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Target</label>
                            <input class="form-control" type="text" name="targetBrief" readonly>
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
                                    <input class="rupiah form-control" type="text" id="dp"  onkeypress="validate(event)"  name="dpTrx" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Renewal</label>
                                <div class="form-icon">
                                    <span>Rp</span>
                                    <input class="rupiah form-control" type="text" id="renew"  onkeypress="validate(event)" name="renew" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Tanggal Order</label>
                                <input class="rupiah form-control" type="date"  onkeypress="validate(event)" name="tglOrder" readonly>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-form-label">Payment Method</label>
                                <input class="form-control" type="text"  name="pmOrder" readonly>
                                
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Reference</label>
                                    <input class="form-control" type="text"  name="fromTrx" value="{{ $coba[0]['kenalWeb'] }}" readonly>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Deadline</label>
                                    <input class="form-control" type="date" name="deadlineOrder" readonly>
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
                </div>

                <div class="card-body">

                    <div class="itemlist" id="itemlist">

                        <div class="item_order targetfields listtrx" id="item_order[0]">
                            <div class="form-group">
                                <label class="col-form-label">Service</label>
                                <input class="form-control" type="text" name="pmOrder" readonly>
                               
                            </div>
                        <div class="form-group" style="width: 250px;">
                            <label class="col-form-label">Qty</label>
                            <input class="qty form-control" type="number"  name="qtyTrx[]" readonly>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Harga</label>
                            <div class="form-icon">
                                <span>Rp</span>
                                <input class="harga form-control" type="text" name="hargaTrx[]" readonly>
                            </div>
                        </div>
                    </div>
                    </div>

                   

                    <input class="" id="totalasli" type="hidden" name="totalOrder">
            
                    <span class="heading3">Total: <small id="total">Rp </small></span>
                    {{-- <button class="btn btn-primary btn-block w100" type="submit">Submit New Order</button> --}}
                    </div>


             </div>
        </div>

    </form>

	</div>
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
