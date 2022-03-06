@extends('layouts.home-layout-english')

@push('css')
    <style>
        .img-fix {
            width: 100%!important; /* You can set the dimensions to whatever you want */
            height: 200px!important;
            object-fit: cover!important;
        }
    </style>
@endpush

@section('main-content')
<div class="card">
    <div class="card-body">

        <div class="container">

            <div class="row d-flex justify-content-center">
                <div class="col-sm-12 col-md-12 col-lg-12 border-1 border-black d-flex justify-content-center mb-2">
                    <h4>
                        Gallery
                    </h4>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 d-flex justify-content-center">
                    <img class="img img-responsive d-flex justify-content-center" src="{{ url('/') }}/{{ $wisata->wisata_header_foto }}" alt="" width="300px">
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 mb-4 mt-4 d-flex justify-content-center">
                    <h3>Information</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8 col-md-8 col-lg-8 border-1 border-black">
                    <h4 class="text-center">
                        About
                    </h4>
                    <table class="table border-0 mx-auto">
                        <tr>
                            <td>
                                Destination Name <br>
                                Province  <br>
                                City / District <br>
                                District <br>
                                Section <br>
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

                <div class="col-sm-4 col-md-4 col-lg-4 border-1 border-black d-flex justify-content-center mb-2">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <iframe src="{{ $wisata->wisata_maps }}" width="500" height="360" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 border-1 border-black d-flex justify-content-center mb-2">
                    <h4>
                        Peta Lokasi
                    </h4>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12 border-1 border-black d-flex justify-content-center mb-2">
                    <iframe src="{{ $wisata->wisata_maps }}" width="650" height="360" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div> --}}

            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 mb-4 mt-4 d-flex justify-content-center">
                    <h3>Produk Offers</h3>
                </div>
            </div>
            <div class="row mb-4">

                @foreach ($produk as $item)

                <div class="col-sm-4 col-md-4 col-lg-4 mb-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top img-fix" src="{{ asset('foto') }}/{{ $item->produk_headergambar }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->produk_nama }}</h5>
                            <p class="card-text">{{ Str::limit($item->produk_keterangan, 50) }}</p>
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
