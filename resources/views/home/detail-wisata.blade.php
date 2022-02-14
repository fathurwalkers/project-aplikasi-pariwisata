@extends('layouts.home-layout')

@section('main-content')
<div class="card">
    <div class="card-body">

        <div class="container">

            <div class="row d-flex justify-content-center">
                <div class="col-sm-12 col-md-12 col-lg-12 border-1 border-black d-flex justify-content-center mb-2">
                    <h4>
                        Galeri Wisata
                    </h4>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 d-flex justify-content-center">
                    <img class="img img-responsive d-flex justify-content-center" src="{{ url('/') }}/{{ $wisata->wisata_header_foto }}" alt="" width="300px">
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 mb-4 mt-4 d-flex justify-content-center">
                    <h3>Informasi Wisata</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 border-1 border-black">
                    <table class="table border-0 mx-auto d-flex justify-content-center">
                        <tr>
                            <td>
                                Nama Wisata <br>
                                Provinsi  <br>
                                Kota / Kabupaten <br>
                                Kecamatan <br>
                                Kelurahan / Desa <br>
                            </td>
                            <td>
                                : &nbsp; {{ $wisata->wisata_nama }} <br>
                                : &nbsp; {{ $wisata->wisata_provinsi }} <br>
                                : &nbsp; {{ $wisata->wisata_kota }} <br>
                                : &nbsp; {{ $wisata->wisata_kecamatan }} <br>
                                : &nbsp; {{ $wisata->wisata_kelurahan }} <br>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 border-1 border-black d-flex justify-content-center mb-2">
                    <h4>
                        Peta Lokasi
                    </h4>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12 border-1 border-black d-flex justify-content-center mb-2">
                    <iframe src="{{ $wisata->wisata_maps }}" width="650" height="360" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 mb-4 mt-4 d-flex justify-content-center">
                    <h3>Produk yang ditawarkan</h3>
                </div>
            </div>
            <div class="row mb-4">

                @foreach ($produk as $item)

                <div class="col-sm-4 col-md-4 col-lg-4 mb-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{ url('/') }}/{{ $item->produk_headergambar }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->produk_nama }}</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>

                @endforeach

                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 d-flex justify-content-center">
                        {{-- {{ $produk->onEachSide(0)->links() }} --}}
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>
@endsection
