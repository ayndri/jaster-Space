@extends('layouts.simple.master')

@section('title', 'List Pending')

@section('css')
@endsection

@section('mxwidth')
@endsection

@section('style')
<style>
  .thead tr{border:0px}
  .thead .sort, .thead .sorting {background: #21262D }
</style>

@endsection

@section('breadcrumb-title')
<h3>List Pending</h3>
@endsection


@section('content')


<div class="container-fluid">
	<div class="row">
		
		<div class="col-md-12">
            <div class="card">
                <div class="table-responsive p-3">
                    <table class="table display table-striped table-bordered" id="dttbls">
                        <thead class="thead">
                            <tr>
                              <th scope="col" class="sort" data-sort="brandWeb">Tanggal</th>
                              <th scope="col" class="sort" data-sort="brandWeb">Brand</th>
                              <th scope="col" class="sort" data-sort="namaWeb">Nama</th>
                              <th scope="col" class="sort" data-sort="domWeb">Domain</th>
                              <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                          @foreach($hasil as $res)
                          <tr>
                            <td>
                            {{ $res['brandWeb'] }}
                            </td>
                            <td>
                            {{ $res['domWeb'] }}
                            </td>
                            <td>
                              {{ $res['emailWeb'] }}
                            </td>
                            <td>
                              {{ $res['almWeb'] }}
                            </td>
                            <td class="text-right">
                              <a class="btn btn-primary text-light" href="/jweb/{{ $res['idWeb'] }}/view" data-toggle="tooltip" data-placement="top" title="View">
                                <i class="icon-eye"></i>
                              </a>
                              <a class="btn btn-info text-light" href="/jweb/{{ $res['idWeb'] }}/edit" data-toggle="tooltip" data-placement="top" title="Edit">
                                <i class="icon-pencil"></i>
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
                          
                          @endforeach
                            
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
<script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatables/datatable.custom.js')}}"></script>

<script type="text/javascript"> 

     $('#dttbls').DataTable();


   </script>
    
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
