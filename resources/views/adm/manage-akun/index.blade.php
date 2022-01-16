@extends('layouts.simple.master')

@section('title', 'Account')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/bootstrap.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
@endsection

@section('style')
@endsection

@section('mxwidth')
@endsection

@section('breadcrumb-title')
<h3>Account</h3>
@endsection

@section('tambah')
<a href="{{route('account.create')}}" class="btn-sm btn-primary d-inline-block">Tambah User</a>
@endsection

@section('content')


<div class="container-fluid">

		<div class="col-md-12">
         <div class="card">

             <div class="card-body">

        <div class="card">
         <div class="table-responsive">
             <table class="table table-striped" id="dtsearch">
                 <thead class="thead">
                     <tr>
                       <th scope="col" class="sort">No</th>
                       <th scope="col" class="sort">Nama User</th>
                       <th scope="col" class="sort">Email</th>
                       <th scope="col" class="sort">Role User</th>
                       <th scope="col" class="sort">Last Login</th>
                       <th scope="col" class="sort">Action</th>
                     </tr>
                 </thead>
                 <tbody class="list">
                  @php $no = 1; @endphp
                  @forelse ($users as $key => $user)
                   <tr>
                     <td>
                        {{ $no++}}
                     </td>
                     <td>
                      {{ $user->nama }}
                     </td>
                     <td>
                     {{ $user->email }}
                     </td>
                     <td>
                        @if ($user->roles->pluck('nama')[0] == 1)
                        Superadmin
                        @elseif ($user->roles->pluck('nama')[0] == 2)
                            Admin
                        @elseif ($user->roles->pluck('nama')[0] == 3)
                            Team
                        @elseif ($user->roles->pluck('nama')[0] == 4)
                            Client
                        @else
                            Magang
                        @endif
                     </td>
                     <td>
                        {{ Carbon\Carbon::parse($user->lastLogin)->format('d F Y H:i') }}
                     </td>
                     
                    <td class="text-right">
                        <a class="btn-ic btn-primary m-r-5" href="{{route('account.edit',$user->nama)}}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="icon-pencil"></i></a>
                        <a href="{{ route('account.delete', $user->nama) }}" class="btn-ic btn-danger hilang"><i class="icon-close"></i></a>
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
<script src="{{asset('assets/js/datatable/datatables/datatable.custom.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
<script>
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
