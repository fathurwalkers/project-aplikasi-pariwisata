@extends('layouts.home-layout-english')

@section('main-content')
<div class="card">
    <div class="card-body">

        <div class="container">

            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 border-1 border-black d-flex justify-content-center mb-2">
                    <h4>
                        Location
                    </h4>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12 border-1 border-black d-flex justify-content-center mb-2">
                    <iframe src="{{ $wisata->wisata_maps }}" width="650" height="360" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 border-1 border-black d-flex justify-content-center mb-2">
                    <h4>
                        Gallery
                    </h4>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <img class="img img-responsive" src="{{ asset('foto') }}/{{ $wisata->wisata_header_foto }}" alt="" width="650px">
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 border-1 border-black">
                    <table class="table border-0 mx-auto d-flex justify-content-center">
                        <tr>
                            <td>
                                Name <br>
                                State / Province  <br>
                                City <br>
                                Districts <br>
                                Place <br>
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
                <div class="col-lg-4 col-md-6">
                    <div class="single_place">
                        <div class="thumb">
                            <img src="" alt="">
                            <a href="#" class="prise">UKM</a>
                        </div>
                        <div class="place_info">
                            <a href=""><h3>//////</h3></a>
                            {{-- <p>Jl. Kolagana, Palabusa, Kec. Bungi, Kota Bau-Bau.</p> --}}
                            <p>///</p>
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
                <div class="col-lg-4 col-md-6">
                    <div class="single_place">
                        <div class="thumb">
                            <img src="" alt="">
                            <a href="#" class="prise">UKM</a>
                        </div>
                        <div class="place_info">
                            <a href=""><h3>//////</h3></a>
                            {{-- <p>Jl. Kolagana, Palabusa, Kec. Bungi, Kota Bau-Bau.</p> --}}
                            <p>///</p>
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
                <div class="col-lg-4 col-md-6">
                    <div class="single_place">
                        <div class="thumb">
                            <img src="" alt="">
                            <a href="#" class="prise">UKM</a>
                        </div>
                        <div class="place_info">
                            <a href=""><h3>//////</h3></a>
                            {{-- <p>Jl. Kolagana, Palabusa, Kec. Bungi, Kota Bau-Bau.</p> --}}
                            <p>///</p>
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
            </div>

        </div>

    </div>
</div>
@endsection
