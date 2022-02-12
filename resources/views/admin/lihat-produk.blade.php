@extends('layouts.admin-layout')

@section('title', 'Detail Informasi Produk')

@section('main-content')

<div class="row">
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

        <div class="card mb-4">

            <div class="card-header">
                <div class="row">
                    <div class="col-sm-10 col-md-10 col-lg-10">
                        <h4 class="text-bold text-dark">Informasi Produk - {{ $produk->produk_nama }}</h4>
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

                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 d-flex justify-content-center">
                        <img class="img img-responsive border-1" src="{{ asset('foto') }}/{{ $produk->produk_headergambar }}" alt="" width="300px">
                    </div>
                </div>
                <div class="row d-flex justify-content-center mx-auto mt-4">
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Nama Produk </li>
                            <li class="list-group-item">Harga Produk </li>
                            <li class="list-group-item">Kode Produk </li>
                            <li class="list-group-item">Keterangan Produk </li>
                        </ul>
                    </div>
                    <div class="col-sm-8 col-md-8 col-lg-8">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"> : {{ $produk->produk_nama }}</li>
                            <li class="list-group-item"> : Rp. {{ number_format($produk->produk_harga, 2, ",", ".") }}</li>
                            <li class="list-group-item"> : {{ $produk->produk_kode }}</li>
                            <li class="list-group-item"> : {!! $produk->produk_keterangan !!}</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

@endsection