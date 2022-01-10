@extends('layouts.simple.master')

@section('title', 'All Hosting')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/animate.css')}}">
@endsection

@section('style')
@endsection

@section('mxwidth')
tengahkan
@endsection

@section('breadcrumb-title')
<h3>All Hosting</h3>
@endsection

@section('tambah')
@endsection

@section('content')


<div class="container-fluid">
		<div class="row">
		<div class="col-md-8">
         <div class="card">
            
             <div class="card-body">
                
        <div class="card">
         <div class="table-responsive">
             <table class="table table-striped" id="dttbls">
                 <thead class="thead">
                     <tr>
                       <th scope="col" class="sort" data-sort="no">No</th>
                       <th scope="col" class="sort" data-sort="domHost">Domain</th>
                       <th scope="col" class="sort" data-sort="">Action</th>
                     </tr>
                 </thead>
                 <tbody class="list">
                  @php $no = 1; @endphp
                  @forelse ($allhost as $all)
                   <tr>
                     <td>
                     {{ $no++ }}
                     </td>
                     <td>
                      {{ $all->domHost }}
                     </td>
                     <td>
                      <a href="https://{{ $all->domHost }}/cpanel" class="btn-sm btn-primary d-inline-block" target="_blank">Open cPanel</a>
                      <a class="btn-ic btn-success btn-round" onclick="show({{ $all->idHost }})"><i class="icon-pencil"></i></a>
                      <a href="{{ route('host.del', $all->idHost) }}" class="btn-ic btn-danger btn-round hilang"><i class="icon-close"></i></a>
                     </td>
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
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                  <form class="theme-form" id="formhost" method="POST" action="{{ route('host.add') }}">
   
                     @csrf 
                        @foreach ($errors->all() as $error)
                        <p class="text-danger">{{ $error }}</p>
                        @endforeach 
                        <div class="col-md-12">
                           <div class="form-group">
                              <label class="col-form-label">Domain</label>
                              <input id="domHost" class="form-control" type="text" name="domHost" required>
                           </div>
         
                           <div class="form-group">
                            <label class="col-form-label">Username</label>
                            <input id="userHost" class="form-control" type="text" name="userHost" required="">
                         </div>
         
                           <div class="form-group">
                              <label class="col-form-label">Password</label>
                              <input id="passHost" class="form-control" type="text" name="passHost" required="">
                           </div>
                        </div>
                     
                     
   
                     
                     <div class="form-group mt-5">
                        <button class="btn btn-primary btn-block w100" type="submit">Submit</button>
                     </div>
                     
                  </form>
                </div>
             </div>
        </div>
    </div>
</div>



@endsection

@section('script')
<script>
    function show(idHost) {
        var urlView = '{{ route("host.view", ":id") }}';
        var urlEdit = '{{ route("host.edit", ":id") }}';


        urlView = urlView.replace(':id', idHost);
        urlEdit = urlEdit.replace(':id', idHost);


        $.ajax({
            url: urlView,
            type: 'GET',
            dataType: 'JSON',
            success: function(response) {
                if(response.code == 200) {
                    $('#domHost').val(response.result.domHost);
                    $('#userHost').val(response.result.userHost);
                    $('#passHost').val(response.result.passHost);
                    $('#formhost').attr('action', urlEdit);
                }
            }
        });
    }

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
@endsection
