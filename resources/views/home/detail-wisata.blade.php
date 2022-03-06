@extends('layouts.home-layout')

@push('css')
    <style>
        .img-fix {
            width: 100%!important; /* You can set the dimensions to whatever you want */
            height: 200px!important;
            object-fit: cover!important;
        }

        .img-fix-produk {
            width: 60%!important; /* You can set the dimensions to whatever you want */
            height: 200px!important;
            object-fit: cover!important;
        }

        .fix-text {
            font-size: 15px!important;
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
                                <h5 class="card-title">
                                    <a href="#" class="link"  data-toggle="modal" data-target="#modaldetailproduk{{ $item->id }}" >
                                        {{ $item->produk_nama }}
                                    </a>
                                </h5>
                                <p class="card-text">{{ Str::limit($item->produk_keterangan, 50) }}</p>
                            </div>
                        </div>
                    </div>

                    {{-- MODAL --}}
                    <div class="modal fade" id="modaldetailproduk{{ $item->id }}" tabindex="1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <h4 class="modal-title">Detail Informasi Produk - {{ $item->produk_nama }}</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="modal-body">

                                    <div class="row mb-2">
                                        <div class="col-sm-12 col-md-12 col-lg-12 d-flex justify-content-center">
                                            <img class="card-img-top img-fix-produk" src="{{ asset('foto') }}/{{ $item->produk_headergambar }}" alt="Card image cap">
                                        </div>
                                    </div>

                                    <hr />

                                    <div class="row mb-2">
                                        <div class="col-sm-2 col-md-2 col-lg-2">
                                        </div>

                                        <div class="col-sm-4 col-md-4 col-lg-4">
                                            <h5 class="fix-text">Nama Produk </h5>
                                            <h5 class="fix-text">Harga </h5>
                                        </div>

                                        <div class="col-sm-4 col-md-4 col-lg-4">
                                            <h5 class="fix-text"> : {{ $item->produk_nama }}</h5>
                                            <h5 class="fix-text"> : {{ $item->produk_harga }}</h5>
                                        </div>

                                        <div class="col-sm-2 col-md-2 col-lg-2">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 col-lg-12 d-flex justify-content-center">
                                            <h5 class="fix-text">Keterangan</h5>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-2 col-md-2 col-lg-2">
                                        </div>
                                        <div class="col-sm-8 col-md-8 col-lg-8">
                                            {!! $item->produk_keterangan !!}
                                        </div>
                                        <div class="col-sm-2 col-md-2 col-lg-2">
                                        </div>
                                    </div>

                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn gray btn-danger" data-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-info" >
                                        Pesan
                                    </button>
                                </div>
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
