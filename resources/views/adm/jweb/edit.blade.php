@extends('layouts.simple.master')

@section('title', 'Add Order')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/date-picker.css')}}">
@endsection

@section('mxwidth')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Add Order</h3>
@endsection

@section('tambah')
<a href="{{route('ads.active')}}" class="btn-sm btn-danger d-inline-block"><i class="fa fa-long-arrow-left"></i> Cancel</a>
@endsection

@section('content')


<div class="container-fluid">
	<div class="row">
		<form class="theme-form" method="POST" action="{{ route('jweb.update', $webs->idWeb ?? $coba[0]['idWeb']) }}">
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
                     <div class="row">
                         <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-form-label">Nama Brand</label>
                                <input class="form-control" type="text" name="brandWeb" value="{{ $webs->brandWeb ?? $coba[0]['brandWeb'] }}" required>
                             </div>
                             <div class="form-group">
                                <label class="col-form-label">Nama Instansi</label>
                                <input class="form-control" type="text" name="namaWeb" value="{{ $webs->namaWeb ?? null }}" required>
                             </div>
                             <div class="form-group">
                                 <label class="col-form-label">Email Aktif</label>
                                 <input class="form-control" type="email" name="mailWeb" value="{{ $webs->mailWeb ?? $coba[0]['emailWeb'] }}" required>
                              </div>
                         </div>
                         <div class="col-md-6">

                             <div class="form-group">
                                <label class="col-form-label">Nama PIC</label>
                                <input class="form-control" type="text" name="picWeb" value="{{ $webs->picWeb ?? $coba[0]['namaWeb'] }}" required>
                             </div>
                             <div class="form-group">
                                <label class="col-form-label">Jabatan</label>
                                <input class="form-control" type="text" name="jabatWeb" value="{{ $webs->jabatWeb ?? null }}" required>
                             </div>
                             <div class="form-group">
                                <label class="col-form-label">No Whatsapp PIC</label>
                                <input class="form-control" type="text" onkeypress="validate(event)" name="waWeb" value="{{ $webs->waWeb ?? $coba[0]['waWeb'] }}" required>
                             </div>
                         </div>
                     </div>

                       
                        <div class="form-group">
                           <label class="col-form-label">Alamat Office</label>
                           <textarea class="form-control" name="addrWeb" required> {{ $webs->addrWeb ?? $coba[0]['almWeb'] }} </textarea>
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
                                   <input class="form-control" type="text" name="domAks" value="{{ $webs->domAks ?? $coba[0]['domWeb'] }}" required>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Username</label>
                                    <input class="form-control" type="text" name="userAks" value="{{ $webs->userAks ?? null }}" required>
                                 </div>
                                 <div class="form-group">
                                    <label class="col-form-label">Tipe Post</label>
                                    <select class="form-control" name="postWeb" id="selpost" required="">
                                        <option value="{{ $webs->postWeb ?? null }}" disabled></option>
                                        <option value="Akun A">Akun A</option>
                                        <option value="Akun B">Akun B</option>
                                        <option value="JasterAds">JasterAds</option>
                                      </select>
                                 </div>
                                 <div class="form-group">
                                    <label class="col-form-label">Logo</label>
                                    <select class="form-control" name="logoWeb" id="selpost" required="">
                                        <option disabled>--- Pilih salah satu ---</option>
                                        <option value="Akun A">Akun A</option>
                                        <option value="Akun B">Akun B</option>
                                        <option value="JasterAds">JasterAds</option>
                                      </select>
                                 </div>
                            </div>
                            <div class="col-md-6">
   
                                <div class="form-group">
                                    <label class="col-form-label">Color</label>
                                    <input class="form-control" type="text" name="colorWeb" value="{{ $webs->colorWeb ?? $coba[0]['warnaWeb'] }}" required>
                                 </div>
                                <div class="form-group">
                                   <label class="col-form-label">Password</label>
                                   <input class="form-control" type="text" name="passAks" value="{{ $webs->passAks ?? null }}" required>
                                </div>
                                <div class="form-group">
                                   <label class="col-form-label">Target</label>
                                   <select class="form-control" name="postWeb" id="selpost" required="">
                                       <option disabled>--- Pilih salah satu ---</option>
                                       <option value="Akun A">Akun A</option>
                                       <option value="Akun B">Akun B</option>
                                       <option value="JasterAds">JasterAds</option>
                                     </select>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label d-block">Request</label>
                                    <a href="#see-{{ $webs->idWeb ?? $coba[0]['idWeb'] }}" data-bs-toggle="modal" data-target="#see-{{ $webs->idWeb ?? $coba[0]['idWeb'] }}" id="modalnote"
                                     data-note="{{ $webs->idWeb ?? $coba[0]['idWeb'] }}" data-target="#viewNotes"
                                     title="View Notes" class="btn-sm w-100 text-center btn-success d-inline-block" style="padding: 13px 10px;">View Request</a>
                                 </div>

                                <div class="modal fade" id="see-{{ $webs->idWeb ?? $coba[0]['idWeb'] }}" tabindex="-1" aria-labelledby="see" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title"> View Notes</h5>
                                          <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close" data-bs-original-title="" title=""></button>
                                        </div>
                                        <div class="modal-body" id="viewNotes">
                                            <textarea id="mytextarea" class="form-control" name="reqWeb" placeholder="Content">{{ $webs->reqWeb ?? $coba[0]['reqWeb'] }}</textarea>
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
                                <input class="form-control" type="text" onkeypress="validate(event)" name="dpTrx" required>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Renewal</label>
                                <input class="form-control" type="text" onkeypress="validate(event)" name="reTrx" required>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-form-label">Payment Method</label>
                                <select class="form-control" name="payTrx" id="selpost" required="">
                                    <option disabled>--- Pilih salah satu ---</option>
                                    <option value="bca">Bank BCA</option>
                                    <option value="mandiri">Bank Mandiri</option>
                                    <option value="bsi">Bank BSI</option>
                                    </select>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Reference</label>
                                
                                <select class="form-control" name="fromTrx"  id="selpost" required="" value="{{ $webs->fromTrx ?? $coba[0]['kenalWeb'] }}">
                                    <option>{{ $webs->fromTrx ?? $coba[0]['kenalWeb'] }}</option>
                                    <option value="Akun A">Akun A</option>
                                    <option value="Akun B">Akun B</option>
                                    <option value="JasterAds">JasterAds</option>
                                    </select>
                            </div>
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
                <div class="card-body itemlist" id="itemlist">
                
                <div class="item_order d-flex" id="item_order">
                    <div class="form-group">
                        <label class="col-form-label">Service</label>
                        <input class="form-control" type="text" name="serTrx[0]" required>
                    </div>
                    <div class="form-group" style="width: 100px;">
                        <label class="col-form-label">Qty</label>
                        <input class="form-control" type="number" name="qtyTrx[0]" required>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Harga</label>
                        <input class="form-control" type="text" onkeypress="validate(event)" name="harTrx[0]" required>
                    </div>
                </div>    
                </div>
             </div>

        </div>
        <button class="btn btn-primary btn-block w100" type="submit">Submit</button>
    </form>
	</div>
</div>

@endsection

@section('script')
    
<script type="text/javascript">

   

    var i = 0;

       

    $("#add").click(function(){

   

        ++i;

   

        $("#itemlist").append(
            '<div class="item_order d-flex" id="item_order"><div class="form-group"><label class="col-form-label">Service</label><input class="form-control" type="text" name="serTrx['+i+']" required></div><div class="form-group" style="width: 100px;"><label class="col-form-label">Qty</label><input class="form-control" type="number" name="qtyTrx['+i+']" required></div><div class="form-group"><label class="col-form-label">Harga</label><input class="form-control" type="text" onkeypress="validate(event)" name="harTrx['+i+']" required></div></div>');
    });

   

    $("#remove").click(function(){  

         $('#itemlist').parent().find('#item_order').remove();

    });  

   

</script>

<script src="{{asset('assets/js/datepicker/date-picker/datepicker.js')}}"></script>
<script src="{{asset('assets/js/datepicker/date-picker/datepicker.en.js')}}"></script>
<script src="{{asset('assets/js/datepicker/date-picker/datepicker.custom.js')}}"></script>
@endsection
