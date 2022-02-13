@extends('layouts.admin-layout')

@section('title', 'Tambah Produk')

@push('css')
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
    tinymce.init({
        selector: '#mytextarea'
    });
    </script>
@endpush

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
                        <h4 class="text-bold text-dark">Pendaftaran UKM</h4>
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
                <form action="#" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            @error('produk_nama')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <!-- Main Content -->
                            <div class="form-group">
                                <label for="produk_nama">Nama Produk : </label>
                                <input type="text" class="form-control @error('produk_nama') is-invalid @enderror" id="produk_nama" placeholder="Masukkan nama produk..." name="produk_nama">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <!-- Main Content -->
                            <div class="form-group">
                                <label for="produk_harga">Harga Produk : </label>
                                <input type="number" class="form-control @error('produk_harga') is-invalid @enderror" id="produk_harga" placeholder="Masukkan Harga produk..." name="produk_harga">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Foto : </label>
                                <input type="file" class="form-control-file @error('produk_keterangan') is-invalid @enderror" onchange="preview_image(event)" name="produk_headergambar">
                                <small class="form-text text-muted">Upload Pas Foto ekstensi .jpg</small>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <img id="output_image" class="border border-1" width="500px" />
                        </div>
                    </div>

                    {{-- <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <img id="output_image" class="border border-1" width="500px" />
                        </div>
                    </div> --}}

                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 mt-3">
                            <label for="mytextarea">Keterangan Produk : </label>
                            <textarea id="mytextarea" name="produk_keterangan"></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 mx-auto d-flex justify-content-center mt-4">
                            <button class="btn btn-md btn-info" type="submit">
                                Tambah Produk
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@push('js')
    <script type='text/javascript'>
        function preview_image(event) {
            var reader = new FileReader();
            reader.onload = function() {
                    var output = document.getElementById('output_image');
                    output.src = reader.result;
                }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
@endpush
