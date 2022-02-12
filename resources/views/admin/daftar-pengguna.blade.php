@extends('layouts.admin-layout')

@section('title', 'FormatLayout')

@section('main-content')

<div class="row mt-2">
    <div class="col-sm-12 col-md-12 col-lg-12">

        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                @if (session('berhasil_login'))
                    <div class="alert alert-success">
                        {{ session('berhasil_login') }}
                    </div>
                @endif
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-sm-10 col-md-10 col-lg-10">
                        <h4 class="text-bold text-dark">Daftar Wisata</h4>
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
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>Status</th>
                                    <th>Level</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>

                            <tbody class="text-dark">
                                @foreach ($pengguna as $item)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td>{{ $item->login_nama }}</td>
                                    <td>{{ $item->login_username }}</td>
                                    <td>{{ $item->login_status }}</td>
                                    <td>{{ $item->login_level }}</td>

                                    <td class="mx-auto d-flex justify-content-center">
                                        <form action="{{ route('lihat-pengguna', $item->id) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-sm rounded btn-info mr-1 d-flex">
                                                <i class="fas fa-info-circle my-auto"></i> &nbsp;<strong>Lihat</strong>
                                            </button>
                                        </form>
                                        {{-- <button type="submit" class="btn btn-sm rounded btn-primary mr-1 d-flex">
                                            <i class="fas fa-wrench my-auto"></i>&nbsp;<strong>Ubah</strong>
                                        </button>
                                        <button type="submit" class="btn btn-sm rounded btn-danger d-flex">
                                            <i class="fas fa-trash my-auto"></i>&nbsp;<strong>Hapus</strong>
                                        </button> --}}
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

@push('js')
    <script>
        $(document).ready( function () {
            $('#example1').DataTable();
        } );
    </script>
@endpush