@extends('main_layout.index')

@section('body_main_layout')
    <div class="d-flex justify-content-start">
        @include('navbar_admin.index')
        @include('dashboard.index')
    </div>
@endsection