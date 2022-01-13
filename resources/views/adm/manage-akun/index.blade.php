@extends('layouts.simple.master')

@section('title', 'Account')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/bootstrap.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/animate.css')}}">
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
             <table class="table table-striped" id="dtbasic">
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
                        @if ($user->roles->pluck('name')[0] == 1)
                        Superadmin
                        @elseif ($user->roles->pluck('name')[0] == 2)
                            Admin
                        @elseif ($user->roles->pluck('name')[0] == 3)
                            Team
                        @elseif ($user->roles->pluck('name')[0] == 4)
                            Client
                        @else
                            Magang
                        @endif
                     </td>
                     <td>
                        {{ Carbon\Carbon::parse($user->lastLogin)->format('d F Y H:i') }}
                     </td>
                     <td>
                        <a class="btn btn-primary" href="{{route('account.edit',$user->nama)}}"><svg width="20" className="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" /></svg>Edit</a>

                        <a href="{{ route('account.delete', $user->nama) }}" class="btn btn-danger hilang"><svg className="w-6 h-6" width="20" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fillRule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clipRule="evenodd" /></svg> Delete </a>
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

    $('#dtbasic').DataTable({
            lengthMenu: [5, 10, 20, 50, 100, 200, 500],
    });
 </script>
@endsection
