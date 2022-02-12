@extends('layouts.admin-layout')

@section('title', 'Beranda')

@section('main-content')

<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">
        @if (session('berhasil_login'))
            <div class="alert alert-success">
                {{ session('berhasil_login') }}
            </div>
        @endif
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="row">
    <div class="col-lg-3 col-md-3 mb-3">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Jumlah Pengguna</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            @php
                                if ($user == null) {
                                    echo '0';
                                } else {
                                    echo $user;
                                }
                            @endphp
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-lg-3 col-md-3 mb-3">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Jumlah Produk Terdaftar</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            @php
                            if ($produk == null) {
                                echo '0';
                            } else {
                                echo $produk;
                            }
                        @endphp
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-lg-3 col-md-6 mb-3">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Jumlah Tempat Wisata
                        </div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                    @php
                                    if ($wisata == null) {
                                        echo '0';
                                    } else {
                                        echo $wisata;
                                    }
                                @endphp
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-3 mb-3">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Jumlah UMKM Terdaftar</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            @php
                            if ($umkm == null) {
                                echo '0';
                            } else {
                                echo $umkm;
                            }
                        @endphp
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <div class="row mt-2">
    <div class="col-sm-12 col-md-12 col-lg-12">
        
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-sm-10 col-md-10 col-lg-10">
                        <h3 class="text-bold text-dark">Format Layout</h3>
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
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <p>INDEX PAGE</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div> --}}

@endsection