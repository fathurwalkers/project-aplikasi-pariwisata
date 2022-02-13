@extends('layouts.admin-layout')

@section('title', 'Tambah Destinasi Wisata')

@push('css')
<!-- leaflet css  -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>
   <script src="https://cdn.tiny.cloud/1/0fzrtif8pxlg6kw3rfi13s2t5xzfaiqpavx3fiqci9ysvmva/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<style>
    #mapid { height: 180px; }
</style>
@endpush

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
                        <h4 class="text-bold text-dark">Ubah Destinasi Wisata</h4>
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

            <!-- Main Content -->
            <div class="card-body">

                <form action="{{ route('post-update-wisata', $wisata->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="wisata_nama">Nama Tempat Wisata : </label>
                                <input name="wisata_nama" type="text" class="form-control" id="wisata_nama" placeholder="Masukkan nama tempat wisata..." value="{{ $wisata->wisata_nama }}">
                                <small id="emailHelp" class="form-text text-muted">contoh : Air Terjun Kaongkeongkea</small>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="wisata_kota">Kabupaten / Kota : </label>
                                <input name="wisata_kota" type="text" class="form-control" id="wisata_kota" placeholder="Masukkan tempat/kabupaten/kota/desa wisata..." value="{{ $wisata->wisata_kota }}">
                                <small id="emailHelp" class="form-text text-muted">contoh : Pasarwajo</small>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="wisata_maps">Url Google Map : </label>
                                <input name="wisata_maps" type="text" class="form-control" id="wisata_maps" placeholder="Masukkan tempat/kabupaten/kota/desa wisata..." value="{{ $wisata->wisata_maps }}">
                                {{-- <small id="emailHelp" class="form-text text-muted">contoh : Pasarwajo</small> --}}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label for="wisata_kecamatan">Kecamatan : </label>
                                <input name="wisata_kecamatan" type="text" class="form-control" id="wisata_kecamatan" placeholder="Masukkan tempat/kabupaten/kota/desa wisata..." value="{{ $wisata->wisata_kecamatan }}">
                                <small id="emailHelp" class="form-text text-muted">contoh : Pasarwajo</small>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label for="wisata_kelurahan">Kelurahan / Desa : </label>
                                <input name="wisata_kelurahan" type="text" class="form-control" id="wisata_kelurahan" placeholder="Masukkan tempat/kabupaten/kota/desa wisata..." value="{{ $wisata->wisata_kelurahan }}">
                                <small id="emailHelp" class="form-text text-muted">contoh : Pasarwajo</small>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label for="wisata_provinsi">Provinsi : </label>
                                <input name="wisata_provinsi" type="text" class="form-control" id="wisata_provinsi" placeholder="Masukkan tempat/kabupaten/kota/desa wisata..." value="{{ $wisata->wisata_provinsi }}">
                                <small id="emailHelp" class="form-text text-muted">contoh : Pasarwajo</small>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <label for="">Gambar Lama : </label><br>
                            <img src="{{ asset('foto') }}/{{ $wisata->wisata_header_foto }}" alt="" width="200px">
                        </div>
                    </div>

                    <label for="">Gambar Baru : </label>
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <img id="output_image" class="border border-1"/>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="wisata_header_foto">Foto : </label>
                                <input name="wisata_header_foto" type="file" class="form-control-file" onchange="preview_image(event)">
                                <small class="form-text text-muted">Upload Header Foto Wisata</small>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <label for="wisata_deskripsi">Deskripsi Tentang Wisata : </label>
                            <textarea name="wisata_deskripsi" id="wisata_deskripsi">{{ $wisata->wisata_deskripsi }}</textarea>
                        </div>
                    </div>

                    <div class="row mt-4 mb-2">
                        <div class="col-sm-12 col-md-12 col-lg-12 d-flex justify-content-center">
                            <button type="submit" class="btn btn-info btn-lg rounded shadow">SIMPAN</button>
                        </div>
                    </div>
                </form>

            </div>
            <!-- End Main Content -->

        </div>
    </div>
</div>


@endsection

@push('js')
<script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
      toolbar_mode: 'floating',
    });

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
