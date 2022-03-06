@extends('layouts.home-layout')

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
                        Banner Wisata
                    </h4>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 d-flex justify-content-center">
                    <img class="img img-thumbnail img-responsive d-flex justify-content-center" src="{{ asset('/foto') }}/{{ $wisata->wisata_header_foto }}" alt="" width="400px">
                </div>
            </div>

            <hr />

            <div class="row mb-2">
                <div class="col-sm-12 col-md-12 col-lg-12 border-1 border-black">
                    <h4 class="text-center">
                        Tentang Wisata
                    </h4>
                </div>
            </div>
            <div class="row border border-1 border-black py-2 mb-2">
                <div class="col-sm-3 col-md-3 col-lg-3">

                </div>
                <div class="col-sm-3 col-md-3 col-lg-3">
                    <h5> Nama Wisata </h5>
                    <h5> Provinsi </h5>
                    <h5> Kota / Kabupaten </h5>
                    <h5> Kecamatan </h5>
                    <h5> Kelurahan / Desa </h5>
                </div>

                <div class="col-sm-3 col-md-3 col-lg-3">
                    <h5> : &nbsp; {{ $wisata->wisata_nama }} </h5>
                    <h5> : &nbsp; {{ $wisata->wisata_provinsi }} </h5>
                    <h5> : &nbsp; {{ $wisata->wisata_kota }} </h5>
                    <h5> : &nbsp; {{ $wisata->wisata_kecamatan }} </h5>
                    <h5> : &nbsp; {{ $wisata->wisata_kelurahan }} </h5>
                </div>
                <div class="col-sm-3 col-md-3 col-lg-3">

                </div>
            </div>

            <hr />

            <div class="row mb-2 mt-2">
                <div class="col-sm-12 col-md-12 col-lg-12 border-1 border-black">
                    <h4 class="text-center">
                        Peta Lokasi
                    </h4>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 border-1 border-black d-flex justify-content-center mb-2">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <iframe src="{{ $wisata->wisata_maps }}" width="950" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>

            <hr />

            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 mb-4 mt-4 d-flex justify-content-center">
                    <h3>Produk yang ditawarkan</h3>
                </div>
            </div>
            <div class="row mb-4">
                @if ($produk == null)
                   <h4 class="text-center"> Belum ada produk di lokasi ini. </h4>
                @else
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
                @endif
            </div>

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
