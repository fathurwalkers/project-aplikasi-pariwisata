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
<div class="popular_places_area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_title text-center mb_70 mt-4">
                    <h3>UKM Terdaftar</h3>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="row">

            @foreach ($umkm as $item)
            <div class="col-lg-4 col-md-6">
                <div class="single_place">
                    <div class="thumb">
                        <img src="{{ asset('foto') }}/{{ $item->umkm_foto }}" alt="" class="img img-fix">
                        {{-- <a href="#" class="prise">{{ $item->umkm_foto }}</a> --}}
                    </div>
                    <div class="place_info">
                        <a href="#"><h3>{{ $item->umkm_nama }}</h3></a>
                        {{-- <p>Jl. Kolagana, Palabusa, Kec. Bungi, Kota Bau-Bau.</p> --}}
                        <p>Pemilik : {{ $item->umkm_pemilik }} / {{ $item->umkm_kode }}</p>
                        <div class="rating_days d-flex justify-content-between">
                            {{-- <span class="d-flex justify-content-center align-items-center">
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <a href="#">(20 Review)</a>
                            </span>
                            <div class="days">
                                <i class="fa fa-clock-o"></i>
                                <a href="#">5 Days</a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 d-flex justify-content-center">
                {{ $umkm->onEachSide(0)->links() }}
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="more_place_btn text-center">
                    <a class="boxed-btn4" href="{{ route('homepage') }}">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
