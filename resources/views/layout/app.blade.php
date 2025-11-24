@extends('layout.base')

<style>
    .scrollable-content {
        margin-top: 80px;
        /* if you have a fixed header */
        min-height: calc(100vh - 80px);
        overflow-y: auto;
        overflow-x: hidden;
        scroll-behavior: smooth;
    }
</style>

@section('base-content')
    @include('components.app-header')
    <div class="scrollable-content">
        @yield('content')
    </div>
@endsection
