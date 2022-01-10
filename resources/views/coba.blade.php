@extends('layouts.front.master')
@section('title', 'Show Order')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3 class="mb-0">Show Order</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item"><a href="http://myjaster.com/adm/order/all">Order</a></li>
<li class="breadcrumb-item active">Show Order</li>
@endsection

@section('content')

<div class="container-fluid">
   <div class="row">
      <div class="col-sm-12">
        <div class="card">

            @foreach($response as $data)
            <div class="card-header"><h5>{{ $data['brandWeb'] }} - Order Details</h5></div>
            @endforeach

            @foreach($response as $data)
            <div class="card-body">
                <div class="row">
                <div class="col-md-4">
                    <div class="mb-4">
                        <label class="form-label">Domain</label>
                        <input class="form-control" name="domWeb" type="text" value="{{ $data['domWeb'] }}" disabled>
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Nama</label>
                        <input class="form-control" name="namaWeb" type="text" value="{{ $data['namaWeb'] }}" disabled>
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Email</label>
                        <input class="form-control" name="emailWeb" type="text" value="{{ $data['emailWeb'] }}" disabled>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-4">
                    <label class="form-label">Alamat</label>
                    <input class="form-control" name="almWeb" type="text" value="{{ $data['almWeb'] }}" disabled>
                </div>
                <div class="mb-4">
                    <label class="form-label">Kode Pos</label>
                    <input class="form-control" type="text" name ="posWeb" value="{{ $data['posWeb'] }}" disabled>
                </div>
                <div class="mb-4">
                    <label class="form-label">Tau dari</label>
                    <input class="form-control" type="text" name="kenalWeb" value="{{ $data['kenalWeb'] }}" disabled>
                </div>
            </div>
            @endforeach
            
            @foreach($response as $data)
            <div class="col-md-4">
                    <div class="mb-4">
                    <label class="form-label">Warna</label>
                    <input class="form-control" type="text" value="{{ $data['warnaWeb'] }}" disabled>
                </div>
                <div class="mb-4">
                    <label class="form-label">Submit Data</label>
                    <input class="form-control" type="text" value="{{ $data['created_at'] }}" disabled>
                </div>
                <div class="mb-4">
                    <label class="form-label">Logo</label><br/>
                    <a class="btx btn-primary mr-2" href="" download><i class="icon-import"></i> <span>Download</span></a>
                    <a class="btn-icon btn-primary-alt" href="" target="_blank"><i class="icon-eye"></i></a>
                </div>
            </div>
            @endforeach


            </div>
<hr/><h6>Informasi Kontak</h6><hr/><br/>

@foreach($response as $data)
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-4">
                        <label class="form-label">Whatsapp</label>
                        <textarea class="form-control" disabled>{{ $data['waWeb'] }}</textarea>
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Telfon</label>
                        <textarea class="form-control" disabled>{{ $data['telWeb'] }}</textarea>
                    </div>
                    
                </div>
                <div class="col-md-4">
                    
                    <div class="mb-4">
                        <label class="form-label">Instagram</label>
                        <textarea class="form-control" disabled>{{ $data['igWeb'] }}</textarea>
                    </div>
                    <div class="mb-4">
                    <label class="form-label">Sosmed</label>
                    <textarea class="form-control" disabled>{{ $data['sosWeb'] }}</textarea>
                    </div>
                </div>
                <div class="col-md-4">
                    
                    <div class="mb-4">
                        <label class="form-label">Marketplace</label>
                        <textarea class="form-control" disabled>{{ $data['mrkWeb'] }}</textarea>
                        </div>
                    <div class="mb-4">
                        <label class="form-label">Request</label>
                        <textarea class="form-control" disabled>{{ $data['reqWeb'] }}</textarea>
                        </div>

                        
                   
                </div>
            </div>
            @endforeach


            </div>
        </div>
      </div>
   </div>
</div>


@endsection

@section('script')

@endsection