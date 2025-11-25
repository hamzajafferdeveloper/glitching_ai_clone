@extends('layout.base')

@section('base-content')
    <div class="page-scanning-bg">
        <div
            class="min-vh-100 d-flex flex-column justify-content-center align-items-center gap-4 p-4 position-relative overflow-hidden">
            <img src="{{ asset('/storage/images/header-logo.png') }}" class="img-fluid" style="width: 13rem;" alt="logo">
            @yield('content')
        </div>
    </div>
@endsection
