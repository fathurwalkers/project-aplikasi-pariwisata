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
{{-- <div class="slider_area">
    <div class="slider_active owl-carousel">
        <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-12 col-md-12">
                        <div class="slider_text text-center">
                            <h3>Buton</h3>
                            <p>Selamat Datang Di Buton TRIP</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- slider_area_end -->

<!-- where_togo_area_start  -->
{{-- <div class="where_togo_area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3">
                <div class="form_area">
                    <h3>Kemana anda akan pergi?</h3>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="search_wrap">
                    <form class="search_form" action="#">
                        <div class="input_field">
                            <input type="text" placeholder="Where to go?">
                        </div>
                        <div class="input_field">
                            <input id="datepicker" placeholder="Date">
                        </div>
                        <div class="input_field">
                            <select>
                                <option data-display="Travel type">Travel type</option>
                                <option value="1">Some option</option>
                                <option value="2">Another option</option>
                            </select>
                        </div>
                        <div class="search_btn">
                            <button class="boxed-btn4 " type="submit" >Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- where_togo_area_end  -->

<!-- popular_destination_area_start  -->
<!-- popular_destination_area_end  -->
{{-- {{ $wisata->links('pagination::bootstrap-4') }} --}}
<div class="popular_places_area">

    <div class="container">

        {{-- <div class="container bg-white"> --}}
            {{-- <div class="row py-4 mb-5">
                <div class="col-sm-12 col-md-12 col-lg-12 d-flex justify-content-center">
                    <h2>
                        Selamat Datang
                    </h2>
                </div>
            </div> --}}

            {{-- <div class="card border-0">
                <div class="card-body">
                    <div class="row py-4 mb-5">
                        <div class="col-sm-12 col-md-12 col-lg-12 d-flex justify-content-center">
                            <h2>
                                Selamat Datang
                            </h2>
                        </div>
                    </div>
                </div>
            </div> --}}
        {{-- </div> --}}

        <div class="row justify-content-center">
            <div class="col-lg-6 mt-5">
                <div class="section_title text-center mb_70">
                    <h3>Tour Destination</h3>
                    <p>Tour Destination on Buton, Sulawesi Tenggara</p>
                </div>
            </div>
        </div>
        <div class="row">

            @foreach ($wisata as $wis)
            <div class="col-lg-4 col-md-6">
                <div class="single_place">
                    <div class="thumb">
                        <img src="{{ asset('foto') }}/{{ $wis->wisata_header_foto }}" alt="" class="img img-fix">
                        <a href="#" class="prise">{{ $wis->wisata_kota }}</a>
                    </div>
                    <div class="place_info">
                        <a href="{{ route('english-detail-wisata', $wis->id) }}"><h3>{{ $wis->wisata_nama }}</h3></a>
                        {{-- <p>Jl. Kolagana, Palabusa, Kec. Bungi, Kota Bau-Bau.</p> --}}
                        <p>{{ $wis->wisata_kota }} / {{ $wis->wisata_kelurahan }} / {{ $wis->wisata_kecamatan }}</p>
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
                {{ $wisata->links('pagination::bootstrap-4') }}
            </div>
        </div>

        {{-- <div class="row">
            <div class="col-lg-12">
                <div class="more_place_btn text-center">
                    <a class="boxed-btn4" href="#">More Places</a>
                </div>
            </div>
        </div> --}}
    </div>
</div>


{{-- <div class="video_area video_bg overlay">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="video_wrap text-center">
                    <h3>Enjoy Video</h3>
                    <div class="video_icon">
                        <a class="popup-video video_play_button" href="https://www.youtube.com/watch?v=f59dDEk57i0">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}


{{-- <div class="travel_variation_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single_travel text-center">
                    <div class="icon">
                        <img src="{{ asset('assets/pariwisata') }}/img/svg_icon/1.svg" alt="">
                    </div>
                    <h3>Comfortable Journey</h3>
                    <p>A wonderful serenity has taken to the possession of my entire soul.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single_travel text-center">
                    <div class="icon">
                        <img src="{{ asset('assets/pariwisata') }}/img/svg_icon/2.svg" alt="">
                    </div>
                    <h3>Luxuries Hotel</h3>
                    <p>A wonderful serenity has taken to the possession of my entire soul.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single_travel text-center">
                    <div class="icon">
                        <img src="{{ asset('assets/pariwisata') }}/img/svg_icon/3.svg" alt="">
                    </div>
                    <h3>Travel Guide</h3>
                    <p>A wonderful serenity has taken to the possession of my entire soul.</p>
                </div>
            </div>
        </div>
    </div>
</div> --}}


<!-- testimonial_area  -->
{{-- <div class="testimonial_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="testmonial_active owl-carousel">
                    <div class="single_carousel">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="single_testmonial text-center">
                                    <div class="author_thumb">
                                        <img src="{{ asset('assets/pariwisata') }}/img/testmonial/author.png" alt="">
                                    </div>
                                    <p>"Working in conjunction with humanitarian aid agencies, we have supported programmes to help alleviate human suffering.</p>
                                    <div class="testmonial_author">
                                        <h3>- Micky Mouse</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_carousel">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="single_testmonial text-center">
                                    <div class="author_thumb">
                                        <img src="{{ asset('assets/pariwisata') }}/img/testmonial/author.png" alt="">
                                    </div>
                                    <p>"Working in conjunction with humanitarian aid agencies, we have supported programmes to help alleviate human suffering.</p>
                                    <div class="testmonial_author">
                                        <h3>- Tom Mouse</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_carousel">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="single_testmonial text-center">
                                    <div class="author_thumb">
                                        <img src="{{ asset('assets/pariwisata') }}/img/testmonial/author.png" alt="">
                                    </div>
                                    <p>"Working in conjunction with humanitarian aid agencies, we have supported programmes to help alleviate human suffering.</p>
                                    <div class="testmonial_author">
                                        <h3>- Jerry Mouse</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- /testimonial_area  -->


{{-- <div class="recent_trip_area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_title text-center mb_70">
                    <h3>Recent Trips</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single_trip">
                    <div class="thumb">
                        <img src="{{ asset('assets/pariwisata') }}/img/trip/1.png" alt="">
                    </div>
                    <div class="info">
                        <div class="date">
                            <span>Oct 12, 2019</span>
                        </div>
                        <a href="#">
                            <h3>Journeys Are Best Measured In
                                New Friends</h3>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single_trip">
                    <div class="thumb">
                        <img src="{{ asset('assets/pariwisata') }}/img/trip/2.png" alt="">
                    </div>
                    <div class="info">
                        <div class="date">
                            <span>Oct 12, 2019</span>
                        </div>
                        <a href="#">
                            <h3>Journeys Are Best Measured In
                                New Friends</h3>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single_trip">
                    <div class="thumb">
                        <img src="{{ asset('assets/pariwisata') }}/img/trip/3.png" alt="">
                    </div>
                    <div class="info">
                        <div class="date">
                            <span>Oct 12, 2019</span>
                        </div>
                        <a href="#">
                            <h3>Journeys Are Best Measured In
                                New Friends</h3>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
