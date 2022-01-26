@extends('layouts.simple.master')

@section('title', 'List Pending')

@section('css')
@endsection

@section('mxwidth')
tengahkan
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>List Pending</h3>
@endsection

@section('tambah')
<a href="{{route('jweb.active')}}" class="btn-sm btn-primary d-inline-block">List Progress</a>
@endsection


@section('content')


<div class="container-fluid">
	<div class="row">
		
		<div class="col-md-12">

            <div class="card">
              <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="thead">
                        <tr>
                          <th scope="col" class="sort" data-sort="brandWeb">Tanggal</th>
                          <th scope="col" class="sort" data-sort="brandWeb">Brand</th>
                          <th scope="col" class="sort" data-sort="domWeb">Domain</th>
                          <th class="text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody class="list">
                      @forelse($hasil as $res)
                      <tr>
                        <td>
                          {{ Carbon\Carbon::parse($res['created_at'])->locale('id')->format('l, j F Y') }}
                        </td>
                        <td>
                        {{ $res['brandWeb'] }}
                        </td>
                        <td>
                          <a href="https://idwebhost.com/cek-domain/{{ $res['domWeb'] }}" target="_blank"/>{{ $res['domWeb'] }}</a>
                        </td>
                        <td class="text-right">
                          <a class="btn-ic btn-success" href="/jweb/{{ $res['idWeb'] }}/acc">
                            <i data-feather="eye" class="m-r-10"></i> Lihat Brief
                          </a>
                         
                          <!-- <form action="{{ $res['idWeb'] }}" method="post" class="dinline">
                            @csrf
                            @method('delete')
                          <a class="btn btn-danger  text-light" onclick="confirm('{{ __("Yakin Mau hapus data ini?") }}') ? this.parentElement.submit() : ''" data-toggle="tooltip" data-placement="top" title="Delete">
                            <i class="icon-close"></i>
                          </a>
                        </form> -->
    
                        </td>
                      </tr>
                      @empty
                      <tr>
                      <td colspan="5" class="text-center">Belum ada order Pending</td>
                      </tr>
  
                      @endforelse
                    </tbody>
                </table>
              </div>
            </div>
            </div>
          </div>

          
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

@endsection
