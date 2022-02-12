@extends('layouts.admin-layout')

@section('title', 'Tambah Kategori ')

@section('main-content')

<div class="row mt-2">
    <div class="col-sm-12 col-md-12 col-lg-12">

        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                {{-- @if (session('berhasil_login'))
                    <div class="alert alert-success">
                        {{ session('berhasil_login') }}
                    </div>
                @endif --}}
            </div>
        </div>

        <div class="card">

            <div class="card-header">
                <div class="row">
                    <div class="col-sm-10 col-md-10 col-lg-10">
                        <h4 class="text-bold text-dark">Tambah Kategori </h4>
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

                <form action="{{ route('post-tambah-kategori') }}" method="POST">
                    @csrf
                    @error('kategori_nama')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    @error('kategori_tipe')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="kategori_nama">Nama Kategori</label>
                                <input name="kategori_nama" type="text" class="form-control @error('kategori_nama') is-invalid @enderror" id="kategori_nama" placeholder="Masukkan nama kategori..." value="{{ old('kategori_nama') }}">
                                <small id="emailHelp" class="form-text text-muted">Contoh : Wisata Kuliner / Olahan Pangan</small>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="kategori_tipe">Nama Kategori</label>
                                <select name="kategori_tipe" class="form-control @error('kategori_tipe') is-invalid @enderror" id="kategori_tipe">
                                    <option value="null" selected disabled>Pilih Tipe Kategori...</option>
                                    @if ($users->login_level == 'admin')
                                        <option value="wisata">Wisata</option>
                                    @endif
                                    <option value="produk">Produk</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                        </div>
                    </div>

                  </form>

            </div>
        </div>

    </div>
</div>

@endsection