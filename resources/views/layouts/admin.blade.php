@extends('layouts.app')

@section('header')
@include('includes.header')
@include('includes.adminNav')
@stop

@section('content')
@yield('admin')
@endsection

@section('css')
<style>
    .table th, .table td, .table i {
        vertical-align: middle !important;
    }

    .table {
        margin-bottom: 100px;
    }
</style>
@stop
