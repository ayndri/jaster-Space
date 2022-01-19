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
<a href="{{route('jweb.semua')}}" class="btn-sm btn-success inflex m-r-10"><svg class="w-6 h-6 m-r-5" width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18"></path></svg> Go Back</a>
<a class="btn-sm btn-danger" href="#">Edit</a>
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
                        <input class="form-control" type="text" name="brandComp" value="{{ $webs->brandComp }}" readonly>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Nama PIC</label>
                        <input class="form-control" type="text" name="nama" value="{{ $webs->nama }}" readonly>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Email Aktif</label>
                        <input class="form-control" type="mail" name="email" value="{{ $webs->email }}" readonly>
                    </div>

                    <div class="form-group">
                        <label class="col-form-label">Nama Instansi</label>
                        <input class="form-control" type="text" name="namaComp" value="{{ $webs->namaComp }}" readonly>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Jabatan</label>
                        <input class="form-control" type="text" name="jabatUser" value="{{ $webs->jabatUser }}" readonly>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">No Whatsapp PIC</label>
                        <div class="form-icon">
                            <span>+62</span>
                            <input class="form-control" type="text" onkeypress="validate(event)" value="{{ $webs->telpUser }}" name="telpUser" readonly>
                        </div>
                        </div>
                </div>
                <div class="form-group">
                    <label class="col-form-label">Alamat Office</label>
                    <textarea class="form-control" name="addrComp" readonly>{{ $webs->addrComp }}</textarea>
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
                                <input class="form-control" type="text" name="domainAkses" value="{{ $webs->domainAkses }}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Username</label>
                            <input class="form-control" type="text" name="userAkses" value="{{ $webs->userAkses }}" readonly>
                        </div>
                        <div class="form-group">
                        <label class="col-form-label">Tipe Post</label>
                        <input class="form-control" type="text" name="postBrief" value="{{ $webs->postBrief }}" readonly>
                        </div>
                        
                        
                        <div class="form-group">
                            <label class="col-form-label">Paket Website</label>
                            <input class="form-control" type="text" name="paketBrief" value="{{ $webs->paketBrief }}" readonly>
                        </div>

                        <div class="form-group">
                            <label class="col-form-label">Color</label>
                            <input class="form-control" type="text" name="colorBrief" value="{{ $webs->colorBrief }}" readonly>
                            </div>
                        <div class="form-group">
                            <label class="col-form-label">Password</label>
                            <input class="form-control" type="text" name="passAkses" value="{{ $webs->passAkses }}" readonly>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Target</label>
                            <input class="form-control" type="text" name="targetBrief" value="{{ $webs->targetBrief }}" readonly>
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
                                    <input class="rupiah form-control" type="text" id="dp" value="@money($webs->dpTrx)" onkeypress="validate(event)"  name="dpTrx" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Renewal</label>
                                <div class="form-icon">
                                    <span>Rp</span>
                                    <input class="rupiah form-control" type="text" id="renew" value="@money($webs->renew)" onkeypress="validate(event)" name="renew" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Tanggal Order</label>
                                <input class="rupiah form-control" type="date" value="{{ $webs->tglOrder }}" onkeypress="validate(event)" name="tglOrder" readonly>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-form-label">Payment Method</label>
                                <input class="form-control" type="text" value="{{ $webs->pmOrder }}" name="pmOrder" readonly>
                                
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Reference</label>
                                    <input class="form-control" type="text" value="{{ $webs->fromTrx }}" name="fromTrx" readonly>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Deadline</label>
                                    <input class="form-control" type="date" name="deadlineOrder" value="{{ $webs->deadlineOrder }}" readonly>
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
                    @foreach ($trxweb as $trx)

                    <div class="itemlist" id="itemlist">

                        <div class="item_order targetfields listtrx" id="item_order[0]">
                            <div class="form-group">
                                <label class="col-form-label">Service</label>
                                <input class="form-control" type="text" value="{{ $trx->paketTrx }}" name="pmOrder" readonly>
                               
                            </div>
                        <div class="form-group" style="width: 250px;">
                            <label class="col-form-label">Qty</label>
                            <input class="qty form-control" type="number" value="@money($trx->qtyTrx)" name="qtyTrx[]" readonly>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Harga</label>
                            <div class="form-icon">
                                <span>Rp</span>
                                <input class="harga form-control" type="text" value="@money($trx->hargaTrx)" name="hargaTrx[]" readonly>
                            </div>
                        </div>
                    </div>
                    </div>

                    @endforeach

                    <input class="" id="totalasli" type="hidden" name="totalOrder">
            
                    <span class="heading3">Total: <small id="total">Rp @money($webs->totalOrder)</small></span>
                    {{-- <button class="btn btn-primary btn-block w100" type="submit">Submit New Order</button> --}}
                    </div>


             </div>
        </div>

    </form>

	</div>
</div>

@endsection

@section('script')

@endsection
