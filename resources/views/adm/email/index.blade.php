@extends('layouts.simple.master')

@section('title', 'Send Email')

@section('css')
@endsection

@section('style')
@endsection

@section('mxwidth')
tengahkan
@endsection

@section('breadcrumb-title')
<h3>History Email</h3>
@endsection

@section('tambah')
<a href="{{route('email.create')}}" class="btn-sm btn-primary d-inline-block">Send Email</a>
@endsection

@section('content')


<div class="container-fluid">

		<div class="col-md-12">
         <div class="card">

             <div class="card-body">

        <div class="card">
         <div class="table-responsive">
             <table class="table table-striped" id="dttbls">
                 <thead class="thead">
                     <tr>
                         <th scope="col" class="sort">No</th>
                         <th scope="col" class="sort">No Order</th>
                       <th scope="col" class="sort">Email</th>
                       <th scope="col" class="sort">Link GDrive</th>
                     </tr>
                 </thead>
                 <tbody class="list">
                @php $no = 1; @endphp
                @forelse ($emails as $email )
                <tr>
                  <td>
                     {{ $no++}}
                  </td>
                  <td>
                     #{{ $email->noOrder}}
                  </td>
                  <td>
                     {{ $email->email}}
                  </td>
                  <td>
                     <a class="btn-ic btn-primary m-r-5" href="{{$email->gd}}" target="_blank" data-toggle="tooltip" data-placement="top" title="Edit"><i class="icon-eye"></i></a>
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
</div>



@endsection

@section('script')
<script>
      $('#dttbls').DataTable({
        "lengthChange": false
    });
    $('.hilang').on('click', function (event) {
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
         title: 'Yakin hapus data ini?',
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
