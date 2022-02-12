@extends('layouts.admin-layout')

@section('title', 'Profile Pengguna')

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
                        <h4>Profile - {{ $pengguna->login_nama }}</h4>
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
                    <div class="col-sm-3 col-md-3 col-lg-3">
                        <!-- Main Content --> 
                        <img src="#" alt="">
                    </div>
                    <div class="col-sm-2 col-md-2 col-lg-2">
                        <p>
                            <span class="text-dark">Nama </span><br>
                            <span class="text-dark">Username </span><br>
                            <span class="text-dark">Email </span><br>
                            <span class="text-dark">Status </span><br>
                            <span class="text-dark">No. Telepon / HP </span><br>
                        </p>
                    </div>
                    <div class="col-sm-7 col-md-7 col-lg-7">
                        <p>
                            : <span class="text-dark"> {{ $pengguna->login_nama }} </span> <br>
                            : <span class="text-dark"> {{ $pengguna->login_username }} </span> <br>
                            : <span class="text-dark"> {{ $pengguna->login_email }} </span> <br>
                            : <button class="btn btn-sm btn-success">{{ strtoupper($pengguna->login_status) }}</button> <br>
                            : <span class="text-dark"> {{ $pengguna->login_telepon }} </span> <br>
                            : <span class="text-dark"> {{ $pengguna->login_level }} </span> <br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection