@extends('layouts.simple.master')

@section('title', 'Renewal')

@section('css')
@endsection

@section('style')
@endsection

@section('mxwidth')
tengahkan
@endsection

@section('breadcrumb-title')
<h3>Renewal</h3>
@endsection

@section('tambah')
@endsection

@section('content')


<div class="container-fluid">

		<div class="col-md-12">
            <div class="card">

                <div class="card-body">
                    <div class="card">
                        <div class="card-header"><h3>H - 14 Renewal</h3></div>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead class="thead">
                                    <tr>
                                      <th scope="col" class="sort">No</th>
                                      <th scope="col" class="sort">Nomer Order</th>
                                      <th scope="col" class="sort">Client</th>
                                      <th scope="col" class="sort">Jenis Order</th>
                                      <th scope="col" class="sort">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="list">
                                 @php $no = 1; @endphp
                                 @forelse ($renewals as $renewal)


                                 @if (now()->format('d') - 14 == $renewal->created_at->format('d'))
                                  <tr>
                                    <td>
                                       {{ $no++}}
                                    </td>
                                    <td>
                                     {{ $renewal->nomerOrder }}
                                    </td>
                                    <td>
                                    {{ $renewal->fromTrx }}
                                    </td>
                                    <td>
                                       {{ $renewal->jenisOrder }}
                                    </td>

                                   <td class="text-right">
                                       <a class="btn-ic btn-primary m-r-5" href="" data-toggle="tooltip" data-placement="top" title="Edit"><i class="icon-pencil"></i></a>
                                   </td>

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

            {{-- h-4 --}}
            <div class="card">

                <div class="card-body">
                    <div class="card">
                        <div class="card-header"><h3>H - 4 Renewal</h3></div>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead class="thead">
                                    <tr>
                                      <th scope="col" class="sort">No</th>
                                      <th scope="col" class="sort">Nomer Order</th>
                                      <th scope="col" class="sort">Client</th>
                                      <th scope="col" class="sort">Jenis Order</th>
                                      <th scope="col" class="sort">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="list">
                                 @php $no = 1; @endphp
                                 @forelse ($renewals as $renewal)


                                 @if (now()->format('d') - 4 == $renewal->created_at->format('d'))
                                  <tr>
                                    <td>
                                       {{ $no++}}
                                    </td>
                                    <td>
                                     {{ $renewal->nomerOrder }}
                                    </td>
                                    <td>
                                    {{ $renewal->fromTrx }}
                                    </td>
                                    <td>
                                       {{ $renewal->jenisOrder }}
                                    </td>

                                   <td class="text-right">
                                       <a class="btn-ic btn-primary m-r-5" href="" data-toggle="tooltip" data-placement="top" title="Edit"><i class="icon-pencil"></i></a>
                                   </td>

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
            {{-- end h-4 --}}


            {{-- h --}}
            <div class="card">

                <div class="card-body">
                    <div class="card">
                        <div class="card-header"><h3>H Renewal</h3></div>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead class="thead">
                                    <tr>
                                      <th scope="col" class="sort">No</th>
                                      <th scope="col" class="sort">Nomer Order</th>
                                      <th scope="col" class="sort">Client</th>
                                      <th scope="col" class="sort">Jenis Order</th>
                                      <th scope="col" class="sort">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="list">
                                 @php $no = 1; @endphp
                                 @forelse ($renewals as $renewal)


                                 @if (now()->format('y') - 1 == $renewal->created_at->format('y'))
                                  <tr>
                                    <td>
                                       {{ $no++}}
                                    </td>
                                    <td>
                                     {{ $renewal->nomerOrder }}
                                    </td>
                                    <td>
                                    {{ $renewal->fromTrx }}
                                    </td>
                                    <td>
                                       {{ $renewal->jenisOrder }}
                                    </td>

                                   <td class="text-right">
                                       <a class="btn-ic btn-primary m-r-5" href="" data-toggle="tooltip" data-placement="top" title="Edit"><i class="icon-pencil"></i></a>
                                   </td>

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
            {{-- end h --}}
		</div>
</div>



@endsection

@section('script')
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
