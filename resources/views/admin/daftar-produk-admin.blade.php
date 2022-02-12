@extends('layouts.admin-layout')

@section('title', 'Daftar Produk')

@section('main-content')

<div class="row mt-2">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-sm-10 col-md-10 col-lg-10">
                        <h4 class="text-bold text-dark">Daftar Produk</h4>
                    </div>
                    <div class="col-sm-2 col-md-2 col-lg-2 d-flex justify-content-end mx-auto my-auto">
                        <form action="{{ route('dashboard') }}" method="GET">
                            @csrf
                            <button type="submit" class="btn btn-md rounded btn-primary shadow-sm border-1 border-light">
                                <span class="text-bold">
                                    Kembali
                                </span> 
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">

                        <!-- Main Content --> 
                        <table id="example1" class="table table-bordered" style="width:100%">

                            <thead class="thead-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Produk</th>
                                    <th>Harga</th>
                                    <th>Kode</th>
                                    <th>Kategori Produk</th>
                                    <th>Toko</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>

                            <tbody class="text-dark">
                                @foreach ($produk_admin as $item)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>

                                    <td>{{ $item->produk_nama }}</td>
                                    <td class="text-center">{{ intval($item->produk_harga) }}</td>
                                    <td>{{ $item->produk_kode }}</td>

                                    @if($item->kategori_id == null)
                                    <td>Tidak ada Kategori</td>
                                    @else
                                    <td>{{ $item->kategori->kategori_nama }}</td>
                                    @endif

                                    @if($item->umkm_id == null)
                                    <td>Tidak ada UMKM</td>
                                    @else
                                    <td>{{ $item->umkm->umkm_nama }}</td>
                                    @endif

                                    <td class="mx-auto d-flex justify-content-center">
                                        <form action="{{ route('lihat-produk', $item->id) }}" method="GET">
                                            @csrf
                                            <button type="submit" class="btn btn-sm rounded btn-info mr-1 d-flex">
                                                <i class="fas fa-info-circle my-auto"></i> &nbsp;<strong>Lihat</strong>
                                            </button>
                                        </form>
                                        {{-- <form action="{{ route('update-produk', $item->id) }}" method="GET">
                                            @csrf
                                            <button type="submit" class="btn btn-sm rounded btn-primary mr-1 d-flex">
                                                <i class="fas fa-wrench my-auto"></i>&nbsp;<strong>Ubah</strong>
                                            </button>
                                        </form> --}}

                                        <button type="button" class="btn btn-sm rounded btn-danger d-flex" data-toggle="modal" data-target="#hapus{{ $item->id }}">
                                            <i class="fas fa-trash my-auto"></i>&nbsp;<strong>Hapus</strong>
                                        </button>
                                    </td>
                                </tr>

                                {{-- Modal Delete --}}
                                <div class="modal fade" id="hapus{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Hapus Produk</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <form action="{{ route('hapus-produk', $item->id) }}" method="POST">
                                            @csrf 
                                            <div class="modal-body">
                                                Apakah anda yakin ingin menghapus Produk "{{ $item->produk_nama }}" ini?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                <button type="submit" class="btn btn-primary">Ya, Hapus</button>
                                            </div>
                                        </form>
                                      </div>
                                    </div>
                                </div>
                                {{-- End Modal Delete --}}

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

@push('js')
    <script>
        $(document).ready( function () {
            $('#example1').DataTable();
        } );
    </script>
@endpush