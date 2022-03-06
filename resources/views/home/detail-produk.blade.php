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
{{-- <div class="card">
    <div class="card-body">

        <div class="container">

            <div class="row">
            </div>

        </div>

    </div>
</div> --}}

@endsection
