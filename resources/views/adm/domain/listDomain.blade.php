@extends('layouts.simple.master')

@section('title', 'All Domain')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/select2.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/bootstrap.css')}}">
@endsection

@section('style')
<style>
    .select2-selection--single
{
    background-color: #313842!important;
    border: 1px solid #282828 !important;
}
</style>
@endsection

{{-- @section('mxwidth')
tengahkan
@endsection --}}

@section('breadcrumb-title')
<h3>All Domain</h3>
@endsection

@section('tambah')
@endsection

@section('content')


<div class="container-fluid">
	<div class="row">
        {{-- no hosting --}}
		<div class="col-md-8">
         <div class="card">

             <div class="card-body">

            <div class="card">
         <div class="table-responsive">
             <table class="table table-striped" id="dttbls">
                 <thead class="thead">
                     <tr>
                       <th scope="col" class="sort" data-sort="no">No</th>
                       <th scope="col" class="sort" data-sort="domHost">Nama Domain</th>
                       <th scope="col" class="sort" data-sort="">Action</th>
                     </tr>
                 </thead>
                 <tbody class="list">
                  @php $no = 1; @endphp
                  @forelse ($domain as $all)
                   <tr>
                     <td>
                     {{ $no++ }}
                     </td>
                     <td>
                      {{ $all->domainAkses }}
                     </td>
                     <td> <a class="btn-ic btn-success btn-round" onclick="show({{ $all->idAkses }})"><i class="icon-pencil"></i></a>
                        <a href="" class="btn-ic btn-danger btn-round hilang"><i class="icon-close"></i></a></td>
                   </tr>
                    @empty
                   <tr>
                   <td colspan="6" class="text-center">Nothing</td>
                   </tr>

                 @endforelse
                   </tbody>
                </table>
                </div>
                </div>
             </div>
          </div>

		</div>
        {{-- end no  hosting --}}
    </div>
</div>



@endsection

@section('script')
<script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatables/datatable.custom.js')}}"></script>
<script src="{{asset('assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap/popper.min.js')}}"></script>
<script src="{{asset('assets/js/select2/select2.full.min.js')}}"></script>
<script src="{{asset('assets/js/select2/select2-custom.js')}}"></script>
<script>
        $('#dttbls').DataTable({
            lengthMenu: [10, 20, 50, 100, 200, 500],
        });
</script>
@endsection
