@extends('layouts.simple.master')

@section('title', 'Cari Hosting')

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
             <h4>Belum Masuk Hosting</h4>
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
                    @if ($all->hosting == Null)
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
                   @endif
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
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="top-new">Tambah baru</h4>
                  <form class="theme-form" id="formhost" method="POST" action="{{ route('domain.store') }}">
                     @csrf
                        @foreach ($errors->all() as $error)
                        <p class="text-danger">{{ $error }}</p>
                        @endforeach
                        <div class="col-md-12">
                           <div class="form-group">
                              <label class="col-form-label">Nama Domain</label>
                              <input id="domainAkses" class="form-control" type="text" name="domainAkses" required>
                           </div>


                           <div class="form-group">
							<div class="col-form-label">Hosting</div>
							<select name="host_id" id="selecttwo host_id" class="js-example-basic-single col-sm-12 select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                    <option disabled selected>None</option>
									@foreach ($hosts as $host)
                                    <option value="{{$host->idHost}}">{{$host->domHost}}</option>
                                    @endforeach
							</select>
						    </div>

                           <div class="form-group">
                              <label class="col-form-label">Nama Order</label>
                              <input id="idOrder" class="form-control" type="text" name="idOrder" required="">
                           </div>
                           <div class="form-group">
                              <label class="col-form-label">Tanggal Order</label>
                              <input id="tgl" class="form-control" type="text" name="tgl" value="{{now()->format('d F Y')}}">
                           </div>
                        </div>
                     <div class="form-group mt-5">
                        <button class="btn btn-primary btn-block w100" type="submit">Submit</button>
                     </div>

                  </form>
                </div>
             </div>
        </div>
        {{-- end no  hosting --}}

        <div class="col-md-12">
            <div class="card">

                <div class="card-body">

               <div class="card">
            <div class="table-responsive">
                <input type="text" class="form-control" id="search" name="search">
                <table class="table table-striped">
                    <thead class="thead">
                        <tr>
                          <th scope="col" class="sort" data-sort="no">No</th>
                          <th scope="col" class="sort" data-sort="domHost">Domain</th>
                          <th scope="col" class="sort" data-sort="">Hosting</th>
                          <th scope="col" class="sort" data-sort="">Action</th>
                        </tr>
                    </thead>
                    <tbody id="hosting" class="list">
                        </tbody>
                </table>
                   </div>
                   </div>
                </div>
             </div>
             <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Akun Hosting <span id="domHosting"></span></h5>
                      <button type="button" class="btn-sm btn-danger text-white close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><svg width="15" className="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fillRule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clipRule="evenodd" /></svg></span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="col-form-label">Username</label>
                            <input id="userHost" class="form-control" type="text" name="idOrder" required="" disabled>
                         </div>
                         <div class="form-group">
                            <label class="col-form-label">Password</label>
                            <input id="passHost" class="form-control" type="text" name="idOrder" required="" disabled>
                         </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary close" data-dismiss="modal">Close</button>
                    </div>
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
<script src="{{asset('assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap/popper.min.js')}}"></script>
<script src="{{asset('assets/js/select2/select2.full.min.js')}}"></script>
<script src="{{asset('assets/js/select2/select2-custom.js')}}"></script>
<script>
        $('#dttbls').DataTable({
            lengthMenu: [6, 10, 20, 50, 100, 200, 500],
        });
</script>
<script>
    function show(idAkses) {
        var urlView = '{{ route("domain.view", ":id") }}';
        var urlEdit = '{{ route("domain.edit", ":id") }}';


        urlView = urlView.replace(':id', idAkses);
        urlEdit = urlEdit.replace(':id', idAkses);


        $.ajax({
            url: urlView,
            type: 'GET',
            dataType: 'JSON',
            success: function(response) {
                if(response.code == 200) {
                    $('#domainAkses').val(response.result.domainAkses);
                    $('#host_id').val(response.result.host_id);
                    $('#idOrder').val(response.result.idOrder);
                    $('#formhost').attr('action', urlEdit);
                }
            }
        });
    }

    function getAcc(idAkses) {
        $('#myModal').modal('show')
        var urlView = '{{ route("domain.gethosting", ":id") }}';


        urlView = urlView.replace(':id', idAkses);

        $.ajax({
            url: urlView,
            type: 'GET',
            dataType: 'JSON',
            success: function(response) {
                if(response.code == 200) {
                    $('#domHosting').html(response.result.hosting.domHost)
                    $('#userHost').val(response.result.hosting.userHost);
                    $('#passHost').val(response.result.hosting.passHost);
                }
            }
        });
    }

   $('.close').on('click', function (event) {
        $('#myModal').modal('hide')
   });
</script>
<script type="text/javascript">
    $('#search').on('keyup',function() {
    $value = $(this).val();


        if ($(this).val() == '') { // check if value changed
            $('#hosting').hide();
        }else{
            $.ajax({
            type : 'get',
            url : "{{route('domain.search')}}",
            data:{'search':$value},
            success:function(data){
                $('#hosting').html(data).show();
            }
        });
        }
    });

       $('.hilang').on('click', function (event) {
       event.preventDefault();
       const url = $(this).attr('href');
       swal({
        title: 'Yakin mau dihapus?',
           text: 'Pastikan dulu biar ngga salah 🙏',
           icon: 'warning',
           buttons: ["Gajadi, maap", "Ya, Sudah!"],
       }).then(function(value) {
           if (value) {
               window.location.href = url;
           }
       });
   });
    </script>
    <script type="text/javascript">
    $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
    </script>
@endsection
