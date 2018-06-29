@extends('layouts.master_layout')

@section('sidebar')
    @include('layouts.admin.sidebar')
@endsection

@section('header')
    {{--Header--}}
    <nav class="navbar navbar-transparent navbar-absolute">
        @include('admin_.includes.navbar')
    </nav>
@endsection

@section('footer')
    {{--Footer--}}
    <footer class="footer">
        @include('admin_.includes.footer')
    </footer>
@endsection