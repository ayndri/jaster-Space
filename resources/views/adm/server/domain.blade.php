@extends('layouts.simple.master')

@section('title', 'Cari Hosting')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/select2.css')}}">
@endsection

@section('style')

@endsection

@section('mxwidth')
tengahkan
@endsection

@section('breadcrumb-title')
<h3>All Domain</h3>
@endsection

@section('tambah')
@endsection

@section('content')


<div class="container-fluid">
	<div class="row">
        <div class="col-md-12">
            <div class="card">

                <div class="card-body">

               <div class="card">
                <h5 class="text-center m-b-25 m-t-15">Ketik Domain Dibawah ini</h5>
                <input type="text" class="form-control" id="search" name="search">
                <h3 class="text-center" id="hosting"></h3>
                </div>
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog"     aria-labelledby="exampleModalLabel" aria-hidden="true">
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

        <div class="col-md-12">
            <div class="row">
            @forelse ( $hosts as $host)
            <div class="col-md-4">
                <div class="card mb-3">
                    
                    <div class="card-body">
                        <div class="pull-left">
                            <h6 class="card-title">{{$host->domHost}}</h6>
                            <p class="card-text">Memiliki {{$host->domain_count}} website</p>
                        </div>
                        <div class="pull-right">
                            <a class="btn-big" href="{{route('domain.list',$host->idHost)}}"><i data-feather="arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @empty

            @endforelse
            </div>
        </div>
    </div>
</div>



@endsection

@section('script')
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
